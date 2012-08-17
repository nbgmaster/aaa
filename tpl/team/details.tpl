
   {foreach from=$array_details key=mid2 item=profile name=profile}

   <table width="96%"><tr><td valign="top" class="team_l">
   <span style="font-size:16px">{$profile.firstname} {$profile.lastname}</span>
   <p></p>
   <span style="font-size:16px">{$profile.job_position}</span>
   {if $profile.img_exist == 1}
   <p>&nbsp;</p>   
   <img src="{$dir_img}team/{$profile.id}.png" style="{*border:8px solid #000*}" class="img_team">
   {/if}
   

   </td>
   </tr>

   <tr>
   <td>
   
   <div class="team_desc">
   <p>&nbsp;</p>   
   {if $lang == "german"}{$profile.description_DE}{else}{$profile.description_EN}{/if}
   
   </div>

   
   <div class="team_desc_mobile">
   <p>&nbsp;</p>   
   {if $lang == "german"}{$profile.description_DE}{else}{$profile.description_EN}{/if}
   </div>
      
   </td>
   </tr>  
   <tr>
   <td>
   
   <b>{$team_contact}</b>
   </td></tr>
   <tr><td>
   <a href="mailto:{$profile.email}" style="text-decoration:underline;font-size:14px">{$profile.email}</a></td>
   </tr>

   {if $profile.category == 'management' || $profile.category == 'marketing' } 
      
   <tr>
   <td>{$profile.phone}</td>
   </tr>
   {/if}
   
   </table>
   
   {/foreach}
