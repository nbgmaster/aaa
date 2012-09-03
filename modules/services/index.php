<?php
       
   if ( $block["services"]["status"] == 1 )  {
   
         $services            = new SelectEntrys();
         $services->cols      = "id_handler, title_DE, title_EN";
         $services->table     = $tbl_services;
         $services->multiSelect = '1';                 
         $ay_services = $services->row();
         
 
         foreach ($ay_services as $shrink) {
         
                if($lang_active == 'DE') $new_arr[$shrink['id_handler']] = $shrink['title_DE'];
                else if($lang_active == 'EN') $new_arr[$shrink['id_handler']] = $shrink['title_EN'];
                         
         }
         
         unset($ay_services);

         $tpl->assign("array_short", $new_arr);         
         
         if ($sid != "") { 
                           
               /* Print :: SELECT */
                 
               $services            = new SelectEntrys();
               $services->cols      = "ID, id_handler, name, short_DE, description_DE, short_EN, description_EN";
               $services->table     = $tbl_services;
               $services->condition = " id_handler = '$sid' ";
               $services->multiSelect = '1';                 
               $ay_services = $services->row();
              
               require_once('./lib/replace.php');
               
               if ($ay_services[0]['ID'] > 0) {
               	
			//	echo $ay_services[0]['short_DE'];
                              
                     if($lang_active == 'DE') $ay_services[0]['description_DE'] = replaceBBcode($ay_services[0]['description_DE'], $set[0]["width_images"], 1);
                     else if($lang_active == 'EN') $ay_services[0]['description_EN'] = replaceBBcode($ay_services[0]['description_EN'], $set[0]["width_images"], 1);
                     						               						
                     $tpl->assign("array", $ay_services);
            
                     $tpl->display("services/details.tpl");
                
              }
              else  $tpl->display("block_deactivated.tpl");
           
        }
        
        else  {
  
              $tpl->display("services/overview.tpl");
          
        } 
         

  }

  else  {

             $tpl->display("block_deactivated.tpl");

  }
