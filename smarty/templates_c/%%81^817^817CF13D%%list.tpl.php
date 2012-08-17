<?php /* Smarty version 2.6.18, created on 2012-07-05 16:48:46
         compiled from blog/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'blog/list.tpl', 22, false),)), $this); ?>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div align="center" style="padding-right:20px">

     <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['blog'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['blog']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['blog']):
        $this->_foreach['blog']['iteration']++;
?>
     
     <table class="nav_03" border="0" cellpadding="0" cellspacing="0" style="padding-left:2px;">
	<tr>
		<td style=" width:12px;display:none" height="47"></td>
		<td style="" class="nav_04" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
blog/<?php echo $this->_tpl_vars['blog']['thisid']; ?>
/'" align="left">
  
    <span class="blog_date_c" style="font-size:14px">&nbsp;&nbsp;<?php echo $this->_tpl_vars['blog']['date_formatted']; ?>
</span>

    <p class="blog_list" style="font-size:16px; color:#404040;padding-left:8px"><?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['blog']['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['blog']['title_EN']; ?>
<?php endif; ?></p>

    </td>
		<td style="width:14px;" height="47"></td>
		<td style="width:25px" height="47"></td>
	</tr>
  <tr><td colspan="3" style="padding-left:8px;cursor:default;line-height:24px"><?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['preview_DE'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200) : smarty_modifier_truncate($_tmp, 200)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['preview_EN'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200) : smarty_modifier_truncate($_tmp, 200)); ?>
<?php endif; ?> <a href="#" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
blog/<?php echo $this->_tpl_vars['blog']['thisid']; ?>
/'" style="font-size:14px;text-decoration:underline"><?php if ($this->_tpl_vars['lang'] == 'german'): ?>weiterlesen<?php else: ?>read more<?php endif; ?></a>
</td></tr>
</table>  

<p>&nbsp;</p>


    <?php endforeach; endif; unset($_from); ?>

    </div>