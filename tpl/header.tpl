<!DOCTYPE html>
<html
<head>

<title>{$title_hp}</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="allaboutapps" />
        <meta name="copyright" content="(C) 2012 allaboutapps" />
        <meta name="publisher" content="Stefan Richter" />
        <meta name="language" content="{if $lang == 'german'}DE{else}EN{/if}" />
        <meta name="robots" content="follow,index" />
        <meta name="revisit-after" content="15 days" />
        <meta name="title" content="{$title_hp}" />
        <meta name="description" content="{$main_title}" />
        <meta name="keywords" content="{$keywords}" />
        <meta name="apple-mobile-web-app-capable" content="yes" />    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="imagetoolbar" content="no">
       
        <noscript><meta http-equiv="refresh" content="0;URL=html/noscript.htm"></noscript>

      	<link rel="shortcut icon" href="{$dir_img}favicon.ico" type="image/x-icon">
    	 
        <link rel="apple-touch-icon" href="{$root_dir}media/images/logo_57x57.png" />
        <!-- startup image for web apps - iPad - landscape (748x1024) 
             Note: iPad landscape startup image has to be exactly 748x1024 pixels (portrait, with contents rotated).-->
        <link rel="apple-touch-startup-image" href="{$root_dir}media/images/logo_748x1024.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
        <!-- startup image for web apps - iPad - portrait (768x1004) -->
        <link rel="apple-touch-startup-image" href="{$root_dir}media/images/logo_768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
        <!-- startup image for web apps (320x460) -->
        <!--link rel="apple-touch-startup-image" href="img/iphone.png" media="screen and (max-device-width: 320px)" /-->
                        
        <link rel="stylesheet" href="{$root_dir}media/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="{$root_dir}media/css/scrollbar.css" type="text/css" />    
        <link rel="stylesheet" href="{$root_dir}media/css/default.css" type="text/css" />   
        <link rel="stylesheet" href="{$root_dir}media/css/slider.css" type="text/css" />  
        
        {if $style_0 == "handheld"}
        <link rel="stylesheet" href="{$root_dir}media/css/mobile_portrait.css" type="text/css" media="screen and (max-width: 800px)" />
        <link rel="stylesheet" href="{$root_dir}media/css/mobile_landscape.css" type="text/css" media="screen and (max-width: 800px) and (orientation:landscape)" />
        {/if}
        
        <!--link rel="stylesheet" href="{$root_dir}media/css/galaxy.css" type="text/css" /-->   
        <link rel="stylesheet" href="{$root_dir}media/css/tablet.css" type="text/css" />  
                     
        <script type="text/javascript" src="{$root_dir}js/jquery.js"></script>
        <script type="text/javascript" src="{$root_dir}js/slider.js"></script>     
        <script type="text/javascript" src="{$root_dir}js/{$lang_java}.js"></script>        
        {*if $module != ''}<script type="text/javascript" src="{$root_dir}js/appmousefunctions.js"></script>{/if*}
        
        {*if $browser == 'IE'}{include file="css/IE_fix.tpl"}{/if*}
               

        {if $module == 'team'}        
        <script src="{$root_dir}js/dw_scroll_c.js" type="text/javascript"></script>
        
        <script type="text/javascript">
        
            function init_dw_Scroll() {ldelim}
            
                // arguments: id of scroll area div, id of content div     
                // args: id, axis ('v' or 'h'), eType (event type for arrows), 
                // bScrollbar (include track and dragBar? true or false)
  
                var wndo1 = new dw_scrollObj('wn1', 'lyr1');
                wndo1.buildScrollControls('scrollbar1', 'v', 'mouseover', true);
                          
                var wndo2 = new dw_scrollObj('wn2', 'lyr2');              
                wndo2.buildScrollControls('scrollbar2', 'v', 'mouseover', true);

            {rdelim} 

    
          </script>
          
        {else if $module != ""}
        <script src="{$root_dir}js/dw_scroll_c.js" type="text/javascript"></script>
        
         <script type="text/javascript">
        
            function init_dw_Scroll() {ldelim}
            
                // arguments: id of scroll area div, id of content div     
                // args: id, axis ('v' or 'h'), eType (event type for arrows), 
                // bScrollbar (include track and dragBar? true or false)
  
                var wndo1 = new dw_scrollObj('wn1', 'lyr1');
                wndo1.buildScrollControls('scrollbar1', 'v', 'mouseover', true);

            {rdelim} 
            
          </script>
        
        {/if}               

        {if $module != ""}         
        <script type="text/javascript" src="{$root_dir}js/scroll_ex.js"></script>
        {/if}
        
        <script type="application/x-javascript">
  
            if (navigator.userAgent.indexOf('iPhone') != -1 || navigator.userAgent.match(/Android/i)) {ldelim}
            addEventListener("load", function() {ldelim}
            setTimeout(hideURLbar, 0);
            {rdelim}, false);
            {rdelim}
            
            function hideURLbar() {ldelim}
            window.scrollTo(0, 1);
            {rdelim}  
            
        </script>

        <script>
         function BlockMove(event) {ldelim}
          // Tell Safari not to move the window.
          event.preventDefault() ;
         {rdelim}
        </script>
        
        <script type="text/javascript" src="{$dir_js}change_settings.js"></script> 
    
        {if $module == ""}
        
        <style type="text/css">
        
           div#container {ldelim} height:469px; width:100%; {rdelim} 
            
            div#wn1 {ldelim} height:469px;width:100%; {rdelim} 
            
            div#scrollbar1 {ldelim} height:449px; {rdelim} 
            
            div#scrollbar1 .track {ldelim} height:458px; {rdelim} 


            div#container2 {ldelim} height:424px; width:198px; {rdelim} 
            
            div#wn2 {ldelim} height:424px;width:198px; {rdelim} 
            
            div#scrollbar2 {ldelim} height:390px; {rdelim} 
            
            div#scrollbar2 .track {ldelim} height:390px; {rdelim} 
                      
                      
            @media (max-width: 800px) and (orientation:landscape)  {ldelim}
            
                      div#container {ldelim} height:320px; width:356px; {rdelim} 
            
                      div#wn1 {ldelim} height:320px;width:356px; {rdelim} 
                      
                      div#scrollbar1 {ldelim} height:320px; {rdelim} 
                      
                      div#scrollbar1 .track {ldelim} height:320px; {rdelim} 


                      div#container2 {ldelim} height:100%; width:92px; {rdelim} 
            
                      div#wn2 {ldelim} height:100%;width:92px; {rdelim} 
                      
                      div#scrollbar2 {ldelim} height:100%; {rdelim} 
                      
                      div#scrollbar2 .track {ldelim} height:100%; {rdelim} 
                                            
            {rdelim}
              
        </style>
        
        {/if}
        

</head>

<body ontouchmove="BlockMove(event);">

    <center>    

    <a name="top"></a>
   
    <div id="blubb">
 
    <div class="frameborder" style="background:url('{$root_dir}media/images/gfx/frame_01.png');width:789px;height:78px;float:left;position:relative">&nbsp; </div>

    <div class="frameborder" style="clear:both"></div>
 
		<div class="frameborder" style="background:url('{$root_dir}media/images/gfx/frame_02_new.png');width:79px;height:469px;float:left;position:relative;" usemap="#Image-Maps_3206" border="0">
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p></p>
		<a href="#" onclick="parent.location='{$root_dir}'" style="font-size:46px;letter-spacing:2px">&nbsp;&nbsp;</a>
		</div>

		<div class="frame_xy">
		     
		    {include file="titlebar.tpl"}
		     
		    {if $module != ''}    
		    
		    <div id="container" class="new_ref_bg"  > <!-- optional container div for scroll area and scrollbar -->
		  
		        <div id="wn1" style="width:100%;"> <!-- scroll area div -->
		            <div id="lyr1" style="width:100%;" > <!-- layer in scroll area (content div) -->
		
		    {/if}      
		                 
