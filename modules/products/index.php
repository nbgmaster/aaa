<?php

   if ( $block["products"]["status"] == 1 )  {
   

       if ($pid != "") { 
                         
           /* Print :: SELECT */
           

         $products            = new SelectEntrys();
         $products->cols      = "ID, id_handler, category, name_DE, description_DE, name_EN, description_EN, OS, price, external";
         $products->table     = $tbl_products;
         $products->condition = " id_handler = '$pid' ";
         $products->multiSelect = '1';                 
         $ay_products = $products->row();
        
         require_once('./lib/replace.php');

         $ay_products[0]['description_DE'] = replaceBBcode($ay_products[0]['description_DE'], $set[0]["width_images"], 1);
         
         $ay_products[0]['description_EN'] = replaceBBcode($ay_products[0]['description_EN'], $set[0]["width_images"], 1);

         if ($ay_products[0]['ID'] > 0) {
         			
    			   $path = "media/images/products/screenshots/".$ay_products[0]['id_handler']."/";
    			  
             $tpl->assign("total_screens", countfiles($path));		
             
             $tpl->assign("array", $ay_products);
             $tpl->display("products/details.tpl");
         
         }
         
         else   $tpl->display("block_deactivated.tpl");
         
 
      /******************************************/


      /* Delete :: Object SELECT */

         unset($products);

      /******************************************/
 
       
       }
       
       else {
    
    //          if ($TotalRows > 0) {
              
                    /* Load :: blog Content */
    
              //         include('show.php');
          
                    /******************************************/
                    
          //      }
                
                // error page
       
             //   else {
             //     $tpl->display("linespacer.tpl");
             //     $tpl->display("block_deactivated.tpl");
            //    }
                
      }

  }

  else  {

             $tpl->display("block_deactivated.tpl");

  }
