<?php /* Smarty version 2.6.18, created on 2012-07-05 17:07:09
         compiled from team/list.tpl */ ?>

  
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="position:absolute;top:0;left:0">
	<tr>
    <td valign="top" style="padding-top:16px;padding-left:10px">
    
           <div id="container2"> <!-- optional container div for scroll area and scrollbar -->
        <div id="wn2"> <!-- scroll area div -->
            <div id="lyr2" style="background:transparent"> <!-- layer in scroll area (content div) -->
     
 <table border="0" cellpadding="0" cellspacing="0"><tr>
 
			<td class="team_name_size" height="23">
 
      <span style="margin-left:8px;font-size:16px;color:#e98314; ">Operations</span></td>

	</tr>
  
	 <?php $_from = $this->_tpl_vars['array_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['mid'] => $this->_tpl_vars['listitem']):
        $this->_foreach['listitem']['iteration']++;
?>

	<tr>
		<td style="border-bottom:0px solid #fff;padding-left:8px;padding-right:26px" class="team_name_size" height="24">
    <a onclick="xajax_show_details('team', <?php echo $this->_tpl_vars['listitem']['id']; ?>
)" title="" style="cursor:pointer">
    <?php echo $this->_tpl_vars['listitem']['firstname']; ?>
 <?php echo $this->_tpl_vars['listitem']['lastname']; ?>

     </a>
     </td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
  
  			<tr>
		<td style="padding-left:8px;padding-top:16px" class="team_name_size" height="23"><span style="font-size:16px;color:#e98314;">Marketing</span></td>
				</tr>	
        
   	<?php $_from = $this->_tpl_vars['array_list3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['mid'] => $this->_tpl_vars['listitem']):
        $this->_foreach['listitem']['iteration']++;
?>

	<tr>
		<td style="border-bottom:0px solid #fff;padding-left:8px;padding-right:26px" class="team_name_size" height="24">
    <a onclick="xajax_show_details('team', <?php echo $this->_tpl_vars['listitem']['id']; ?>
)" title="" style="cursor:pointer">
    <?php echo $this->_tpl_vars['listitem']['firstname']; ?>
 <?php echo $this->_tpl_vars['listitem']['lastname']; ?>

     </a>
     </td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
  

					<tr>
		<td style="padding-left:8px;padding-top:16px" class="team_name_size" height="23"><span style="font-size:16px;color:#e98314;">Development</span></td>
				</tr>	
		
	<?php $_from = $this->_tpl_vars['array_list2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['mid'] => $this->_tpl_vars['listitem']):
        $this->_foreach['listitem']['iteration']++;
?>

	<tr>
		<td style="border-bottom:0px solid #fff;padding-left:8px;padding-right:26px" class="team_name_size" height="24">
    <a onclick="xajax_show_details('team', <?php echo $this->_tpl_vars['listitem']['id']; ?>
)" title="" style="cursor:pointer">
    <?php echo $this->_tpl_vars['listitem']['firstname']; ?>
 <?php echo $this->_tpl_vars['listitem']['lastname']; ?>

     </a>
     </td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
   		
        
  </table>
  
  <br><br><br><br>

           </div><!-- end content div (lyr2) -->
    
    </div><!-- end wn2 div -->
    <div id="scrollbar2"></div> <!-- code adds up, down, track, and dragBar divs -->
</div> <!-- end container2 div -->

 
    </td>
		<td class="nav_08" valign="top" style="padding-right:28px">
    
        <p id="team_profile" class="p_001">