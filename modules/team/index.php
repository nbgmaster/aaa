<?php
           
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
