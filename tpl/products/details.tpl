  
	<script type="text/javascript" src="{$root_dir}js/jquery.min.js"></script>
	<script type="text/javascript" src="{$root_dir}js/jquery.carousel.min.js"></script>

	<script type="text/javascript">
		$(function(){ldelim}
			$("div.products").carousel();
		{rdelim});
	</script>

    <p>&nbsp;</p>
    <div align="center">
    
    {foreach from=$array item=products name=products}
    
    <table width="96%">
    
    <tr>
    
    {if $products.category != 'marketing'}
    
    <td valign="top" align="center" class="td_004">
    <img src="{$root_dir}media/images/products/logos/{$products.id_handler}.png" class="icon_products">
    <p>&nbsp;</p>
    <div align="left" class="div_005">
    Betriebssystem: {$products.OS}
    <p>&nbsp;</p>
    Preis: {$products.price}
    <p>&nbsp;</p>
    </div>
    <a href="{$products.external}" target="itunes_store">
    <img src="http://r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" alt="Cost Control for Car2Go - all about apps" style="border: 0;" class="icon_products">
    </a>
    
    </td>
    
    {/if}
    
    <td class="td_003">
    
    <span class="blog_content">{if $lang == "german"}{eval var=$products.description_DE}{else}{eval var=$products.description_EN}{/if}</span>
    <p>&nbsp;</p>
    
    </td></tr>
    <tr><td colspan="2" class="td_005">

    {if $total_screens > 0}  
<!--[if IE 6]><div id="IE6" class="IE"><![endif]--> <!--[if IE 7]><div id="IE7" class="IE"><![endif]--> <!--[if IE & ((!IE 6) & (!IE 7))]><div><![endif]--> <!--[if !IE]>--><div><!--<![endif]-->
	<div id="slider_container">

			<div class="box box-inner">
				<div class="box box-primary">

					<div class="carousel products"> 

						<ul>
						
            {section name=foo start=1 loop=$total_screens+1 step=1} 
            	<li>
								<img src="{$root_dir}media/images/products/screenshots/{$products.id_handler}/screen_{$smarty.section.foo.index}.png" alt="" class="screenshots" />
							</li>

{/section} 

						</ul>
					</div>
				</div>
				
			{/if}

    </td>
    </tr>
    </table>
    {/foreach}
    
    <p>&nbsp;</p>
    
    </div>
