<?php /* Smarty version 2.6.18, created on 2012-07-05 16:34:15
         compiled from services/details.tpl */ ?>
<p>&nbsp;</p>

<div align="center">
<table width="90%" border=0>
<tr>
 <td>   
    <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['services'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['services']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['services']):
        $this->_foreach['services']['iteration']++;
?>
    <!--span class="blog_title"><?php echo $this->_tpl_vars['services']['name']; ?>
</span>
    <p>&nbsp;</p-->    
    <span class="hell_bold"><?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['services']['short_DE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['services']['short_EN']; ?>
<?php endif; ?></span>
    <p>&nbsp;</p>
    <?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['services']['description_DE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['services']['description_EN']; ?>
<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
   </td> 
    </tr></table>
    
         
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "services/overview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
    </div>
    