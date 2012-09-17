<p>&nbsp;</p>

<div align="center">
<table width="90%" border=0>
<tr>
 <td style="text-align:left">   
    {foreach from=$array item=services name=services}
    <!--span class="blog_title">{$services.name}</span>
    <p>&nbsp;</p-->    
    <span class="hell_bold" style="font-size:16px">{if $lang == "german"}{$services.short_DE}{else}{$services.short_EN}{/if}</span>
    <p>&nbsp;</p>
    {if $lang == "german"}{$services.description_DE}{else}{$services.description_EN}{/if}
    {/foreach}
   </td> 
    </tr></table>
    
    {*if $services.id_handler == 'consulting'*}     
      {include file="services/overview.tpl"}
    {*/if*}
    
    </div>
    