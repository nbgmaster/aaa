<?php /* Smarty version 2.6.18, created on 2012-07-05 15:56:40
         compiled from references/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'references/index.tpl', 13, false),array('function', 'math', 'references/index.tpl', 32, false),)), $this); ?>
<div class="ref">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">

  
	<tr>
		<td valign="top">
	
		<?php if ($this->_tpl_vars['total_n'] > 0): ?>
	
            	
              <table width="100%" height="172" class="ref_01" cellspacing="0" cellpadding="0">
          <tr>
           <?php echo smarty_function_counter(array('start' => 0,'assign' => 'count'), $this);?>
 
          	<?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ref'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ref']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ref']):
        $this->_foreach['ref']['iteration']++;
?>
          
          <td align="left" height="100%" width="25%" valign="bottom" >
          
              <table cellspacing="0" cellpadding="0" height="100%">

               <tr><td align="center" valign="bottom" style="padding-bottom:2px">
               <?php if ($this->_tpl_vars['ref']['url'] != ''): ?><a href="<?php echo $this->_tpl_vars['ref']['url']; ?>
" target="_blank"><?php endif; ?><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
references/<?php echo $this->_tpl_vars['ref']['ID']; ?>
.png" width="60"><?php if ($this->_tpl_vars['ref']['url'] != ''): ?></a><?php endif; ?>
               </td></tr>
                             <tr><td align="center" valign="top">
               <span style="color:#fff;font-size:<?php if ($this->_tpl_vars['ref']['smallsize'] == 1): ?>14<?php else: ?>14<?php endif; ?>px"><?php echo $this->_tpl_vars['ref']['company']; ?>
</span>
               </td></tr>
               </table>
          </td>
          
           <?php echo smarty_function_counter(array(), $this);?>


 <?php if ($this->_tpl_vars['count'] % 4 == 0 && $this->_tpl_vars['count'] != 0): ?>
 <?php echo smarty_function_math(array('assign' => 'entries_left','equation' => "a - b",'a' => $this->_tpl_vars['total_n'],'b' => $this->_tpl_vars['count']), $this);?>

 <?php if ($this->_tpl_vars['entries_left'] > 0): ?>

 </tr></table>
               <table width="100%" height="172" class="ref_02" cellspacing="0" cellpadding="0"><tr>
               <?php endif; ?>
               
      <?php endif; ?>
           	
          	<?php endforeach; endif; unset($_from); ?>

          </tr>
          </table>
          
          <?php endif; ?>


    </td>
	</tr>
	
</table>

</div>

     
<div class="ref_mobile">  
<table class="table_ref" height="100%" border="0" cellpadding="0" cellspacing="0">

	<tr>
		<td>
	
		<?php if ($this->_tpl_vars['total_n'] > 0): ?>
	         
            	
              <table width="100%" height="172" class="ref_01" cellspacing="0" cellpadding="0" style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
bg/bar_m.png') no-repeat">
          <tr>
           <?php echo smarty_function_counter(array('start' => 0,'assign' => 'count'), $this);?>
 
          	<?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ref'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ref']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ref']):
        $this->_foreach['ref']['iteration']++;
?>
          
          <td align="center" height="100%" width="25%">
          
              <table cellspacing="0" cellpadding="0" height="100%">

               <tr><td align="center" valign="bottom" style="padding-bottom:2px">
               <?php if ($this->_tpl_vars['ref']['url'] != ''): ?><a href="<?php echo $this->_tpl_vars['ref']['url']; ?>
" target="_blank"><?php endif; ?><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
references/<?php echo $this->_tpl_vars['ref']['ID']; ?>
.png" width="60"><?php if ($this->_tpl_vars['ref']['url'] != ''): ?></a><?php endif; ?>
               </td></tr>
                             <tr><td align="center" valign="top">
               <span style="color:#fff;font-weight:bold;font-size:<?php if ($this->_tpl_vars['ref']['smallsize'] == 1): ?>14<?php else: ?>14<?php endif; ?>px"><?php echo $this->_tpl_vars['ref']['company']; ?>
</span>
               </td></tr>
               </table>
          </td>
          
           <?php echo smarty_function_counter(array(), $this);?>


 <?php if ($this->_tpl_vars['count'] % 2 == 0 && $this->_tpl_vars['count'] != 0): ?>
 <?php echo smarty_function_math(array('assign' => 'entries_left','equation' => "a - b",'a' => $this->_tpl_vars['total_n'],'b' => $this->_tpl_vars['count']), $this);?>

 <?php if ($this->_tpl_vars['entries_left'] > 0): ?>
 </tr></table>
               <table width="100%" height="172" class="ref_02" cellspacing="0" cellpadding="0" style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
bg/bar_m.png') no-repeat"><tr>
               <?php endif; ?>
               
      <?php endif; ?>
           	
          	<?php endforeach; endif; unset($_from); ?>

          </tr>
          </table>
          
          <?php endif; ?>


    </td>
	</tr>
	
</table>

</div>

<div class="ref_mobile_l">
<table class="table_ref" height="100%" border="0" cellpadding="0" cellspacing="0">

	<tr>
		<td>
	
		<?php if ($this->_tpl_vars['total_n'] > 0): ?>
	
            	
         	
              <table width="100%" height="172" class="ref_01" cellspacing="0" cellpadding="0" style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
bg/bar_m_l.png') no-repeat">
          <tr>
           <?php echo smarty_function_counter(array('start' => 0,'assign' => 'count'), $this);?>
 
          	<?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ref'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ref']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ref']):
        $this->_foreach['ref']['iteration']++;
?>
          
          <td align="center" height="100%" width="25%">
          
              <table cellspacing="0" cellpadding="0" height="100%">

               <tr><td align="center" valign="bottom" style="padding-bottom:2px">
               <?php if ($this->_tpl_vars['ref']['url'] != ''): ?><a href="<?php echo $this->_tpl_vars['ref']['url']; ?>
" target="_blank"><?php endif; ?><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
references/<?php echo $this->_tpl_vars['ref']['ID']; ?>
.png" width="60"><?php if ($this->_tpl_vars['ref']['url'] != ''): ?></a><?php endif; ?>
               </td></tr>
                             <tr><td align="center" valign="top">
               <span style="color:#fff;font-weight:bold;font-size:<?php if ($this->_tpl_vars['ref']['smallsize'] == 1): ?>14<?php else: ?>14<?php endif; ?>px"><?php echo $this->_tpl_vars['ref']['company']; ?>
</span>
               </td></tr>
               </table>
          </td>
          
           <?php echo smarty_function_counter(array(), $this);?>


 <?php if ($this->_tpl_vars['count'] % 3 == 0 && $this->_tpl_vars['count'] != 0): ?>
 <?php echo smarty_function_math(array('assign' => 'entries_left','equation' => "a - b",'a' => $this->_tpl_vars['total_n'],'b' => $this->_tpl_vars['count']), $this);?>

 <?php if ($this->_tpl_vars['entries_left'] > 0): ?>
 </tr></table>
               <table width="100%" height="172" class="ref_02" cellspacing="0" cellpadding="0" style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
bg/bar_m_l.png') no-repeat"><tr>
               <?php endif; ?>
               
      <?php endif; ?>
           	
          	<?php endforeach; endif; unset($_from); ?>

          </tr>
          </table>
          
          
          <?php endif; ?>


    </td>
	</tr>
	
</table>

</div>