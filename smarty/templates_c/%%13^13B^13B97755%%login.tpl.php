<?php /* Smarty version 2.6.18, created on 2012-07-01 17:11:37
         compiled from logon/login.tpl */ ?>

 <table width="100%">

 <form method="post">
 
<fieldset id="logon">

 <tr><td>

 <div class="navimenu" width="100%">

 <ul>

    <?php if ($this->_tpl_vars['failure']): ?>

     <li><span class="logon_failure"><?php echo $this->_tpl_vars['logon_failed']; ?>
</span></li>

   <?php endif; ?>

 <li>

 <table>
 <tr><td class="td_004">
 <label for="username"><?php echo $this->_tpl_vars['left_user']; ?>
:</label>
 </td><td>

 <input type="text" size="13" class="inp_001" name="username">

 </td></tr>
 </table>

 </li><li>

 <table>
 <tr><td class="td_004">
 <label for="password"><?php echo $this->_tpl_vars['left_pw']; ?>
:</label>
 </td><td>

 <input type="password" size="13" class="inp_001" name="password">

 </td><td>
 <input type="submit" value="<?php echo $this->_tpl_vars['left_login']; ?>
" size="4" class="sub_001" name="login">

 </td></tr>
 </table>

 </li>
 </ul>

 </div>

 </td></tr>
 
 </fieldset>
  
 </form>
 
 </table>