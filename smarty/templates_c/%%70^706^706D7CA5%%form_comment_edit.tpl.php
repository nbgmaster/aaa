<?php /* Smarty version 2.6.18, created on 2012-07-05 15:21:40
         compiled from formular/form_comment_edit.tpl */ ?>
<form method="post" name="formE_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" id="formE_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" onsubmit="return false" style="display:inline">

<table width="100%" cellpadding="2" cellspacing="0">

<fieldset id="create_comment">

 <tr>
 
  <td valign="top" width="16%" align="left"><label for="name_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" class="form_titles"><?php echo $this->_tpl_vars['f_name']; ?>
:</label></td>
        
  <td><input type="text" maxlength="50" size="30" name="name_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" value="<?php echo $this->_tpl_vars['valuec']['name']; ?>
" id="name_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" class="inp_003"></td>
  
 </tr>

 <tr>
 
  <td valign="top"><label for="comment_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" class="form_titles"><?php echo $this->_tpl_vars['f_msg_c']; ?>
:</label></td>
        
  <td><textarea name="comment_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" id="comment_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" class="form_com_edit"><?php echo $this->_tpl_vars['valuec']['comment_unformatted']; ?>
</textarea></td>
  
 </tr>
  
 <tr>

  <td>&nbsp;</td> 
  <td>
  <input type="submit" onclick="xajax_edit_comment(xajax.getFormValues('formE_<?php echo $this->_tpl_vars['valuec']['id']; ?>
'), <?php echo $this->_tpl_vars['valuec']['id']; ?>
, <?php echo $this->_tpl_vars['blog_id']; ?>
, <?php echo $this->_tpl_vars['page_id']; ?>
, <?php echo $this->_tpl_vars['com_total']; ?>
)" value="<?php echo $this->_tpl_vars['submit_comform_edit']; ?>
" class="sub_002">
  </td>

 </tr>
 
</fieldset>

</table>
 
 </form>