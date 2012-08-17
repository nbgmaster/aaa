<?php /* Smarty version 2.6.18, created on 2012-07-05 15:21:39
         compiled from blog/show.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'eval', 'blog/show.tpl', 62, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/lightbox.js" language="JavaScript1.2"></script>
<link href="<?php echo $this->_tpl_vars['root_dir']; ?>
media/css/lightbox.css" rel="stylesheet" type="text/css" media="all">
<script language="JavaScript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/toggle.js" type="text/JavaScript"></script>
<?php echo $this->_tpl_vars['xajax_javascript']; ?>

<?php if ($this->_tpl_vars['Myadmin'] == 1): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/edit_comment.js"></script><?php endif; ?>
        
<p>&nbsp;</p>

<table cellspacing="0" cellpadding="0" width="100%" class="table_001" style="margin-top:5px">

 <tr>
 
  <?php if ($this->_tpl_vars['array_p']): ?><td class="blog_msg"><?php else: ?><td class="msg"><?php endif; ?>
  
          
    <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['blog'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['blog']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['blog']):
        $this->_foreach['blog']['iteration']++;
?>

    <a name="b<?php echo $this->_tpl_vars['blog']['thisid']; ?>
"></a>
    <table cellspacing="0" cellpadding="8" width="98%" align="center">
      
      <tr>
    
       <td align="left">

         <table cellspacing="0" cellpadding="0" width="100%">
         <tr><td>            

         <?php if ($this->_tpl_vars['admin']): ?>
             
             &nbsp;
                 
             <a href="<?php echo $this->_tpl_vars['href_editblog']; ?>
<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" title="<?php echo $this->_tpl_vars['blog_edit']; ?>
"><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
edit.gif" border="0"></a>
    
                <?php if ($this->_tpl_vars['Myadmin'] == 1): ?>
                
                &nbsp;
            
                <form method="post" name="form_A" onsubmit="return confirm('<?php echo $this->_tpl_vars['confirm_delete']; ?>
')" style="display:inline">
         
                <input type="image" value="del" title="<?php echo $this->_tpl_vars['blog_del']; ?>
" src="<?php echo $this->_tpl_vars['dir_img']; ?>
delete.gif" name="submit_del" id="submit">
    
                <input type="hidden" name="nid" value="<?php echo $this->_tpl_vars['blog']['thisid']; ?>
">
                
                <input type="hidden" name="totalrows22" value="<?php echo $this->_tpl_vars['totalrows']; ?>
">
                    
                </form>
            
                <?php endif; ?>
                
             <?php if ($this->_tpl_vars['blog']['visibility'] == 0 || $this->_tpl_vars['blog']['too_early']): ?></td><td align="right"><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
invisible.gif" title="<?php echo $this->_tpl_vars['bid_invisible']; ?>
"><?php endif; ?>
     
         <?php endif; ?>
         
         </td>
         </tr></table>

         <span class="blog_date_c" style="font-size:14px;line-height:14px"><?php echo $this->_tpl_vars['blog']['date_formatted']; ?>
</span>
         <p class="blog_title"><?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['blog']['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['blog']['title_EN']; ?>
<?php endif; ?></p>    
         <p>&nbsp;</p>
        
         <span class="blog_content"><?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo smarty_function_eval(array('var' => $this->_tpl_vars['blog']['message']), $this);?>
<?php else: ?><?php echo smarty_function_eval(array('var' => $this->_tpl_vars['blog']['message_EN']), $this);?>
<?php endif; ?></span>
                           
         <?php if ($this->_tpl_vars['blog']['attachment']): ?>   

         <p>&nbsp;</p>
                       
           <table cellspacing="0" cellpadding="0" width="100%">
                      
           <tr>
    
             <td valign="top" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "blog/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td> 
            
           </tr>
           
           </table>
         
         <?php endif; ?>   

         <?php if ($this->_tpl_vars['blog']['comments'] == 1): ?>
                 
         <p>&nbsp;</p>   
         <p id="testing">
        
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "blog/comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                         </p>
                         
         <?php endif; ?>
             
       </td>
    
      </tr>
    
    </table>
    
    <?php if (! ($this->_foreach['blog']['iteration'] == $this->_foreach['blog']['total'])): ?><hr class="hr_001" size="1"><?php endif; ?>
    
    <?php endforeach; endif; unset($_from); ?>
    
   </td>

  </tr>

</table>

<p>&nbsp;</p>