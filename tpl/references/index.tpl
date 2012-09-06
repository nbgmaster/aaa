<div class="ref">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">

  
	<tr>
		<td valign="top">
	
		{if $total_n > 0}
	
            	
              <table width="100%" height="{if $browser == 'Firefox'}138{else}172{/if}" class="ref_01" cellspacing="0" cellpadding="0">
          <tr>
           {counter start=0 assign="count"} 
          	{foreach from=$array item=ref name=ref}
          
          <td align="center" height="100%" width="25%" valign="bottom" class="fix_spacing2">
          
              <table cellspacing="0" cellpadding="0" height="100%">

               <tr><td align="center" valign="bottom" style="padding-bottom:2px">
               {if $ref.url != ''}<a href="{$ref.url}" target="_blank">{/if}<img src="{$dir_img}references/{$ref.ID}.png" width="60">{if $ref.url != ''}</a>{/if}
               </td></tr>
                             <tr><td align="center" valign="top">
               <span style="color:#fff;font-size:{if $ref.smallsize==1}14{else}14{/if}px">{$ref.company}</span>
               </td></tr>
               </table>
          </td>
          
           {counter}

 {if $count % 4 == 0 && $count != 0}
 {math assign="entries_left" equation="a - b" a=$total_n b=$count} 
 {if $entries_left > 0}

 </tr></table>
               <table width="100%" height="{if $browser == 'Firefox'}138{else}172{/if}" class="ref_02" cellspacing="0" cellpadding="0"><tr>
               {/if}
               
      {/if}
           	
          	{/foreach}    
       
          {if $rest != 0}
             {if $rest == 3}<td width="25%">&nbsp;</td>{/if}
             {if $rest == 2}<td width="25%">&nbsp;</td><td width="25%">&nbsp;</td>{/if}
             {if $rest == 1}<td width="25%">&nbsp;</td><td width="25%">&nbsp;</td><td width="25%">&nbsp;</td>{/if}               
          {/if}        
          </tr>
          </table>
          
          {/if}

    </td>
	</tr>
	
</table>

</div>

     
<div class="ref_mobile">  
<table class="table_ref" height="100%" border="0" cellpadding="0" cellspacing="0">

	<tr>
		<td>
	
		{if $total_n > 0}
	         
            	
              <table width="100%" height="172" class="ref_01" id="ref_01" cellspacing="0" cellpadding="0" style="background:url('{$dir_img}bg/bar_m.png') no-repeat">
          <tr>
           {counter start=0 assign="count"} 
          	{foreach from=$array item=ref name=ref}
          
          <td align="center" height="100%" width="25%">
          
              <table cellspacing="0" cellpadding="0" height="100%">

               <tr><td align="center" valign="bottom" style="padding-bottom:2px">
               {if $ref.url != ''}<a href="{$ref.url}" target="_blank">{/if}<img src="{$dir_img}references/{$ref.ID}.png" width="60">{if $ref.url != ''}</a>{/if}
               </td></tr>
                             <tr><td align="center" valign="top">
               <span style="color:#fff;font-weight:bold;font-size:{if $ref.smallsize==1}14{else}14{/if}px">{$ref.company}</span>
               </td></tr>
               </table>
          </td>
          
           {counter}

 {if $count % 2 == 0 && $count != 0}
 {math assign="entries_left" equation="a - b" a=$total_n b=$count}
 {if $entries_left > 0}
 </tr></table>
               <table width="100%" height="172" class="ref_02" id="ref_02" cellspacing="0" cellpadding="0" style="background:url('{$dir_img}bg/bar_m.png') no-repeat"><tr>
               {/if}
               
      {/if}
           	
          	{/foreach}

          </tr>
          </table>
          
          {/if}


    </td>
	</tr>
	
</table>

</div>

<div class="ref_mobile_l">
<table class="table_ref" height="100%" border="0" cellpadding="0" cellspacing="0">

	<tr>
		<td>
	
		{if $total_n > 0}
	
            	
         	
              <table width="100%" height="172" class="ref_01" id="ref_02" cellspacing="0" cellpadding="0" style="background:url('{$dir_img}bg/bar_m_l.png') no-repeat">
          <tr>
           {counter start=0 assign="count"} 
          	{foreach from=$array item=ref name=ref}
          
          <td align="center" height="100%" width="25%">
          
              <table cellspacing="0" cellpadding="0" height="100%">

               <tr><td align="center" valign="bottom" style="padding-bottom:2px">
               {if $ref.url != ''}<a href="{$ref.url}" target="_blank">{/if}<img src="{$dir_img}references/{$ref.ID}.png" width="60">{if $ref.url != ''}</a>{/if}
               </td></tr>
                             <tr><td align="center" valign="top">
               <span style="color:#fff;font-weight:bold;font-size:{if $ref.smallsize==1}14{else}14{/if}px">{$ref.company}</span>
               </td></tr>
               </table>
          </td>
          
           {counter}

 {if $count % 3 == 0 && $count != 0}
 {math assign="entries_left" equation="a - b" a=$total_n b=$count}
 {if $entries_left > 0}
 </tr></table>
               <table width="100%" height="172" class="ref_02" id="ref_02" cellspacing="0" cellpadding="0" style="background:url('{$dir_img}bg/bar_m_l.png') no-repeat"><tr>
               {/if}
               
      {/if}
           	
          	{/foreach}

          </tr>
          </table>
          
          
          {/if}


    </td>
	</tr>
	
</table>

</div>