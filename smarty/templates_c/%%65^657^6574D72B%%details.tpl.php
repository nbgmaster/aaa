<?php /* Smarty version 2.6.18, created on 2012-06-22 12:18:51
         compiled from team/details.tpl */ ?>

   <?php $_from = $this->_tpl_vars['array_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['profile'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['profile']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['mid2'] => $this->_tpl_vars['profile']):
        $this->_foreach['profile']['iteration']++;
?>

   <table width="96%"><tr><td valign="top" class="team_l">
   <span style="font-weight:900"><?php echo $this->_tpl_vars['profile']['firstname']; ?>
 <?php echo $this->_tpl_vars['profile']['lastname']; ?>
</span>
   <p></p>
   <i><?php echo $this->_tpl_vars['profile']['job_position']; ?>
</i>
   <?php if ($this->_tpl_vars['profile']['img_exist'] == 1): ?>
   <p>&nbsp;</p>   
   <img src="<?php echo $this->_tpl_vars['dir_img']; ?>
team/<?php echo $this->_tpl_vars['profile']['id']; ?>
.png" style="" class="img_team">
   <?php endif; ?>
   

   </td>
   </tr>

   <tr>
   <td>
   
   <div class="team_desc">
   <p>&nbsp;</p>   
   <?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['profile']['description_DE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['profile']['description_EN']; ?>
<?php endif; ?>
   
   </div>

   
   <div class="team_desc_mobile">
   <p>&nbsp;</p>   
   <?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['profile']['description_DE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['profile']['description_EN']; ?>
<?php endif; ?>
   </div>
      
   </td>
   </tr>  
   <tr>
   <td>
   
   <b><?php echo $this->_tpl_vars['team_contact']; ?>
</b>
   </td></tr>
   <tr><td>
   <?php echo $this->_tpl_vars['profile']['email']; ?>
</td>
   </tr>

   <?php if ($this->_tpl_vars['profile']['category'] == 'management' || $this->_tpl_vars['profile']['category'] == 'marketing'): ?> 
      
   <tr>
   <td><?php echo $this->_tpl_vars['profile']['phone']; ?>
</td>
   </tr>
   <?php endif; ?>
   
   </table>
   
   <?php endforeach; endif; unset($_from); ?>