<?php

  /* Prevent Header Output Error */

     session_start();
     ob_start();
     header('Content-Type: text/html; charset=utf-8');

  /******************************************/


 $debug_mode = "OFF"; //OFF, ON_DEV, ON_PRINT

 if ($debug_mode == "ON_PRINT") error_reporting(E_ALL);
 else error_reporting(E_ERROR | E_WARNING | E_PARSE);
 

  /* Load :: XAJAX AND Smarty */

    // require_once("./smarty/Smarty.class.php");
     require_once("./smarty2/libs/SmartyBC.class.php");

     require_once("./xajax/xajax_core/xajax.inc.php");     

  /******************************************/


  /* Load :: Database connection */

     require_once("dbCon.php");

  /******************************************/


  /* Security:: Set register globals off */

     if ( @ini_get('register_globals') )

          foreach ( $_REQUEST as $key => $value )

                    unset($GLOBALS[$key]);

     if (!empty($_GET))     extract($_GET);

     if (!empty($_POST))    extract($_POST);

     if (!empty($_COOKIE))  extract($_COOKIE);

     if (!empty($_SESSION)) extract($_SESSION);

  /******************************************/
  
  
  /* Define :: Globals & Constants */  
  
     global $save_pages;
     global $xajax;
     global $getmonth;
     global $timestamp;      
     global $lang_active;    
     global $tpl;
     global $img_enlarge_title;
     global $module;
  
  /******************************************/


  /* Load :: Current time & date */

     $timestamp = time();
          
     $c_time = date("H:i",$timestamp);

     $c_date = date("d.m.Y",$timestamp);

     $Fday       = date("d.",$timestamp);
     $Fmonth     = date("m", $timestamp);
     $month_full = date("n", $timestamp);
     $Fyear      = date("Y",$timestamp);
     
     $Fday_y       = date("d.",$timestamp - 86400);
     $Fmonth_y     = date("m", $timestamp - 86400);
     $Fyear_y      = date("Y",$timestamp - 86400);

     define("C_YEAR", date("Y",$timestamp)); 
     define("C_YEAR_COPY", date("Y",$timestamp)); 
     
  /******************************************/

  /* Load :: Tablenames AND browser identification */

     include('tables.php');

     include('browser.php');

  /******************************************/


  /* Get block on/off status */

     require_once('./lib/select.php');

     $blocks = new SelectEntrys();

     $blocks->cols      = 'block, status, title_DE, title_EN';
     $blocks->table     = $tbl_blocks;
     $blocks->multiSelect = 1;
     $blocks->output_name = 1;

     $block = $blocks->row();

     unset($blocks);

  /******************************************/
  

  /* Get Setting Values */

     $settings = new SelectEntrys();

     $settings->cols      = 'root_dir, title_hp, title_hp_EN, main_title, main_title_EN, main_description, main_description_EN, keywords, contact_mail, perpage_blog, perpage_comments, perpage_gallery, perpage_thumbs, perpage_users, width_images, height_images_max, width_thumbs, height_thumbs_max, rss_german_url, rss_german_title, rss_english_url, rss_english_title, time_ban, twitter, twitter_EN, twitter_time, visiters_total, del_old_visiters, time_new_visiter, rss_intern_totalentries, rss_extern_totalentries, rss_intern_left_totalentries, rss_msg_length';
     $settings->table     = $tbl_settings;
     $settings->condition = " id = '1' ";
     $settings->multiSelect = 1;

     $set = $settings->row();
           
     unset($settings);

     $set[0]["keywords"] = html_entity_decode($set[0]["keywords"]);

     require_once('./lib/replace.php');

     define("ROOT_DIR", "http://www.allaboutapps.at/");
  
     //define("ROOT_DIR", $set[0]["root_dir"]);
     // don't forget to also change it in "index.common.php" !!!
                    
     $main_description = $set[0]["main_description"];
     $main_description = replaceBBcode($main_description, $set[0]["width_images"], 1);

     $main_description_EN = $set[0]["main_description_EN"];
     $main_description_EN = replaceBBcode($main_description_EN, $set[0]["width_images"], 1);
     
  /******************************************/


  /* Load :: Functions */

     require_once('lib/functions.php');
    // require_once('index.server.php');
     
  /******************************************/


  /* Load :: Twitter posting time */
  
     $time_dif = makeDifferenz($timestamp, $set[0]["twitter_time"]);

     if ($time_dif["day"][0] > 0) $twitter_time = $time_dif["day"][0].' '.$time_dif["day"][1];
     else if ($time_dif["std"][0] > 0) $twitter_time = $time_dif["std"][0].' '.$time_dif["std"][1];
     else if ($time_dif["min"][0] > 0) $twitter_time = $time_dif["min"][0].' '.$time_dif["min"][1];
     else if ($time_dif["sec"][0] >= 0) $twitter_time = $time_dif["sec"][0].' '.$time_dif["sec"][1];

  /******************************************/
  

  /* Load :: Template settings */

     include('settings/template.php');

  /******************************************/

        
  /* Initialize :: Current Page Number */

       if ( !$page )  {
  
            $page = (int) $page;
  
            if ( $page <= 0 ) $page = 1;
  
       }
  
       if ($module == '') $begin = ( $page - 1 ) * $set[0]["perpage_blog"];
       else if ($module == 'gallery') $begin = ( $page - 1 ) * $set[0]["perpage_gallery"];

  /******************************************/

  
  /* Administrator Login Status */

     if ( $_COOKIE["userdata"] )  {

          /* Call Method :: Explode the Cookie */

             $str = explode("|", $_COOKIE["userdata"]);

          /******************************************/

          /* Maybe user is locked? */

             $status = new SelectEntrys();

             $status->userid  = $str[1];

             $status->cols    = 'status';

             $Mystatus        = $status->getUserData();

             unset($status);

          /******************************************/

          if ( $Mystatus == 1 )  {

               /* Admin or Superadmin status? */

                  $admin = new SelectEntrys();

                  $admin->userid   = $str[1];

                  $admin->cols    = 'admin';

                  $Myadmin  = $admin->getUserData();

                  unset($admin);

               /******************************************/
                

               /* Compare Cookie data with database */

                  require_once('./lib/exist.php');

                  $logon = new CheckExist();

                  $logon->tableE     = $tbl_users;
                  $logon->conditionE = " UserID = '$str[1]' && UserPass = '$str[2]' ";

                  $logon_true = $logon->exist();

               /******************************************/

           }

     }

  /******************************************/
  
