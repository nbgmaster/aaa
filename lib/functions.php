<?php

function check_mobile() {
  $agents = array(
    'Windows CE', 'Pocket', 'Mobile',
    'Portable', 'Smartphone', 'SDA',
    'PDA', 'Handheld', 'Symbian',
    'WAP', 'Palm', 'Avantgo',
    'cHTML', 'HTC', 'BlackBerry', 'Opera Mini',
    'Nokia'
  );
  
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$accept     = $_SERVER['HTTP_ACCEPT'];

  // Prüfen der Browserkennung
  for ($i=0; $i<count($agents); $i++) {
    if(isset($_SERVER["HTTP_USER_AGENT"]) && strpos($_SERVER["HTTP_USER_AGENT"], $agents[$i]) !== false)
      return true;
  }
  
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if(stripos($ua,'android') !== false) return true;
      
      if (preg_match('/ipad/i',$user_agent) || preg_match('/ipod/i',$user_agent)|| preg_match('/iphone/i',$user_agent) || preg_match('/android/i',$user_agent)      
 	        || preg_match('/opera mini/i',$user_agent)
            || preg_match('/blackberry/i',$user_agent)
            || preg_match('/(pre\/|palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine)/i',$user_agent)
            || preg_match('/(iris|3g_t|windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile)/i',$user_agent)
            || preg_match('/(mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|wireless| mobi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|m881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|s800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|d736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |sonyericsson|samsung|240x|x320|vx10|nokia|sony cmd|motorola|up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|psp|treo)/i',$user_agent)    
	        || strpos($accept,'text/vnd.wap.wml')>0 
            || strpos($accept,'application/vnd.wap.xhtml+xml')>0                  
            || isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])
            || in_array(strtolower(substr($user_agent,0,4)),array('1207'=>'1207','3gso'=>'3gso','4thp'=>'4thp','501i'=>'501i','502i'=>'502i','503i'=>'503i','504i'=>'504i','505i'=>'505i','506i'=>'506i','6310'=>'6310','6590'=>'6590','770s'=>'770s','802s'=>'802s','a wa'=>'a wa','acer'=>'acer','acs-'=>'acs-','airn'=>'airn','alav'=>'alav','asus'=>'asus','attw'=>'attw','au-m'=>'au-m','aur '=>'aur ','aus '=>'aus ','abac'=>'abac','acoo'=>'acoo','aiko'=>'aiko','alco'=>'alco','alca'=>'alca','amoi'=>'amoi','anex'=>'anex','anny'=>'anny','anyw'=>'anyw','aptu'=>'aptu','arch'=>'arch','argo'=>'argo','bell'=>'bell','bird'=>'bird','bw-n'=>'bw-n','bw-u'=>'bw-u','beck'=>'beck','benq'=>'benq','bilb'=>'bilb','blac'=>'blac','c55/'=>'c55/','cdm-'=>'cdm-','chtm'=>'chtm','capi'=>'capi','cond'=>'cond','craw'=>'craw','dall'=>'dall','dbte'=>'dbte','dc-s'=>'dc-s','dica'=>'dica','ds-d'=>'ds-d','ds12'=>'ds12','dait'=>'dait','devi'=>'devi','dmob'=>'dmob','doco'=>'doco','dopo'=>'dopo','el49'=>'el49','erk0'=>'erk0','esl8'=>'esl8','ez40'=>'ez40','ez60'=>'ez60','ez70'=>'ez70','ezos'=>'ezos','ezze'=>'ezze','elai'=>'elai','emul'=>'emul','eric'=>'eric','ezwa'=>'ezwa','fake'=>'fake','fly-'=>'fly-','fly_'=>'fly_','g-mo'=>'g-mo','g1 u'=>'g1 u','g560'=>'g560','gf-5'=>'gf-5','grun'=>'grun','gene'=>'gene','go.w'=>'go.w','good'=>'good','grad'=>'grad','hcit'=>'hcit','hd-m'=>'hd-m','hd-p'=>'hd-p','hd-t'=>'hd-t','hei-'=>'hei-','hp i'=>'hp i','hpip'=>'hpip','hs-c'=>'hs-c','htc '=>'htc ','htc-'=>'htc-','htca'=>'htca','htcg'=>'htcg','htcp'=>'htcp','htcs'=>'htcs','htct'=>'htct','htc_'=>'htc_','haie'=>'haie','hita'=>'hita','huaw'=>'huaw','hutc'=>'hutc','i-20'=>'i-20','i-go'=>'i-go','i-ma'=>'i-ma','i230'=>'i230','iac'=>'iac','iac-'=>'iac-','iac/'=>'iac/','ig01'=>'ig01','im1k'=>'im1k','inno'=>'inno','iris'=>'iris','jata'=>'jata','java'=>'java','kddi'=>'kddi','kgt'=>'kgt','kgt/'=>'kgt/','kpt '=>'kpt ','kwc-'=>'kwc-','klon'=>'klon','lexi'=>'lexi','lg g'=>'lg g','lg-a'=>'lg-a','lg-b'=>'lg-b','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-f'=>'lg-f','lg-g'=>'lg-g','lg-k'=>'lg-k','lg-l'=>'lg-l','lg-m'=>'lg-m','lg-o'=>'lg-o','lg-p'=>'lg-p','lg-s'=>'lg-s','lg-t'=>'lg-t','lg-u'=>'lg-u','lg-w'=>'lg-w','lg/k'=>'lg/k','lg/l'=>'lg/l','lg/u'=>'lg/u','lg50'=>'lg50','lg54'=>'lg54','lge-'=>'lge-','lge/'=>'lge/','lynx'=>'lynx','leno'=>'leno','m1-w'=>'m1-w','m3ga'=>'m3ga','m50/'=>'m50/','maui'=>'maui','mc01'=>'mc01','mc21'=>'mc21','mcca'=>'mcca','medi'=>'medi','meri'=>'meri','mio8'=>'mio8','mioa'=>'mioa','mo01'=>'mo01','mo02'=>'mo02','mode'=>'mode','modo'=>'modo','mot '=>'mot ','mot-'=>'mot-','mt50'=>'mt50','mtp1'=>'mtp1','mtv '=>'mtv ','mate'=>'mate','maxo'=>'maxo','merc'=>'merc','mits'=>'mits','mobi'=>'mobi','motv'=>'motv','mozz'=>'mozz','n100'=>'n100','n101'=>'n101','n102'=>'n102','n202'=>'n202','n203'=>'n203','n300'=>'n300','n302'=>'n302','n500'=>'n500','n502'=>'n502','n505'=>'n505','n700'=>'n700','n701'=>'n701','n710'=>'n710','nec-'=>'nec-','nem-'=>'nem-','newg'=>'newg','neon'=>'neon','netf'=>'netf','noki'=>'noki','nzph'=>'nzph','o2 x'=>'o2 x','o2-x'=>'o2-x','opwv'=>'opwv','owg1'=>'owg1','opti'=>'opti','oran'=>'oran','p800'=>'p800','pand'=>'pand','pg-1'=>'pg-1','pg-2'=>'pg-2','pg-3'=>'pg-3','pg-6'=>'pg-6','pg-8'=>'pg-8','pg-c'=>'pg-c','pg13'=>'pg13','phil'=>'phil','pn-2'=>'pn-2','pt-g'=>'pt-g','palm'=>'palm','pana'=>'pana','pire'=>'pire','pock'=>'pock','pose'=>'pose','psio'=>'psio','qa-a'=>'qa-a','qc-2'=>'qc-2','qc-3'=>'qc-3','qc-5'=>'qc-5','qc-7'=>'qc-7','qc07'=>'qc07','qc12'=>'qc12','qc21'=>'qc21','qc32'=>'qc32','qc60'=>'qc60','qci-'=>'qci-','qwap'=>'qwap','qtek'=>'qtek','r380'=>'r380','r600'=>'r600','raks'=>'raks','rim9'=>'rim9','rove'=>'rove','s55/'=>'s55/','sage'=>'sage','sams'=>'sams','sc01'=>'sc01','sch-'=>'sch-','scp-'=>'scp-','sdk/'=>'sdk/','se47'=>'se47','sec-'=>'sec-','sec0'=>'sec0','sec1'=>'sec1','semc'=>'semc','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','sk-0'=>'sk-0','sl45'=>'sl45','slid'=>'slid','smb3'=>'smb3','smt5'=>'smt5','sp01'=>'sp01','sph-'=>'sph-','spv '=>'spv ','spv-'=>'spv-','sy01'=>'sy01','samm'=>'samm','sany'=>'sany','sava'=>'sava','scoo'=>'scoo','send'=>'send','siem'=>'siem','smar'=>'smar','smit'=>'smit','soft'=>'soft','sony'=>'sony','t-mo'=>'t-mo','t218'=>'t218','t250'=>'t250','t600'=>'t600','t610'=>'t610','t618'=>'t618','tcl-'=>'tcl-','tdg-'=>'tdg-','telm'=>'telm','tim-'=>'tim-','ts70'=>'ts70','tsm-'=>'tsm-','tsm3'=>'tsm3','tsm5'=>'tsm5','tx-9'=>'tx-9','tagt'=>'tagt','talk'=>'talk','teli'=>'teli','topl'=>'topl','hiba'=>'hiba','up.b'=>'up.b','upg1'=>'upg1','utst'=>'utst','v400'=>'v400','v750'=>'v750','veri'=>'veri','vk-v'=>'vk-v','vk40'=>'vk40','vk50'=>'vk50','vk52'=>'vk52','vk53'=>'vk53','vm40'=>'vm40','vx98'=>'vx98','virg'=>'virg','vite'=>'vite','voda'=>'voda','vulc'=>'vulc','w3c '=>'w3c ','w3c-'=>'w3c-','wapj'=>'wapj','wapp'=>'wapp','wapu'=>'wapu','wapm'=>'wapm','wig '=>'wig ','wapi'=>'wapi','wapr'=>'wapr','wapv'=>'wapv','wapy'=>'wapy','wapa'=>'wapa','waps'=>'waps','wapt'=>'wapt','winc'=>'winc','winw'=>'winw','wonu'=>'wonu','x700'=>'x700','xda2'=>'xda2','xdag'=>'xdag','yas-'=>'yas-','your'=>'your','zte-'=>'zte-','zeto'=>'zeto','acs-'=>'acs-','alav'=>'alav','alca'=>'alca','amoi'=>'amoi','aste'=>'aste','audi'=>'audi','avan'=>'avan','benq'=>'benq','bird'=>'bird','blac'=>'blac','blaz'=>'blaz','brew'=>'brew','brvw'=>'brvw','bumb'=>'bumb','ccwa'=>'ccwa','cell'=>'cell','cldc'=>'cldc','cmd-'=>'cmd-','dang'=>'dang','doco'=>'doco','eml2'=>'eml2','eric'=>'eric','fetc'=>'fetc','hipt'=>'hipt','http'=>'http','ibro'=>'ibro','idea'=>'idea','ikom'=>'ikom','inno'=>'inno','ipaq'=>'ipaq','jbro'=>'jbro','jemu'=>'jemu','java'=>'java','jigs'=>'jigs','kddi'=>'kddi','keji'=>'keji','kyoc'=>'kyoc','kyok'=>'kyok','leno'=>'leno','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-g'=>'lg-g','lge-'=>'lge-','libw'=>'libw','m-cr'=>'m-cr','maui'=>'maui','maxo'=>'maxo','midp'=>'midp','mits'=>'mits','mmef'=>'mmef','mobi'=>'mobi','mot-'=>'mot-','moto'=>'moto','mwbp'=>'mwbp','mywa'=>'mywa','nec-'=>'nec-','newt'=>'newt','nok6'=>'nok6','noki'=>'noki','o2im'=>'o2im','opwv'=>'opwv','palm'=>'palm','pana'=>'pana','pant'=>'pant','pdxg'=>'pdxg','phil'=>'phil','play'=>'play','pluc'=>'pluc','port'=>'port','prox'=>'prox','qtek'=>'qtek','qwap'=>'qwap','rozo'=>'rozo','sage'=>'sage','sama'=>'sama','sams'=>'sams','sany'=>'sany','sch-'=>'sch-','sec-'=>'sec-','send'=>'send','seri'=>'seri','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','siem'=>'siem','smal'=>'smal','smar'=>'smar','sony'=>'sony','sph-'=>'sph-','symb'=>'symb','t-mo'=>'t-mo','teli'=>'teli','tim-'=>'tim-','tosh'=>'tosh','treo'=>'treo','tsm-'=>'tsm-','upg1'=>'upg1','upsi'=>'upsi','vk-v'=>'vk-v','voda'=>'voda','vx52'=>'vx52','vx53'=>'vx53','vx60'=>'vx60','vx61'=>'vx61','vx70'=>'vx70','vx80'=>'vx80','vx81'=>'vx81','vx83'=>'vx83','vx85'=>'vx85','wap-'=>'wap-','wapa'=>'wapa','wapi'=>'wapi','wapp'=>'wapp','wapr'=>'wapr','webc'=>'webc','whit'=>'whit','winw'=>'winw','wmlb'=>'wmlb','xda-'=>'xda-',)))
         
      return true;
	
  return false;
}



  //Get number of files in directory
  function countfiles($path) { 
    $handle = opendir($path); 
    $filecount = 0; 
    while ($res  = readdir($handle)) { 
      if (is_dir($res)) { 
      } else { 
        $filecount++; 
      } 
    } 
    return $filecount; 
  }  


  /* Transform: String --> File */
  
      function createFromString($str, $overwrite = true, $fname_path = null) {

                $fname_path = $fname_path; 
       
                $handle = fopen($fname_path, 'w+');

                if(!fwrite($handle, $str)) return false;
                fclose($handle);

                return true;
                
      }      

  /******************************************/
  
  
  /* Generate RSS Feed for blog */

     function generate_rss_feed($totalentries, $rss_data, $rss_module, $lang, $rss_intern_totalentries) {
     
         global $tpl;
         
             $getday = array(0=>"Sonntag",1=>"Montag",2=>"Dienstag",3=>"Mittwoch",4=>"Donnerstag",5=>"Freitag",6=>"Samstag",7=>"Sonntag");                          
             $getmonth = array(1=>"Januar",2=>"Februar",3=>"M&auml;rz",4=>"April",5=>"Mai",6=>"Juni",7=>"Juli",8=>"August",9=>"September",10=>"Oktober",11=>"November",12=>"Dezember");
         
             $c_day = date("w",time());
             $c_month = date("n",time());
             
             $day = $getday[$c_day];
             $month = $getmonth[$c_month];
                                       
             $day_num = date("d",time());
             $c_time = date("Y H:i:s +0200",time());

             if ($lang == 'DE') $feed_date = $day.', '.$day_num.'. '.$month.' '.$c_time; 
             if ($lang == 'EN') $feed_date = date("D, j F Y H:i:s +0200", time());

             $tpl->assign('feed_date', $feed_date);
             $tpl->assign('data', $rss_data);
             
             $tpl->assign('feed_blog_description_DE', utf8_encode("Die ".$rss_intern_totalentries." neuesten Blognachrichten"));
             $tpl->assign('feed_blog_description_DE_h', utf8_encode("Die ".$rss_intern_totalentries." neuesten Blognachrichten"));
             $tpl->assign('feed_blog_description_EN', utf8_encode("The ".$rss_intern_totalentries." newest blog messages"));
             $tpl->assign('feed_gallery_description_DE', utf8_encode("Die ".$rss_intern_totalentries." neuesten Galerien"));
             $tpl->assign('feed_gallery_description_EN', utf8_encode("The ".$rss_intern_totalentries." newest galleries"));
 
             $file_name = $rss_module.'_'.$lang;

             $content = $tpl->fetch("../tpl/rssfeeds/$file_name.tpl");

             createFromString($content, true, "media/rss/$file_name.xml");

             return true;

     }

  /******************************************/
  

  /* Get Page for breadcrumb :: Blog or Gallery edit modus */
  
  function get_page($tbl, $id, $perpage) {

      require_once('lib/select.php');
      require_once('lib/exist.php');

      $GetPage = new SelectEntrys();
      $GetPage->cols        = 'date';
      $GetPage->table       = $tbl;
      $GetPage->condition   = " id = '$id' ";
      
      $Tdate = $GetPage->row();

      unset($GetPage);
      
      $GetPage = new CheckExist();
      $GetPage->tableE      = $tbl;
      if ($tbl == 'blog')    $GetPage->conditionE  = "date > '$Tdate' AND deleted = '0' ";
      if ($tbl == 'gallery') $GetPage->conditionE  = "date > '$Tdate' ";
        
      $newer_entries = $GetPage->exist();
  
      unset($GetPage); 
         
      $page_B = $newer_entries / $perpage;
  
      $page_B = floor($page_B);
      
      $page_B++;
      
      return $page_B; 
          
  }

  /******************************************/
  
  
  /* Format twitter posting time */
  
  function makeDifferenz($first, $second){
      
      if($first > $second)
          $td['dif'][0] = $first - $second;
      else
          $td['dif'][0] = $second - $first;
      
      $td['sec'][0] = $td['dif'][0] % 60; // 67 = 7
  
      $td['min'][0] = (($td['dif'][0] - $td['sec'][0]) / 60) % 60; 
      
      $td['std'][0] = (((($td['dif'][0] - $td['sec'][0]) /60)- 
      $td['min'][0]) / 60) % 24;
      
      $td['day'][0] = floor( ((((($td['dif'][0] - $td['sec'][0]) /60)- 
      $td['min'][0]) / 60) / 24) );
      
      $td = makeString($td);
      
      return $td;
      
  }
  
  function makeString($td){
  
      if ( !isset($_COOKIE["lang"]) )  {
      
           switch ( substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ) {
                    case 'de': $lang_browser = "DE"; break;
                    case 'en': $lang_browser = "EN"; break; 
                    default:   $lang_browser = "DE";
           }
           
      }
      
      if ( isset($_COOKIE["lang"]) == '2' || $lang_browser == 'DE' )  {
      
            $seconds01 = "Sekunde"; $seconds02 = "Sekunden";
            $minutes01 = "Minute";  $minutes02 = "Minuten";
            $hours01   = "Stunde";  $hours02   = "Stunden";
            $days01    = "Tag";     $days02    = "Tagen";
        
      }
              
      else if ( isset($_COOKIE["lang"]) == '3' || $lang_browser == 'EN' )  {
      
            $seconds01 = "second";  $seconds02 = "seconds";
            $minutes01 = "minute";  $minutes02 = "minutes";
            $hours01   = "hour";    $hours02   = "hours";
            $days01    = "day";     $days02    = "days";
               
      }

      if ($td['sec'][0] == 1)
          $td['sec'][1] = $seconds01;
      else 
          $td['sec'][1] = $seconds02;
      
      if ($td['min'][0] == 1)
          $td['min'][1] = $minutes01;
      else 
          $td['min'][1] = $minutes02;
          
      if ($td['std'][0] == 1)
          $td['std'][1] = $hours01;
      else 
          $td['std'][1] = $hours02;
          
      if ($td['day'][0] == 1)
          $td['day'][1] = $days01;
      else 
          $td['day'][1] = $days02;
      
      return $td;
      
  }

  /******************************************/
  
  
  /* Get gallery title */
  
  function get_gallery_title($tbl_gallery, $gid) {

     require_once('lib/select.php');
                    
     $gal_title = new SelectEntrys();

     $gal_title->cols        = ' title, title_EN ';
     $gal_title->table       = $tbl_gallery;
     $gal_title->condition   = " id = '$gid' ";
     $gal_title->multiSelect = 1;

     $gal_titles = $gal_title->row();

     unset($gal_title);
     
     return $gal_titles;
     
  }

  /******************************************/
  
  
  /* Update visiter stats */

  function update_visiter_stats($tbl_visiter, $tbl_settings, $timestamp, $del_old_visiters, $time_new_visiter) { 
  
      require_once('lib/select.php');
      require_once('lib/modify.php');
      require_once('lib/exist.php');
              
      $delimiter = $timestamp - ($del_old_visiters*60);  // delete entries older than 2 weeks 60*60*24*14
                   
      $visiter            = new ModifyEntry();
      $visiter->table     = $tbl_visiter;
      $visiter->condition = " UNIX_TIMESTAMP(date) < $delimiter ";

      $visiter->delete();
      
      unset($visiter);

      $delimiter = $timestamp - ($time_new_visiter*60);
                    
      $visiter = new CheckExist();
      $visiter->tableE     = $tbl_visiter;                       
      $visiter->conditionE = " IP = '".$_SERVER['REMOTE_ADDR']."' AND UNIX_TIMESTAMP(date) >= $delimiter ";

      $visiter_exist = $visiter->exist();

      unset($visiter);
  
      if ($visiter_exist == 0)  {
           
          $country = file_get_contents('http://api.hostip.info/country.php?ip='.$_SERVER['REMOTE_ADDR']);
 
          $date = date("Y-m-d H:i:s",$timestamp);

          $visiter         = new ModifyEntry();       
          $visiter->table  = $tbl_visiter;
          $visiter->cols   = 'IP, date, browser, country, referer';
          $visiter->values = " '".$_SERVER['REMOTE_ADDR']."', '$date', '".$_SERVER['HTTP_USER_AGENT']."', '$country',  '".$_SERVER['HTTP_REFERER']."' ";
 
          $visiter->insert();
          
          $visiter->table     = $tbl_settings;
          $visiter->changes   = " visiters_total = visiters_total+1 ";
          $visiter->condition = " id = '1' ";

          $visiter->update(); 

          unset($visiter);

      }
          
      return false; 
  
  }

  /* Convert date to make multi-language feature possible */
    
  function convert_date($date, $lang) { 
 
         global $getmonth;
         /*
         if ($lang == 'DE') $getmonth = array(1=>"Januar",2=>"Februar",3=>"M&auml;rz",4=>"April",5=>"Mai",6=>"Juni",7=>"Juli",8=>"August",9=>"September",10=>"Oktober",11=>"November",12=>"Dezember");                         
         if ($lang == 'EN') $getmonth = array(1=>"January",2=>"February",3=>"March",4=>"April",5=>"May",6=>"June",7=>"July",8=>"August",9=>"September",10=>"October",11=>"November",12=>"December");
         */
         
         $getmonth = array(1=>"01",2=>"02",3=>"03",4=>"04",5=>"05",6=>"06",7=>"07",8=>"08",9=>"09",10=>"10",11=>"11",12=>"12");  
 
         $day = substr($date, 0,2);  
         $month_number = substr($date, 4,2);
         if ($month_number < 10) $month_number = substr($month_number,1,1);
         $year = substr($date, 7,4);

         $month_name = $getmonth[$month_number];

         $date = $day.'.'.$month_name.'.'.$year;
         
         //GMT fix 
         //$gmt_time = date("P",time());
         //$gmt_time = substr($gmt_time,2,1);
         //$date .= ' (GMT+'.$gmt_time.')';
         
         return $date; 
  
  }
  
  function convert_date_comments($date) {   

           global $getmonth;   
           global $lang_active;            

           $year = substr($date,0,4);
           $month = substr($date,5,2);
           $day = substr($date,8,2);
           $hours = substr($date,11,2);
           $minutes = substr($date,14,2);
           if ($month < 10) $month = substr($month,1,1);
           $month_name = $getmonth[$month];

           if ($lang_active == 'EN') {
           
               if      ($hours == '00') { $hours = 12; $p_time = 'AM'; }
               else if ($hours == '12')   $p_time = 'PM';
               else if ($hours > 12)    { $hours = $hours - 12;  $p_time = 'PM'; }

            }

            $date = $day.'.'.$month_name.'.'.$year.' '.$hours.':'.$minutes;
            
            if ($lang_active == 'EN') $date .= ' '.$p_time;  
                
            //GMT fix 
            //$gmt_time = date("P",time());
            //$gmt_time = substr($gmt_time,2,1);
            //$date .= ' (GMT+'.$gmt_time.')';
         
            return $date;

  }
  
  /*************************************************/