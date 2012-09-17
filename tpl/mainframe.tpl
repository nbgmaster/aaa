
  {if $module == ''}    
                    
 <table cellspacing="0" cellpadding="0" align="center" width="100%">
 
 <tr><td valign="top" class="table_002" id="table_002">
 
 
 <table cellspacing="0" cellpadding="0" class="table_003" align="center" id="table_003">
 <tr><td>
 	

  <table style="width:100%;height:56%" border="0" cellspacing="0" cellpadding="0">
  
 <tr>
 
     <td class="td_icon2" align="center" valign="bottom" style="height:50%">
    <span onclick="parent.location='{$root_dir}services/consulting/'" class="home_buttons">
    <img src="{$dir_img}icons/consulting.png" class="icon_size"><p></p>
    {$arr_services.consulting}</span>
    </td> 

    <td class="td_icon2" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}services/development/'" class="home_buttons">
    <img src="{$dir_img}icons/development.png" class="icon_size"><p></p>
    {$arr_services.development}</span>
    </td>
    
    <td class="td_icon2" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}services/publishing/'" class="home_buttons">
    <img src="{$dir_img}icons/publishing.png" class="icon_size"><p></p>
    {$arr_services.publishing}</span>
    </td>

    <td class="td_icon2" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}services/monitoring/'" class="home_buttons">
    <img src="{$dir_img}icons/monitoring.png" class="icon_size"><p></p>
    {$arr_services.monitoring}</span>
    </td>
               
  </tr> 
  
   <tr>
 
    <td class="td_icon3" align="center" valign="bottom" style="height:50%">
    <span onclick="parent.location='{$root_dir}products/app_check/'" class="home_buttons">
    <img src="{$dir_img}icons/AppCheck.png" class="icon_size" ><p></p>
    {$arr_products.app_check}</span>
    </td> 

    <td class="td_icon3" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}products/app_optimization/'" class="home_buttons">
    <img src="{$dir_img}icons/AppStoreOpt.png" class="icon_size"><p></p>
    ASO<br></span>
    </td>
    
    <td class="td_icon3" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}products/app_campaign/'" class="home_buttons">
    <img src="{$dir_img}icons/AppCampaign.png" class="icon_size"><p></p>
    {$arr_products.app_campaign}</span>
    </td>
    
    <td class="td_icon3" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}products/app_banner/'" class="home_buttons">
    <img src="{$dir_img}icons/AppBanner.png"  class="icon_size"><p></p>
    {$arr_products.app_banner}</span>
    </td>
             
  </tr>
  
  </table>
  
  <table style="width:100%;height:44%" border="0" cellspacing="0" cellpadding="0">

   <tr>
 
    <td class="td_icon4" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}blog/'" class="home_buttons">
    <img src="{$dir_img}icons/blog.png" class="icon_size"><p></p>
    <span style="color:#fff">
    {if $lang=='german'}{$block.blog.title_DE}{else}{$block.blog.title_EN}{/if}
    </span></span></td> 
    
    <td class="td_icon4" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}team/'" class="home_buttons">
    <img src="{$dir_img}icons/team.png" class="icon_size"><p></p>
    <span style="color:#fff">
    {if $lang=='german'}{$block.team.title_DE}{else}{$block.team.title_EN}{/if}</span></span></td>
    
    <td class="td_icon4" align="center" valign="bottom">
    <span onclick="parent.location='{$root_dir}press/'" class="home_buttons">
    <img src="{$dir_img}icons/press.png" class="icon_size"><p></p>
    <span style="color:#fff">
    {if $lang=='german'}{$block.press.title_DE}{else}{$block.press.title_EN}{/if}</span></span></td>
    
    
    <td class="td_icon4" align="center" valign="bottom" >
    <span onclick="parent.location='{$root_dir}references/'" class="home_buttons">
    <img src="{$dir_img}icons/references.png" class="icon_size"><p></p>
    <span style="color:#fff">
    {if $lang=='german'}{$block.references.title_DE}{else}{$block.references.title_EN}{/if}</span></span>
    </td>
               
    <td class="td_icon4" align="center" valign="bottom" >
    <span onclick="parent.location='{$root_dir}cms/imprint/'" class="home_buttons">
    <img src="{$dir_img}icons/imprint.png" class="icon_size"><p></p>
    <span style="color:#fff">
    {if $lang=='german'}{$block.imprint.title_DE}{else}{$block.imprint.title_EN}{/if}</span></span></td>

 
  </tr>
     
</table>
</td></tr>
</table>

</td></tr>
</table>

 {/if} 
 