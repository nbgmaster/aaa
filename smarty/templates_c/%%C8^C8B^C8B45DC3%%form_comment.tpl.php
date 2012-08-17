<?php /* Smarty version 2.6.18, created on 2012-07-05 15:21:39
         compiled from formular/form_comment.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/form_comment.js"></script>


<table width="100%">

<form method="post" name="form_C" onsubmit="return checkForm(this.bid.value)" action="#cc<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" style="display:inline">

<fieldset id="create_comment">

 <tr>
 
  <td valign="top" width="16%"><label for="name" class="form_titles">&nbsp;<?php echo $this->_tpl_vars['f_name']; ?>
:</label></td>
        
  <td><input type="text" maxlength="50" size="30" name="name" id="name_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" class="inp_003"<?php if ($this->_tpl_vars['error_id'] == $this->_tpl_vars['blog']['thisid']): ?> value="<?php echo $this->_tpl_vars['name_c_s']; ?>
"<?php endif; ?>></td>
  
 </tr>

 <tr>
 
  <td valign="top"><label for="comment" class="form_titles">&nbsp;<?php echo $this->_tpl_vars['f_msg_c']; ?>
:</label></td>
        
  <td><textarea name="comment" id="comment_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" class="form_com" style="resize:none"><?php if ($this->_tpl_vars['error_id'] == $this->_tpl_vars['blog']['thisid']): ?><?php echo $this->_tpl_vars['comment_c_s']; ?>
<?php endif; ?></textarea></td>
  
 </tr>
 
   <tr>
 
  <td valign="top"><label for="comment" class="form_titles">&nbsp;<?php echo $this->_tpl_vars['f_code']; ?>
:</label></td>
  
  <td valign="top">
  
    <div style="float:left">

    <input type="text" name="captcha_code" size="10" maxlength="6" class="inp_003" />  
    <!--/td><td>&nbsp;</td><td-->
    </div>
        <div style="float:left">

    <img id="captcha_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" src="<?php echo $this->_tpl_vars['root_dir']; ?>
modules/securimage/securimage_show.php" alt="CAPTCHA Image" />
    
      </div>
        <div style="float:left">  
    <a href="#" onclick="document.getElementById('captcha_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
').src = '<?php echo $this->_tpl_vars['root_dir']; ?>
modules/securimage/securimage_show.php?' + Math.random(); return false" class="postedlink">
      <img src="<?php echo $this->_tpl_vars['dir_img']; ?>
reset.png" border="0">
          </a>
    </div><div style="clear:both"></div>
    
    <?php if ($this->_tpl_vars['error_id'] == $this->_tpl_vars['blog']['thisid']): ?><p class="p_003"><?php echo $this->_tpl_vars['error_code']; ?>
</p><p>&nbsp;</p><?php endif; ?>

  </td>
  
 </tr>
  
 <tr>

  <td>&nbsp;</td> 
  <td><input type="submit" id="submitC" name="submitC" value="<?php echo $this->_tpl_vars['submit_comform']; ?>
" class="btn"></td>
  
 </tr>

 <input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['blog']['thisid']; ?>
">
 
 </fieldset>

 </form>
 
</table>

<p>&nbsp;</p>