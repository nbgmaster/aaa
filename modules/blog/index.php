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

                 $naviObj->conditionE = "id = '$bid' AND deleted = '0' ";
                 
                 $TotalRows = $naviObj->exist();

                       include('show.php');
          
      }

  }

  else  {

             $tpl->display("block_deactivated.tpl");

  }
