
<p>&nbsp;</p>
<p>&nbsp;</p>

<div align="center" style="padding-right:20px">

     {foreach from=$array item=blog name=blog}
     
     <table class="nav_03" border="0" cellpadding="0" cellspacing="0" style="padding-left:2px;">
	<tr>
		<td style="{*background:url('{$dir_img}gfx/label_01.png') no-repeat;*} width:12px;display:none" height="47"></td>
		<td style="{*background:url('{$dir_img}gfx/label_02.png') repeat-x*}" class="nav_04" onclick="parent.location='{$root_dir}blog/{$blog.thisid}/'" align="left">
  
    <span class="blog_date_c" style="font-size:14px">&nbsp;&nbsp;{$blog.date_formatted}</span>

    <p class="blog_list" style="font-size:16px; color:#404040;padding-left:8px">{if $lang == 'german'}{$blog.title}{else}{$blog.title_EN}{/if}</p>

    </td>
		<td style="{*background:url('{$dir_img}gfx/label_03.png') no-repeat;*}width:14px;" height="47"></td>
		<td style="{*background:url('{$dir_img}gfx/label_04.png') no-repeat;*}width:25px" height="47"></td>
	</tr>
  <tr><td colspan="3" style="padding-left:8px;cursor:default;line-height:24px">{if $lang == 'german'}{$blog.preview_DE|truncate:200}{else}{$blog.preview_EN|truncate:200}{/if} <a href="#" onclick="parent.location='{$root_dir}blog/{$blog.thisid}/'" style="font-size:14px;text-decoration:underline">{if $lang=="german"}weiterlesen{else}read more{/if}</a>
</td></tr>
</table>  

<p>&nbsp;</p>


    {/foreach}

    </div>