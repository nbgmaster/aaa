  
           
    {if $module != '' AND $module != 'references'}
     
        <table class="nav_01" height="44" border="0" cellpadding="0" cellspacing="0">
      	<tr>                                      

      		<td class="heading_back_ini" height="44" align="center"> 


          <span onclick="parent.location='{$root_dir}{if $module=='blog' AND $bid != ""}blog/{elseif $module=='services' AND $sid != ''}{/if}'" class="header_nav_button">
              
              {if $module=='blog' AND $bid != ''}
              <span class="heading_fix">{$titlebar_overview}</span>
              {else}<span class="heading_fix2">{$titlebar_home}</span>{/if}
          
          </span>
          
          </td>
          <td style="background:url('{$root_dir}media/images/gfx/headerbg_01c.png') repeat-x" align="center" class="heading_back_2">&nbsp;
      		
          </td>
          
      		<td style="background:url('{$root_dir}media/images/gfx/headerbg_02.png') repeat-x" class="nav_02" height="44" align="center">
          <span class="header_nav_title">
          {if $module=='blog'}{$titlebar_blog}
          {elseif $module=='admin'}{$titlebar_admin}
          {elseif $module =='products'}{*$titlebar_products*} 
            {if $pid == 'app_check'}AppCheck{/if}
            {if $pid == 'app_optimization'}{if $lang == 'german'}App&nbsp;Store&nbsp;Optimierung{else}App&nbsp;Store&nbsp;Optimization{/if}{/if}
            {if $pid == 'app_campaign'}{if $lang == 'german'}App Kampagne{else}Campaigning{/if}{/if}
            {if $pid == 'app_banner'}AppBanner{/if}
          {elseif $module =='services'}{*$titlebar_services*}
          {if $sid == 'consulting'}Consulting{/if}
          {if $sid == 'development'}Development{/if}
          {if $sid == 'publishing'}Publishing{/if}
          {if $sid == 'monitoring'}Monitoring{/if}
          {if $sid == 'marketing'}Marketing{/if}
          {elseif $module =='team'}Team
          {elseif $module =='cms' AND $cat == 'imprint'}
            {if $lang == 'german'}{$block.imprint.title_DE}{else}{$block.imprint.title_EN}
            {/if}
                      {elseif $module =='press'}
            {if $lang == 'german'}{$block.press.title_DE}{else}{$block.press.title_EN}
            {/if}              
          {else}{/if}
          </span></td>
      		<td style="background:url('{$root_dir}media/images/gfx/headerbg_03.png')" width="95" height="44" align="center">
          </td>
      		<td style="background:url('{$root_dir}media/images/gfx/headerbg_04.png')" width="28" height="44"></td>
      	</tr>
      </table>
    

     {elseif $module == 'references'}
          
     
           <div class="ref_navi">
         
     <table width="100%" height="44" border="0" cellpadding="0" cellspacing="0" class="table_ref_t">
	<tr>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_01.png')" width="125" height="44" align="center">
    <span onclick="parent.location='{$root_dir}'" class="header_nav_button">
    <span>{$titlebar_home}</span>
    </span>
    </td>
		<td class="ref_navi_02" height="44">&nbsp;</td>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_b_03{if $cat == 'iPhone' OR $cat == ""}_h{/if}.png')" width="78" height="44" align="center"><a href="#" onclick="parent.location='{$root_dir}references/iPhone/'"><span style="color:#fff;font-size:14px;">iPhone</span></a></td>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_b_04{if $cat == 'iPad'}_h{/if}.png')" width="72" height="44" align="center"><a href="#"  onclick="parent.location='{$root_dir}references/iPad/'"><span style="color:#fff;font-size:14px;">Tablets</span></a></td>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_b_05{if $cat == 'android'}_h{/if}.png')" width="84" height="44" align="center"><a href="#" onclick="parent.location='{$root_dir}references/android/'"><span style="color:#fff;font-size:14px;">Android</span></a></td>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_b_06{if $cat == 'services'}_h{/if}.png')" width="207" height="44" align="center"><a href="#" onclick="parent.location='{$root_dir}references/services/'"><span style="color:#fff;font-size:14px;">Marketing & Consulting</span></a></td>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_b_07.png')" width="1" height="44"></td>
	</tr>
</table>
     
     </div>
     
  <div class="ref_navi_mobile">
         
     <table class="table_ref_navi" height="44" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_b_01_m.png') no-repeat;width:100px" height="44" align="center">
    <span onclick="parent.location='{$root_dir}'" class="header_nav_button">
    <span>{$titlebar_home}</span>
    </span>
    </td>
		<td class="ref_navi_02" height="44">&nbsp;</td>
		<td style="background:url('{$dir_img}gfx/bookshelf_top_b_06_m.png') no-repeat;width:175px" height="44" align="center">
		<select ONCHANGE="location = this.options[this.selectedIndex].value;">
		<option value="{$root_dir}references/iPhone/" {if $cat == '' OR $cat == 'iPhone'}selected="selected"{/if}>iPhone</option>
		<option value="{$root_dir}references/iPad/" {if $cat == 'iPad'}selected="selected"{/if}>Tablets</option>
		<option value="{$root_dir}references/android/" {if $cat == 'android'}selected="selected"{/if}>Android</option>
		<option value="{$root_dir}references/services/" {if $cat == 'services'}selected="selected"{/if}>Services</option>
		</select>
								
		</td>
	</tr>
</table>    
     
     </div>
          
     {/if}
    
    
    