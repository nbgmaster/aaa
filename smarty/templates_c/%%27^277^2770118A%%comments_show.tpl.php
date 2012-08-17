<?php /* Smarty version 2.6.18, created on 2012-06-18 12:47:59
         compiled from blog/comments_show.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'blog/comments_show.tpl', 3, false),)), $this); ?>

<?php $_from = $this->_tpl_vars['array_com']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['array_com'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['array_com']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['inner_com']):
        $this->_foreach['array_com']['iteration']++;
?>
 <?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => 0), $this);?>
 

   <?php $_from = $this->_tpl_vars['inner_com']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['valuec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['valuec']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['comkey'] => $this->_tpl_vars['valuec']):
        $this->_foreach['valuec']['iteration']++;
?>
      
        <?php if ($this->_tpl_vars['valuec']['bid'] == $this->_tpl_vars['blog']['thisid'] || $this->_tpl_vars['valuec']['bid'] == $this->_tpl_vars['xajax_bid']): ?>

          <table cellpadding="1" class="table_010" width="100%" <?php if ($this->_tpl_vars['browser'] != 'IE' && ! ($this->_foreach['valuec']['iteration'] == $this->_foreach['valuec']['total']) || $this->_tpl_vars['browser'] == 'IE'): ?>style="margin-bottom:12px"<?php endif; ?>>
           <tr>
            <!--td class="img_com"><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
comment.gif"></td-->
            <td class="blog_title_c">
            <b><?php echo $this->_tpl_vars['valuec']['name']; ?>
 </b>
            </td>
            <td align="right" class="blog_date_c"><?php echo $this->_tpl_vars['valuec']['time']; ?>
</td>
          </tr><tr>
            <!--td valign="top" align="center" class="comments_nr">            <?php $this->assign('iSum', $this->_tpl_vars['blog']['comments_total']-$this->_tpl_vars['counter']++); ?>  #<?php echo $this->_tpl_vars['iSum']; ?>

            </td-->
            <td colspan="2" valign="top" class="blog_comment">
            <?php if ($this->_tpl_vars['Myadmin'] == 1): ?>
                <table width="100%" cellspacing="0" cellpadding="0"><tr>
                <td class="blog_comment" valign="top"><?php echo $this->_tpl_vars['valuec']['comment']; ?>
</td>
                <td align="right" width="24" valign="bottom">
                
                <?php if ($this->_tpl_vars['blog']): ?>
                   <?php $this->assign('blog_id', $this->_tpl_vars['blog']['thisid']); ?>
                   <?php $this->assign('com_total', $this->_tpl_vars['blog']['comments_total']); ?>
                   <?php $this->assign('page_id', '1'); ?>
                <?php endif; ?>
                      
                <a onclick="edit_comment('commentE_<?php echo $this->_tpl_vars['valuec']['id']; ?>
')" class="pagenavi" title="<?php echo $this->_tpl_vars['title_edit_com']; ?>
" style="cursor:pointer">
                <img src="<?php echo $this->_tpl_vars['dir_img']; ?>
edit.gif">
                </a>
                <p>&nbsp;</p>
                <a onclick="if(confirm('<?php echo $this->_tpl_vars['confirm_delete']; ?>
')) xajax_delete('blog_comments', '<?php echo $this->_tpl_vars['blog_id']; ?>
', '<?php echo $this->_tpl_vars['valuec']['id']; ?>
', '<?php echo $this->_tpl_vars['page_id']; ?>
', '<?php echo $this->_tpl_vars['com_total']; ?>
')" class="pagenavi" title="<?php echo $this->_tpl_vars['title_del_com']; ?>
" style="cursor:pointer">
                <img src="<?php echo $this->_tpl_vars['dir_img']; ?>
delete.gif">
                </a>
                </td></tr></table>
            <?php else: ?>
                <?php echo $this->_tpl_vars['valuec']['comment']; ?>

            <?php endif; ?>
                                 
            <?php if ($this->_tpl_vars['Myadmin'] == 1): ?>
 
                <div id="commentE_<?php echo $this->_tpl_vars['valuec']['id']; ?>
" style="display:none;">
   
                    <table cellspacing="0" cellpadding="0" width="100%">
                  
                     <tr>
                
                      <td align="left">

                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "formular/form_comment_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  
                      </td>
                  
                     </tr>
                  
                    </table>
                    
                </div>
            
            <?php endif; ?>
            
            </td>
          </tr>
        </table>
                 
        <?php endif; ?>
        
    <?php endforeach; endif; unset($_from); ?>

<?php endforeach; endif; unset($_from); ?>