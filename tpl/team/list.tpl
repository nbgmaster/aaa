
  
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="position:absolute;top:0;left:0">
	<tr>
    <td valign="top" style="padding-top:16px;padding-left:10px">
    
           <div id="container2"> <!-- optional container div for scroll area and scrollbar -->
        <div id="wn2"> <!-- scroll area div -->
            <div id="lyr2" style="background:transparent"> <!-- layer in scroll area (content div) -->
     
 <table border="0" cellpadding="0" cellspacing="0"><tr>
 
			<td class="team_name_size" height="23" style="text-align:left">
 
      <span style="margin-left:8px;color:#e98314;">Operations</span></td>

	</tr>
  
	 {foreach from=$array_list key=mid item=listitem name=listitem}

	<tr>
		<td style="border-bottom:0px solid #fff;padding-left:8px;padding-right:26px;text-align:left" class="team_name_size" height="24">
    <a onclick="xajax_show_details('team', {$listitem.id})" title="" style="cursor:pointer">
    {$listitem.firstname} {$listitem.lastname}
     </a>
     </td>
	</tr>
	{/foreach}
  
  			<tr>
		<td style="padding-left:8px;padding-top:16px;text-align:left" class="team_name_size" height="23"><span style="color:#e98314;">Marketing</span></td>
				</tr>	
        
   	{foreach from=$array_list3 key=mid item=listitem name=listitem}

	<tr>
		<td style="border-bottom:0px solid #fff;padding-left:8px;padding-right:26px;text-align:left" class="team_name_size" height="24">
    <a onclick="xajax_show_details('team', {$listitem.id})" title="" style="cursor:pointer">
    {$listitem.firstname} {$listitem.lastname}
     </a>
     </td>
	</tr>
	{/foreach}
  

					<tr>
		<td style="padding-left:8px;padding-top:16px;text-align:left" class="team_name_size" height="23"><span style="color:#e98314;">Development</span></td>
				</tr>	
		
	{foreach from=$array_list2 key=mid item=listitem name=listitem}

	<tr>
		<td style="border-bottom:0px solid #fff;padding-left:8px;padding-right:26px;text-align:left" class="team_name_size" height="24">
    <a onclick="xajax_show_details('team', {$listitem.id})" title="" style="cursor:pointer">
    {$listitem.firstname} {$listitem.lastname}
     </a>
     </td>
	</tr>
	{/foreach}
   		
        
  </table>
  
  <br><br><br><br>

           </div><!-- end content div (lyr2) -->
    
    </div><!-- end wn2 div -->
    <div id="scrollbar2"></div> <!-- code adds up, down, track, and dragBar divs -->
</div> <!-- end container2 div -->

 
    </td>
		<td class="nav_08" valign="top" style="padding-right:28px;text-align:left">
    
        <p id="team_profile" class="p_001">