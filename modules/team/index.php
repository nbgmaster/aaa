<?php

/*
	bg[1] = "e6e8eb";
	bg[1] = "e5e7eb";
	bg[1] = "e4e6ea";
  bg[1] = "e2e4e8";
  bg[1] = "e1e2e8";
  bg[1] = "dee0e5";
 
 	bg[1] = "dcdee3";
	bg[1] = "dadce1";
  bg[1] = "d8dbe0";
  bg[1] = "d5d8dd";
  bg[1] = "d2d6db"; 
        	
 	bg[1] = "d0d3d9";
	bg[1] = "cdd0d7";
  bg[1] = "cbced5";
  bg[1] = "c9cdd3";
  bg[1] = "c7cad2"; 
    
 	bg[1] = "c5c9d0";
	bg[1] = "c4c7cf";
  bg[1] = "c2c6ce";
  bg[1] = "c1c5cd";
  bg[1] = "c7cad2"; 
  */
                 
   if ( $block["team"]["status"] == 1 )  {
   
         /* Print :: SELECT  */
         
         $teamlist = new SelectEntrys();

         $teamlist->table      = $tbl_team;
         $teamlist->cols       = 'id, firstname, lastname';
         $teamlist->condition  = " visibility = '1' AND category = 'management' ";   
         $teamlist->multiSelect = '1';     
         $ay_teamlist = $teamlist->row();

         $teamlist->order      = 'lastname';
         $teamlist->condition  = " visibility = '1' AND category = 'development' ";   
         $teamlist->multiSelect = '1';     
         $ay_teamlist2 = $teamlist->row();
         
         unset($teamlist);
         $teamlist = new SelectEntrys();

         $teamlist->table      = $tbl_team;
         $teamlist->cols       = 'id, firstname, lastname';        
         $teamlist->order      = 'position';
         $teamlist->condition  = " visibility = '1' AND category = 'marketing' ";   
         $teamlist->multiSelect = '1';     
         $ay_teamlist3 = $teamlist->row();
                            
         //require_once('./lib/replace.php');
         
                                    
         $_GET["cat"] = "about";
         require_once('./lib/tpl_dbaccess.php');
         $tpl->registerResource("db", array("db_template_cms","db_timestamp","db_secure","db_trusted"));
    
         //$blaaa = $tpl->fetch('db:index.tpl');
         
         $tpl->assign("array_list", $ay_teamlist);  
         $tpl->assign("array_list2", $ay_teamlist2);  
         $tpl->assign("array_list3", $ay_teamlist3);  
                                 
         $tpl->display("team/list.tpl");
         $tpl->display('db:index.tpl');
         $tpl->display("team/footer.tpl");          

  }

  else  {

             $tpl->display("block_deactivated.tpl");

  }
