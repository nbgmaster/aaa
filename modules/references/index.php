<?php

   if ( $block["references"]["status"] == 1 )  {

            if (!isset($_GET['cat'])) $_GET['cat'] = 'iPhone';         
                            
             $ref            = new SelectEntrys();
             $ref->cols      = "ID, company, url, smallsize";
             $ref->table     = $tbl_ref;
             $ref->condition = " category = '".$_GET['cat']."' AND visibility = '1' ";
                 
             $ref->multiSelect = '1';                 
             $ay_ref = $ref->row();

            if ($_GET['cat'] != 'iPhone' && $_GET['cat'] != 'iPad' && $_GET['cat'] != 'android' && $_GET['cat'] != 'services') $tpl->display("block_deactivated.tpl");  
            else {
             
                 $rest = count($ay_ref) % 4;
          
                 $tpl->assign("array", $ay_ref);                
                 $tpl->assign("total_n", count($ay_ref));  
                 $tpl->assign("rest", $rest);               
                 $tpl->assign("foo", 1);  
                        
                 $tpl->display("references/index.tpl");   
             
             }
     
  }

  else  {

             $tpl->display("block_deactivated.tpl");

  }
