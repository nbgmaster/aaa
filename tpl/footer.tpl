{if $module != ''}

	<div class="super_fix"></div>
	
	</div><!-- end content div (lyr1) -->
	
	</div><!-- end wn div -->
	<div id="scrollbar1"></div>
	<!-- code adds up, down, track, and dragBar divs -->
	</div> <!-- end container div -->

{/if}

</div>

<div class="frameborder" style="background:url('{$root_dir}media/images/gfx/frame_05_new.png');width:84px;height:469px;float:left;position:relative">&nbsp;</div>
<div class="frameborder" style="clear:both"></div>
<div class="frameborder" style="background:url('{$root_dir}media/images/gfx/frame_bottom_l.png');width:79px;height:76px;float:left;position:relative">&nbsp;</div>
<div class="frameborder" style="background:url('{$root_dir}media/images/gfx/frame_08.png');width:626px;height:76px;float:left;position:relative">&nbsp;</div>
<div class="frameborder" style="background:url('{$root_dir}media/images/gfx/frame_bottom_r.png');width:84px;height:76px;float:left;position:relative">&nbsp;</div>

<div class="frameborder" style="clear:both"></div>

<div class="copyright_note">

	<table width="766">
		<tr>
			<td align="left"><span align="center" class="copy_001"> &nbsp; &nbsp; &copy; <b>allaboutapps</b> {$c_year_copy}</span></td>
			<td align="right" width="33%"><img src="{$dir_img}flag_german.jpg" onclick="change_lang(0)" class="img_flag" title="{$title_flag1}"> &nbsp; <img src="{$dir_img}flag_english.jpg" onclick="change_lang(1)" class="img_flag" title="{$title_flag2}"> &nbsp; &nbsp; </td>
		</tr>
	</table>

</div></div>
</center>


        {if $style_0 == "handheld"}
                	      
        <script type="text/javascript">

		  function getWidth()
		  {
		    xWidth = null;
		    if(window.screen != null)
		      xWidth = window.screen.availWidth;
		
		    if(window.innerWidth != null)
		      xWidth = window.innerWidth;
		
		    if(document.body != null)
		      xWidth = document.body.clientWidth;
		      
		      widthx = xWidth+"px";
		      
		      //alert(widthx);
       		   {*if $module == ''}  document.getElementById('table_003').style.cssText = 'width:'+widthx+' !important';{/if*}
                            
  		      
		      document.getElementById('blubb').style.width=widthx;
		       {if $module != ''}  document.getElementById('container').style.width=widthx; {/if}
		       {if $module == ''}  document.getElementById('frame_xy').style.width=widthx; {/if}
		       {if $module != '' && $module != 'references'}  document.getElementById('nav_01').style.width=widthx; {/if}
		       {if $module != '' && $module == 'references'}  document.getElementById('table_ref_navi').style.width=widthx; {/if}
		       {if $module != '' && $module == 'references'}  document.getElementById('ref_01').style.width=widthx; {/if}
       		   {if $module != '' && $module == 'references'}  document.getElementById('ref_02').style.width=widthx; {/if}

  		       		   {if $module == ''} document.getElementById('table_003').style.width=widthx; {/if}
       		       		      
	 //  document.getElementById('test').innerHTML="Kjlkj"+widthx;
    	      		
		  //  return xWidth;
		  }
		function getHeight() {
		  xHeight = null;
		  if(window.screen != null)
		    xHeight = window.screen.availHeight;
		
		  if(window.innerHeight != null)
		    xHeight =   window.innerHeight;
		
		  if(document.body != null)
		    xHeight = document.body.clientHeight;
		    
		      heightx = xHeight+"px";
		      		
		 // return xHeight;
		 //	   document.getElementById('test').innerHTML="Kjlkj"+heightx;
    	
		   
		       {if $module != ''}  document.getElementById('container').style.height=heightx; {/if}
		       {if $module == ''}  document.getElementById('frame_xy').style.height=heightx; {/if}
		       {if $module == ''}  document.getElementById('table_002').style.height=heightx; {/if}
   
   			   document.getElementById('blubb').style.height=heightx;	       		 
		}
		
		getWidth();
		getHeight();
		
		</script>
		{/if}


{literal}
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E")); 
</script>
<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-10230188-1");
		pageTracker._trackPageview();
	} catch(err) {
	}
</script>
{/literal}

</body>
</html>
