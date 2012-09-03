<?php

 require_once("xajax/xajax_core/xajax.inc.php");

     require_once("smarty/libs/SmartyBC.class.php");
 
  session_start();

  $tpl = new Smarty;

  require_once("dbCon.php");

  define("ROOT_DIR", "http://www2.allaboutapps.at/");
  
  //define("ROOT_DIR", "http://richter-stefan.info/aaa/");
  
  $xajax = new xajax(ROOT_DIR."index.server.php");
  $xajax->register(XAJAX_FUNCTION, "page");
  $xajax->register(XAJAX_FUNCTION, "delete");
  $xajax->register(XAJAX_FUNCTION, "edit_comment");
  $xajax->register(XAJAX_FUNCTION, "show_details");
  

     
  /******************************************/


  function show_details( $table, $mid ) {
  
     global $tpl;
  
     $objResponse = new xajaxResponse();  
       
     include('settings/config.php');     
     include('settings/template.php');   
     require_once('lib/select.php');
     
     $select = new SelectEntrys();

     $select->table      = $table;
     $select->cols       = 'id, firstname, lastname, job_position, category, email, phone, description_DE, description_EN, position';
     $select->condition  = " id = '$mid' ";                                                                    
     $select->multiSelect      = '1';
     $select->limit      = '1';

     
     $ay_select = $select->row();
            
   //  $ay_select[0]['description_DE'] = replaceBBcode($ay_select[0]['description_DE'], $set[0]["width_images"], 1);

$filename = "media/images/team/".$mid.".png";

if (file_exists($filename)) $ay_select[0]['img_exist'] = 1;
else $ay_select[0]['img_exist'] = 0;

         	     
     $tpl->assign('array_details', $ay_select);
     
     unset($select);
      /*
     $new_height = 45 * ($ay_select[0]['position'] - 1);
     if ($ay_select[0]['position'] < 5) $new_height = $new_height + 23;
     if ($ay_select[0]['position'] > 4) $new_height = $new_height + 23;
     if ($ay_select[0]['position'] > 10) $new_height = $new_height - 160;
        */
     $html = $tpl->fetch("team/details.tpl");           
     $p_name  = "team_profile";
     
     //$space = "<div style='height:".$new_height."px'>&nbsp;</div>";
     //$space2 = "<div style='height:200px'>&nbsp;</div>";
          
     $objResponse->assign($p_name,"innerHTML",$html);

     return $objResponse;  
               
  }
    
  function edit_comment( $aFormValues, $cid, $bid, $pageid, $TotalRows ) {
  
     $objResponse = new xajaxResponse();  
       
     include('settings/config.php');     
     include('settings/tables.php');
     include('settings/template.php');
     require_once('lib/modify.php');    
     require_once('lib/select.php');
     
     $name_str    = 'name_'.$cid;
     $comment_str = 'comment_'.$cid;

     $nam = utf8_decode($aFormValues[$name_str]);
     $com = utf8_decode($aFormValues[$comment_str]);
                         
     $comment = new ModifyEntry();    
     $comment->table     = $tbl_blog_comments;
     $comment->changes   = " name = '$nam', comment = '$com'";
     $comment->condition = " id = '$cid' ";

     $comment->update();

     unset($comment);

     $objResponse->loadcommands(page($tbl_blog_comments,$bid,$pageid,$TotalRows));
          
     return $objResponse;  
               
  }
    
  function delete( $table, $bid, $cid, $pageid, $TotalRows ) {
  
     $objResponse = new xajaxResponse();  
                            
     include('settings/config.php');     
     include('settings/tables.php');
     include('settings/template.php');
     require_once('lib/modify.php');          

     if ( $table == $tbl_blog_comments )  { 
     
          $comment = new ModifyEntry();
          $comment->table     = $tbl_blog_comments;
          $comment->changes   = " deleted = '1' ";
          $comment->condition = " id = '$cid' ";
 
          $comment->update();

          unset($comment);
 
     }
     
     $TotalRows = $TotalRows - 1;
     
     $max_pages = ceil($TotalRows / $set[0]["perpage_comments"]);
     
     if ($pageid > $max_pages) $pageid = $pageid - 1;
        
     $p_name = "p_num_".$bid;
    
     $objResponse->assign($p_name,"innerHTML",$TotalRows);

     if ($max_pages == 0) {
    
         $p_main = "p_comments_".$bid; 
         $p_out  = "p_page_".$bid; 
         $p_out2 = "p_page2_".$bid; 

         $objResponse->remove($p_main);
         $objResponse->remove($p_out);
         $objResponse->remove($p_out2);
                                   
     } 

    else $objResponse->loadcommands(page($table,$bid,$pageid,$TotalRows));

    return $objResponse;  
     
  }
  
  function page( $table, $bid, $pageid, $TotalRows ) {

     global $tpl; 

     $objResponse = new xajaxResponse();  
                            
     include('settings/config.php');     
     include('settings/tables.php');
     include('settings/template.php');
     require_once('lib/select.php');
     require_once('lib/pagenavi.php');
     
     if ( $table == $tbl_blog_comments )  {

          $max_pages = ceil($TotalRows / $set[0]["perpage_comments"]);
          
          if ( is_numeric($pageid) == false) {

               if ($pageid == 'first') $pageid = 1;
               if ($pageid == 'last')  $pageid = $max_pages;

          } 
          

          $begin_c = ( $pageid - 1 ) * $set[0]["perpage_comments"];

           /* Print :: SELECT :: Comments */
                        
               $comments              = new SelectEntrys();
               $comments->cols        = 'id, bid, time, name, comment, lang';
               $comments->table       = $tbl_blog_comments;
               $comments->condition   = "bid = '$bid' AND deleted = '0'";
               $comments->order       = "time DESC";
               $comments->limit       = "$begin_c, " . $set[0]['perpage_comments'];
               $comments->multiSelect = 1;
               //$comments->br          = 1;           
               $array_com[] = $comments->row(); 
      
               unset($comments);
      
           /******************************************/   
      
      
           /* Modify Comment Array */
            
              foreach ($array_com as $array_com2)  {
            
                 for ( $b = 0; $b < count($array_com2); $b++)  {    
                  
                       //replace url links                
                       $array_com2[$b]['comment'] = str_replace("www.","http://www.",$array_com2[$b]['comment']);
                       $array_com2[$b]['comment'] = str_replace("http://http://","http://",$array_com2[$b]['comment']);
                       //$array_com2[$b]['comment'] = preg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\" class='postedlink' target='_blank'>\\0</a>", $array_com2[$b]['comment']);    
              
                       //avoid layout damage
                       $array_com2[$b]['comment'] = wordwrap($array_com2[$b]['comment'], 60, " ", 1);
                                           
                       //decoding
                       $array_com2[$b]['comment'] = utf8_encode( $array_com2[$b]['comment']);

                       //line breaks
                       $array_com2[$b]['comment_unformatted'] = $array_com2[$b]['comment'];
                       $array_com2[$b]['comment'] = nl2br($array_com2[$b]['comment']);
                                                                              
                }
            
                $array_com3[] = $array_com2;
            
              } 
                         
           /******************************************/   

 
          /* Generate Pagenavi for comments */
            
             $naviObj = new pagenavi();
        
             $naviObj->tableE     = $tbl_blog_comments;      // required
             $naviObj->conditionE = "bid = '$bid' AND deleted = '0'";
         
             if (is_numeric($pageid) && $pageid <= $max_pages) { 

                   if ( $TotalRows > $set[0]["perpage_comments"] )  {
                                          
                        $naviObj->totalrows = $TotalRows;

                        $naviObj->showperpage = $set[0]["perpage_comments"];
        
                        $pages_c = $naviObj->rowpages($pageid);  // global parameter, defined in config.php
                                
                   } 
        
                   unset($naviObj);
                   
             }
                             
             if ($TotalRows == $set[0]['perpage_comments']) {

                  $p_in   = "p_cpages_".$bid; 
                  $p_in2  = "p_cpages2_".$bid;          
                  $p_out  = "p_page_".$bid; 
                  $p_out2 = "p_page2_".$bid; 
          
                  $objResponse->remove($p_in);
                  $objResponse->remove($p_in2);

                  $objResponse->assign($p_out,"innerHTML",'&nbsp;');
                  $objResponse->assign($p_out2,"innerHTML",'&nbsp;');
                                 
            }   
        
          /******************************************/


          /* Generate output */

           $tpl->assign('array_com', $array_com3); 
           $tpl->assign('xajax_bid', $bid); 
           $tpl->assign('pages_c', $pages_c);
           $tpl->assign('blog_id', $bid);
           $tpl->assign('com_total', $TotalRows);
           $tpl->assign('page_id', $pageid);
           $tpl->assign('Myadmin', $Myadmin);
           
           $html   = $tpl->fetch("pagenavi_ajax.tpl");                               
           $html2  = $tpl->fetch("blog/comments_show.tpl");

           $p_name  = "p_comments_".$bid;
           $p_name2 = "p_cpages_".$bid;
           $p_name3 = "p_cpages2_".$bid;
                          
           $html4  = $tpl->fetch("blog/comments.tpl");                            

           $objResponse->assign($p_name,"innerHTML",$html2);
           
           if ($TotalRows > $set[0]['perpage_comments']) $objResponse->assign($p_name2,"innerHTML",$html);
           if ($TotalRows > $set[0]['perpage_comments']) $objResponse->assign($p_name3,"innerTML",$html);
         
         
           //p_cpages_4
          // $objResponse->remove($p_name2);

          // $objResponse->assign($p_name2,"innerHTML","");
           $bullshit = 0;
        //   if ($TotalRows > $set[0]['perpage_comments'] and $bullshit == 0) { $objResponse->assign($p_name2,"innerHTML",$html5);  $bullshit =1; }
           //if ($TotalRows > $set[0]['perpage_comments']) $objResponse->assign($p_name3,"innerHTML",$html);

         //  $objResponse->assign($p_name,"innerHTML",$html2);
           
                      
          /******************************************/
                                
      }
 
      return $objResponse;
                       
  }


  $xajax->processRequest();

  unset($xajax);
  unset($objResponse);
