<?php

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
