<?php

           /* Print :: SELECT *

         $blog            = new SelectEntrys();
         $blog->cols      = "id, category, ";
         $blog->table     = $tbl_products;
         if ($Myadmin == 1) $blog->condition = " deleted = '0' ";
         else $blog->condition = " deleted = '0' AND visibility = '1' AND UNIX_TIMESTAMP(date) < $timestamp ";
         $blog->order     = 'date DESC';

         //$blog->limit     = "$begin, " . $set[0]['perpage_blog'];
         $blog->module    = 'news';
         $blog->template  = 'news/list.tpl';
         
         if ($_GET['bid']) $blog->toogle = $_GET['bid'];
         
         $blog->replace   = 'true';

         $blog->row();
 
      ******************************************/
      
      
         $products            = new SelectEntrys();
         $products->cols      = "id_handler, name_DE, name_EN";
         $products->table     = $tbl_products;
         $products->multiSelect = '1';                 
         $ay_products = $products->row();
        
         $services            = new SelectEntrys();
         $services->cols      = "id_handler, name";
         $services->table     = $tbl_services;
         $services->multiSelect = '1';                 
         $ay_services = $services->row();
         
         
         foreach ($ay_products as $new_arr) {
         
                  if ($lang_active == 'DE') $arr_products[$new_arr["id_handler"]] = $new_arr['name_DE'];
                  else if ($lang_active == 'EN') $arr_products[$new_arr["id_handler"]] = $new_arr['name_EN'];                  
         
         }
         
         foreach ($ay_services as $new_arr2) {
         
                $arr_services[$new_arr2['id_handler']] = $new_arr2['name'];
                     
         }

         $tpl->assign("arr_products", $arr_products);
         $tpl->assign("arr_services", $arr_services);

      /* Delete :: Object SELECT */

         unset($products);
              
         $tpl->display("mainframe.tpl");
         
      /******************************************/
