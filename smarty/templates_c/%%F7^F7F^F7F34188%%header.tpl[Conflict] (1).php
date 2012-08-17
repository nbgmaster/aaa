<?php /* Smarty version 2.6.18, created on 2012-07-03 15:01:27
         compiled from header.tpl */ ?>
<!DOCTYPE html>
<html
<head>

<title><?php echo $this->_tpl_vars['title_hp']; ?>
</title>

        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="allaboutapps" />
        <meta name="copyright" content="(C) 2012 allaboutapps" />
        <meta name="publisher" content="Stefan Richter" />
        <meta name="language" content="<?php if ($this->_tpl_vars['lang'] == 'german'): ?>DE<?php else: ?>EN<?php endif; ?>" />
        <meta name="robots" content="follow,index" />
        <meta name="revisit-after" content="15 days" />
        <meta name="title" content="<?php echo $this->_tpl_vars['title_hp']; ?>
" />
        <meta name="description" content="<?php echo $this->_tpl_vars['main_title']; ?>
" />
        <meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
        <meta name="apple-mobile-web-app-capable" content="yes" />    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="imagetoolbar" content="no">
       
        <noscript><meta http-equiv="refresh" content="0;URL=html/noscript.htm"></noscript>

      	<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['dir_img']; ?>
favicon.ico" type="image/x-icon">
    	 
        <link rel="apple-touch-icon" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/logo_57x57.png" />
        <!-- startup image for web apps - iPad - landscape (748x1024) 
             Note: iPad landscape startup image has to be exactly 748x1024 pixels (portrait, with contents rotated).-->
        <link rel="apple-touch-startup-image" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/logo_748x1024.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
        <!-- startup image for web apps - iPad - portrait (768x1004) -->
        <link rel="apple-touch-startup-image" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/logo_768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
        <!-- startup image for web apps (320x460) -->
        <!--link rel="apple-touch-startup-image" href="img/iphone.png" media="screen and (max-device-width: 320px)" /-->
                        
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/scrollbar.css" type="text/css" />    
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/default.css" type="text/css" />   
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/slider.css" type="text/css" />  
        
        <?php if ($this->_tpl_vars['style_0'] == 'handheld'): ?>
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/mobile_portrait.css" type="text/css" media="screen and (max-width: 800px)" />
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/mobile_landscape.css" type="text/css" media="screen and (max-width: 800px) and (orientation:landscape)" />
        <?php endif; ?>
        
        <!--link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/galaxy.css" type="text/css" /-->   
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/tablet.css" type="text/css" />  
                       
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/slider.js"></script>     
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/<?php echo $this->_tpl_vars['lang_java']; ?>
.js"></script>        
                
                       

        <?php if ($this->_tpl_vars['module'] == 'team'): ?>        
        <script src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/dw_scroll_c.js" type="text/javascript"></script>
        
        <script type="text/javascript">
        
            function init_dw_Scroll() {
            
                // arguments: id of scroll area div, id of content div     
                // args: id, axis ('v' or 'h'), eType (event type for arrows), 
                // bScrollbar (include track and dragBar? true or false)
  
                var wndo1 = new dw_scrollObj('wn1', 'lyr1');
                wndo1.buildScrollControls('scrollbar1', 'v', 'mouseover', true);
                          
                var wndo2 = new dw_scrollObj('wn2', 'lyr2');              
                wndo2.buildScrollControls('scrollbar2', 'v', 'mouseover', true);

            } 

    
          </script>
          
        <?php else: ?>
        <script src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/dw_scroll_c.js" type="text/javascript"></script>
        
         <script type="text/javascript">
        
            function init_dw_Scroll() {
            
                // arguments: id of scroll area div, id of content div     
                // args: id, axis ('v' or 'h'), eType (event type for arrows), 
                // bScrollbar (include track and dragBar? true or false)
  
                var wndo1 = new dw_scrollObj('wn1', 'lyr1');
                wndo1.buildScrollControls('scrollbar1', 'v', 'mouseover', true);

            } 
            
          </script>
        
        <?php endif; ?>               

        <?php if ($this->_tpl_vars['module'] != ""): ?>         
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/scroll_ex.js"></script>
        <?php endif; ?>
        
        <script type="application/x-javascript">
  
            if (navigator.userAgent.indexOf('iPhone') != -1 || navigator.userAgent.match(/Android/i)) {
            addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
            }, false);
            }
            
            function hideURLbar() {
            window.scrollTo(0, 1);
            }  
            
        </script>

        <script>
         function BlockMove(event) {
          // Tell Safari not to move the window.
          event.preventDefault() ;
         }
        </script>

        <?php if ($this->_tpl_vars['module'] == ""): ?>
        
        <style type="text/css">
        
           div#container { height:469px; width:100%; } 
            
            div#wn1 { height:469px;width:100%; } 
            
            div#scrollbar1 { height:449px; } 
            
            div#scrollbar1 .track { height:458px; } 


            div#container2 { height:424px; width:198px; } 
            
            div#wn2 { height:424px;width:198px; } 
            
            div#scrollbar2 { height:390px; } 
            
            div#scrollbar2 .track { height:390px; } 
                      
                      
            @media (max-width: 800px) and (orientation:landscape)  {
            
                      div#container { height:320px; width:356px; } 
            
                      div#wn1 { height:320px;width:356px; } 
                      
                      div#scrollbar1 { height:320px; } 
                      
                      div#scrollbar1 .track { height:320px; } 


                      div#container2 { height:100%; width:92px; } 
            
                      div#wn2 { height:100%;width:92px; } 
                      
                      div#scrollbar2 { height:100%; } 
                      
                      div#scrollbar2 .track { height:100%; } 
                                            
            }
              
        </style>
        
        <?php endif; ?>

</head>

<body ontouchmove="BlockMove(event);">

    <center>

    <a name="top"></a>
    
    <div id="distance"></div>
    <div id="blubb">
 
    <div class="frameborder" style="background:url('<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/gfx/frame_01.png');width:789px;height:78px;float:left;position:relative">&nbsp; </div>

 <div class="frameborder" style="clear:both"></div>
 
		<div class="frameborder" style="background:url('<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/gfx/frame_02_new.png');width:79px;height:469px;float:left;position:relative;" usemap="#Image-Maps_3206" border="0">
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p></p>
<a href="#" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
'" style="font-size:46px;letter-spacing:2px">&nbsp;&nbsp;</a>
</div>

<div class="frame_xy">
     
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "titlebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     
    <?php if ($this->_tpl_vars['module'] != ''): ?>    
    
    <div id="container" class="new_ref_bg"  > <!-- optional container div for scroll area and scrollbar -->
  
        <div id="wn1" style="width:100%;"> <!-- scroll area div -->
            <div id="lyr1" style="width:100%;" > <!-- layer in scroll area (content div) -->

    <?php endif; ?>      
                 