<?php

  /* Initialize :: Language Data */

        $deactivated_notice_00 = "Seiteninformation";
        $deactivated_notice_01 = "Diese Seite ist momentan nicht anzeigbar.";
        $deactivated_notice_02 = "Dies kann folgende Gr�nde haben:";
        $deactivated_notice_03 = "Die Seite befindet sich noch im Aufbau.";
        $deactivated_notice_04 = "Die Seite wird gerade �berarbeitet.";
        $deactivated_notice_05 = "Die Seite existiert nicht (mehr). (ung�ltiger Link)";


     /* Get Date & time values */

        $getmonth = array(1=>"Januar",
                          2=>"Februar",
                          3=>"M&auml;rz",
                          4=>"April",
                          5=>"Mai",
                          6=>"Juni",
                          7=>"Juli",
                          8=>"August",
                          9=>"September",
                          10=>"Oktober",
                          11=>"November",
                          12=>"Dezember");
                          
     /******************************************/
     
     
     /* New AAA Names */
     
        $tpl->assign('titlebar_blog', 'Blog');
        $tpl->assign('titlebar_admin', 'Administration');
        $tpl->assign('titlebar_products', 'Produkte');
        $tpl->assign('titlebar_services', 'Dienstleistungen');
        $tpl->assign('titlebar_teamlist', 'Liste');
        $tpl->assign('titlebar_home', '&nbsp;Startseite');
        $tpl->assign('titlebar_overview', '&Uuml;bersicht');

        $tpl->assign('team_contact', 'Kontaktdaten:');
        $tpl->assign('team_email', 'Email:');
        $tpl->assign('team_phone', 'Telefon:');
                                                                                         
     /******************************************/



     /* Navigation :: Linknames */

        $navi_names["admin"]     = "Administration";
        $navi_names["home"]      = "Home";
        $navi_names["about"]     = "�ber mich";
        $navi_names["imprint"]   = "Impressum";

        $navi_names2["newblog"]      = "Neuen Blogeintrag schreiben";
        $navi_names2["editblog"]     = "Blog";

        $navi_names2["about_edit"]     = "�ber mich bearbeiten";
        $navi_names2["imprint_edit"]   = "Impressum bearbeiten";
        $navi_names2["settings"]       = "Einstellungen bearbeiten";
        
        $navi_names3["editblog"]     = "Blogeintrag editieren";
           
     /******************************************/
     
     
       if ($module == "blog") $title_hp = "allaboutapps | Blog";
       else if ($module == "products") $title_hp = "allaboutapps | Produkte";
       else if ($module == "services") $title_hp = "allaboutapps | Services";
       else if ($module == "team") $title_hp = "allaboutapps | Team";
       else if ($module == "cms" && $cat=="imprint") $title_hp = "allaboutapps | Impressum";
       else if ($module == "press") $title_hp = "allaboutapps | Presse";       
       else if ($module == "references") $title_hp = "allaboutapps | Referenzen";   
       
              
     /* Language :: Names */

        $tpl->assign('lang_name_1', 'Deutsch');
        $tpl->assign('lang_name_2', 'Englisch');
        $tpl->assign('title_flag1', 'Hompageinhalte in deutscher Sprache darstellen');
        $tpl->assign('title_flag2', 'Hompageinhalte in englischer Sprache darstellen');
        $tpl->assign('lang_name_2', 'Englisch');
        
     /******************************************/


     /* Left Frame */

        $tpl->assign('left_settings', 'Einstellungen');
        $tpl->assign('left_design', 'Design');
        $tpl->assign('left_lang', 'Sprache');
        $tpl->assign('left_admin', 'Administration');
        $tpl->assign('left_user', 'Username');
        $tpl->assign('left_pw', 'Passwort');

        $tpl->assign('left_login', 'GO');
        $tpl->assign('left_logout', 'Ausloggen');

        $tpl->assign('logon_failed', "Login fehlgeschlagen!");
        $tpl->assign('logon_greeting', 'Hallo');
        $tpl->assign('twitter_title', 'Statusnachricht');
        $twitter_preposition = "vor";
        $tpl->assign('title_visiter', 'Besucher');
        
        $tpl->assign('v_today', 'Heute:');
        $tpl->assign('v_yesterday', 'Gestern:');
        $tpl->assign('v_total', 'Gesamt:');
        
        $tpl->assign("blog_comments_l", "Blog (Kommentare)"); 
        $tpl->assign("left_blog_comments_head", "Blog :: Neueste Kommentare"); 
        $tpl->assign("comments", "Kommentar(e)"); 
                 
     /******************************************/


     /* Blog */

        $tpl->assign('blog_new', $navi_names2["newblog"]);
        $tpl->assign('gal_new', $navi_names2["newgal"]);  
        $tpl->assign('blog_edit', 'Eintrag editieren');
        $tpl->assign('blog_del', 'Eintrag l&ouml;schen');
        $tpl->assign('confirm_delete', 'Diesen Eintrag wirklich l&ouml;schen?');

        $img_enlarge_title = "Zum Schliessen auf das Bild klicken";
        
     /******************************************/
     
     
     /* Page Navi */

        $tpl->assign('sides_total', 'von');     
        $tpl->assign('sides', 'Seiten');     
        $blog_navi = 'Blog :: Seitennavigation';
        $gal_navi  = 'Galerie :: Seitennavigation';


     /* Formular Main */

         $tpl->assign('preview_mainform', 'Vorschau');
         $tpl->assign('submit_mainform', 'Eintrag abschicken');
         $tpl->assign('f_title', 'Titel');
         $tpl->assign('f_extension_title', 'Englischer Titel');
         $tpl->assign('f_msg', 'Deutsche Fassung');       
         $tpl->assign('f_extension_msg', 'Englische Fassung');     
         $tpl->assign('input_folder', 'Bilderverzeichnis');   
         $tpl->assign('f_options_o1_gal', 'Galerie anzeigen:');          

     /******************************************/


     /* Formular Main */
     
        $tpl->assign('f_options_title', 'Optionen');     
        $tpl->assign('f_options_o1', 'News anzeigen:'); 
        $tpl->assign('f_options_o1_yes', 'Ja'); 
        $tpl->assign('f_options_o1_no', 'Nein'); 
        $tpl->assign('f_options_o2', 'Kommentare aktivieren:'); 
        $tpl->assign('f_options_o2_yes', 'Ja'); 
        $tpl->assign('f_options_o2_no', 'Nein'); 
        $tpl->assign('f_options_o3', 'Startdatum:'); 
        $tpl->assign('bid_invisible', 'Dieser Blogeintrag ist f�r Besucher derzeit nicht sichtbar');
         
     /******************************************/
     
    
     /* Formular Comments */

         $tpl->assign('commentsS_title', 'Kommentare anzeigen');
         $tpl->assign('commentsW_title', 'Kommentar schreiben');     
         $tpl->assign('submit_comform', 'Neuen Kommentar eintragen');
         $tpl->assign('submit_comform_edit', 'Kommentar &auml;ndern');
         $tpl->assign('f_name', 'Name');
         $tpl->assign('f_msg_c', 'Kommentar');
         $tpl->assign('com_name', 'hat geschrieben');         
         $tpl->assign('title_edit_com', 'Diesen Kommentar editieren');   
         $tpl->assign('title_del_com', 'Diesen Kommentar l&ouml;schen');

         $tpl->assign('spam_01', 'Sorry, Sie haben erst vor kurzem einen Kommentar zu diesem Blogeintrag geschrieben.');
         $tpl->assign('spam_02', 'Bitte versuchen Sie es zu einem sp&auml;teren Zeitpunkt noch einmal. ');

         $tpl->assign('f_code', 'Code');
         $tpl->assign('f_codeB', 'Neuen Code generieren');
         $tpl->assign('error_code', 'Sorry, der eingegebene Code war ung&uuml;ltig.');
                  
         $name_guest = 'Gast';
                                
     /******************************************/


     /* Toogle title */

        $toggle_expand = "Hier klicken um Anh&auml;nge einzublenden";
        $toggle_expandB = "Hier klicken um Adminoptionen einzublenden";
        $toggle_expandC = "Hier klicken um Kommentare einzublenden";
        $toggle_expandD = "Hier klicken um Formular einzublenden";

        $toggle_collapse = "Hier klicken um Anh&auml;nge auszublenden";
        $toggle_collapseB = "Hier klicken um Adminoptionen auszublenden";
        $toggle_collapseC = "Hier klicken um Kommentare auszublenden";
        $toggle_collapseD = "Hier klicken um Formular auszublenden";
        
        $tpl->assign('toggle_expand', $toggle_expand);
        $tpl->assign('toggle_expandB', $toggle_expandB);
        $tpl->assign('toggle_expandC', $toggle_expandC);
        $tpl->assign('toggle_expandD', $toggle_expandD);
        $tpl->assign('toggle_collapse', $toggle_collapse);
        $tpl->assign('toggle_collapseB', $toggle_collapseB);
        $tpl->assign('toggle_collapseC', $toggle_collapseC);
        $tpl->assign('toggle_collapseD', $toggle_collapseD);
        
        $tpl->assign('toggle_admin', "Adminoptionen");

     /******************************************/
     
     /* Title boxes :: BBCode */

        $mainform_info = "Markiere den gewuuml;nschten Text und w&auml;hle anschlie�end die gewuuml;nschte Formatierung aus.";

        $tpl->assign('mainform_info', $mainform_info);

        $tpl->assign('title_bold', 'fettgedruckter Text');
        $tpl->assign('title_italic', 'kursiver Text');
        $tpl->assign('title_underline', 'unterstrichener Text');
        $tpl->assign('title_center', 'zentrierter Text');
        $tpl->assign('title_block', 'Text in Blockschrift');
        $tpl->assign('title_url', 'Hyperlink einf�gen');
        $tpl->assign('title_image', 'Bild einf�gen');
        $tpl->assign('title_quote', 'Zitat einf�gen');
        $tpl->assign('title_list', 'Liste einf�gen');
        $tpl->assign('title_expand', 'Erweiterte BBCodes anzeigen');
        
        $tpl->assign('bbcode_size', 'Textgr&ouml;�e');
        $tpl->assign('bbcode_size_small', 'klein');
        $tpl->assign('bbcode_size_middle', 'mittel');
        $tpl->assign('bbcode_size_big', 'gro�');
        $tpl->assign('bbcode_size_huge', 'riesig');
        $tpl->assign('bbcode_color', 'Textfarbe');

     /******************************************/


     /* Title boxes :: Filecons */

        $tpl->assign('title_jpg', 'JPG-Bild');
        $tpl->assign('title_gif', 'GIF & PNG - Bild');
        $tpl->assign('title_doc', 'Word-Datei');
        $tpl->assign('title_xls', 'Excel-Datei');
        $tpl->assign('title_ppt', 'Powerpoint-Datei');
        $tpl->assign('title_zip', 'ZIP-Archiv');
        $tpl->assign('title_rar', 'RAR-Archiv');
        $tpl->assign('title_pdf', 'PDF-Datei');
        $tpl->assign('title_txt', 'Textdatei');

     /******************************************/


     /* Attachment */

        $tpl->assign('attach_file', 'Optional: Dateien anh&auml;ngen');
        $tpl->assign('attach_maxsize', 'max. Dateigr&ouml;�e:');
        $tpl->assign('attach_del', 'Optional: Angeh&auml;ngte Dateien entfernen (Checkbox aktivieren)');
        $tpl->assign('attach_format', 'Erlaubte Dateiformate');
        $tpl->assign('attach_data', 'Es befinden sich Dateien im Anhang');
        $tpl->assign('attach_name', 'Dateianhang');
        $tpl->assign('attach_del', 'l&ouml;schen');
        
     /******************************************/


     /* Administration :: Links */

        $tpl->assign('set_head_005', "Kategorien");
        $tpl->assign('links_col_01', "Link");
        $tpl->assign('links_col_02', "Beschreibung (DE)");
        $tpl->assign('links_col_03', "Beschreibung (EN)");
        
     /******************************************/
     

     /* Links Section */ 
 
        $tpl->assign("links_categories_title", "Links :: Kategorie"); 
        $tpl->assign("links_categories_option01", "Alle anzeigen");         
                    
     /******************************************      
      *
      *
      * NewStrings */
      
        $tpl->assign("home_more1", "Mehr eigene Produkte"); 
        $tpl->assign("home_more2", "Mehr Marketing Produkte");    
		
		                                                