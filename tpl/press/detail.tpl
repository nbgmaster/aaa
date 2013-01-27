
	<div class="press_1" style="width:90%">
	
	     {foreach from=$array item=press name=press}
	    
	      <span class="blog_date_c" style="font-size:14px;">{$press.date_formatted}</span>
	      
	      <p></p>
	      
	      <span class="blog_content" style="padding-left:0;">
	      <span style="font-size:18px"><b>{$press.title}</b></span>
	      <p>&nbsp;</p>
	      {$press.text}

          <p>&nbsp;</p>
	 </span>
	{/foreach}
	
	<div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div>
	<p>&nbsp;</p>	
	<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
	{literal}
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    {/literal}
	<p>&nbsp;</p>
	
	</div>
	
