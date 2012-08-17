<?php

   if ( $block["press"]["status"] == 1 )  {
   
         $press            = new SelectEntrys();

                  $press->cols      = "ID, link, source, title, subtitle, text, date";
                  
         $press->table     = $tbl_press;
         $press->order     = "date DESC";
         $press->multiSelect = '1';                 
         $ay_press = $press->row();
         
         $counter = 0;
         foreach ($ay_press as $format_date) {
              $ay_press[$counter]["date_formatted"]  = substr($format_date["date"],
              9,2) . "." . substr($format_date["date"],
              6,2) . "." . substr($format_date["date"], 0,4);
             $ay_press[$counter]["date_formatted"] = str_replace("-", "", $ay_press[$counter]["date_formatted"]); 
         $counter++;
         }
          
         $tpl->assign("array", $ay_press);        
         $tpl->display("press/index.tpl");
         
  }

  else  {

             $tpl->display("block_deactivated.tpl");

  }
