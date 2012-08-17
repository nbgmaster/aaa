<?php
  
   if ( $block["home"]["status"] == 1 )  {
  
                           
       if ($bid == "" or $bid == "overview") { 
                  
           /* Print :: SELECT */

         $blog            = new SelectEntrys();
         $blog->cols      = "id, title_DE, title_EN, DATE_FORMAT(date,'%d. %m %Y') as date_formatted, preview_DE, preview_EN";
         $blog->table     = $tbl_blog;
         if ($Myadmin == 1) $blog->condition = "";
         else $blog->condition = " deleted = '0' AND visibility = '1' AND UNIX_TIMESTAMP(date) < $timestamp ";
         $blog->order     = 'date DESC';

         //$blog->limit     = "$begin, " . $set[0]['perpage_blog'];
         $blog->module    = 'blog';
         $blog->template  = 'blog/list.tpl';
         
           
         if ($_GET['bid']) $blog->toogle = $_GET['bid'];
         
         $blog->replace   = 'true';

         $blog->row();
 
      /******************************************/


      /* Delete :: Object SELECT */

         unset($blog);

      /******************************************/
 
       
       }
       
       else {
    
              /* Load :: Page Navigation */
    
                 require_once('./lib/pagenavi.php');
    
                 $naviObj = new pagenavi();
    
                 $naviObj->tableE     = $tbl_blog;      // required
                 //if ($Myadmin == 1) $naviObj->conditionE = " deleted = '0' ";
                 //else $naviObj->conditionE = " deleted = '0' AND visibility = '1' AND UNIX_TIMESTAMP(date) < $timestamp ";
                 
                 $naviObj->conditionE = "id = '$bid' AND deleted = '0' ";
                 
                 $TotalRows = $naviObj->exist();
                 /*
                 $max_pages = ceil($TotalRows / $set[0]["perpage_blog"]);
    
                 if (is_numeric($page) && $page <= $max_pages) {
    
                       if ( $TotalRows > $set[0]["perpage_blog"] )  {
          
                            $naviObj->totalrows = $TotalRows;
          
                            $titleG = $TotalRows." ".$blog_numbers;
          
                            $naviObj->title = $titleG;
          
                            $naviObj->showperpage = $set[0]["perpage_blog"];
          
                            $naviObj->link = ROOT_DIR.'blog/';    // required
            
                            $save_pages = $naviObj->rowpages($page);  // global parameter, defined in config.php
          
                       } 
          
                       unset($naviObj);
          
                    /******************************************/
          
             // if ($TotalRows > 0) {
              
                    /* Load :: blog Content */
    
                       include('show.php');
          
                    /******************************************/
                    
              //  }
                
                // error page
       
               // else {
               //   $tpl->display("linespacer.tpl");
               //   $tpl->display("block_deactivated.tpl");
              //  }
                
      }

  }

  else  {

             $tpl->display("block_deactivated.tpl");

  }
