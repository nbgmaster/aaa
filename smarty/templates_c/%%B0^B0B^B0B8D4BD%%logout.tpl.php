<?php /* Smarty version 2.6.18, created on 2012-07-01 17:11:41
         compiled from logon/logout.tpl */ ?>
<table width="100%">

 <form method="post" name="form_L">

 <tr>

  <td>

  <div class="navimenu" width="100%">

  <div align="right">

    <ul>
  
       <li><b><?php echo $this->_tpl_vars['logon_greeting']; ?>
 <?php echo $this->_tpl_vars['loginname']; ?>
</b></li>

       <?php if ($this->_tpl_vars['Myadmin'] == 1): ?>
       
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'settings'): ?><?php $this->assign('activity1', 'h'); ?><?php else: ?><?php $this->assign('activity1', 'n'); ?><?php endif; ?>
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'newblog'): ?><?php $this->assign('activity2', 'h'); ?><?php else: ?><?php $this->assign('activity2', 'n'); ?><?php endif; ?>
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'changecms' && $this->_tpl_vars['cat'] == 'about'): ?><?php $this->assign('activity3', 'h'); ?><?php else: ?><?php $this->assign('activity3', 'n'); ?><?php endif; ?>
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'changecms' && $this->_tpl_vars['cat'] == 'ref'): ?><?php $this->assign('activity4', 'h'); ?><?php else: ?><?php $this->assign('activity4', 'n'); ?><?php endif; ?>
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'newgallery'): ?><?php $this->assign('activity5', 'h'); ?><?php else: ?><?php $this->assign('activity5', 'n'); ?><?php endif; ?>
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'editlinks'): ?><?php $this->assign('activity6', 'h'); ?><?php else: ?><?php $this->assign('activity6', 'n'); ?><?php endif; ?>
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'changecms' && $this->_tpl_vars['cat'] == 'hiking'): ?><?php $this->assign('activity7', 'h'); ?><?php else: ?><?php $this->assign('activity7', 'n'); ?><?php endif; ?>
       <?php if ($this->_tpl_vars['module'] == 'admin' && $this->_tpl_vars['do'] == 'changecms' && $this->_tpl_vars['cat'] == 'imprint'): ?><?php $this->assign('activity8', 'h'); ?><?php else: ?><?php $this->assign('activity8', 'n'); ?><?php endif; ?>

       <li class="admin_<?php echo $this->_tpl_vars['activity1']; ?>
">
       <a href="<?php echo $this->_tpl_vars['href_editset']; ?>
" class="leftnavi_<?php echo $this->_tpl_vars['activity1']; ?>
"><?php echo $this->_tpl_vars['set_edit']; ?>
</a>
       </li>
       <li class="admin_<?php echo $this->_tpl_vars['activity2']; ?>
">
       <a href="<?php echo $this->_tpl_vars['href_newblog']; ?>
" class="leftnavi_<?php echo $this->_tpl_vars['activity2']; ?>
"><?php echo $this->_tpl_vars['blog_new']; ?>
</a>
       </li>
       <li class="admin_<?php echo $this->_tpl_vars['activity8']; ?>
">
       <a href="<?php echo $this->_tpl_vars['href_editimp']; ?>
" class="leftnavi_<?php echo $this->_tpl_vars['activity8']; ?>
"><?php echo $this->_tpl_vars['imp_edit']; ?>
</a>
       </li>
       
       <?php endif; ?>

       <li><input type="submit" value="<?php echo $this->_tpl_vars['left_logout']; ?>
" class="sub_001" name="logout"></li>

    </ul>

  </div>

  </td>

 </tr>

</form>

</table>

<div class="navimenu">