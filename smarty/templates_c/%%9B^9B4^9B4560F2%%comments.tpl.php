<?php /* Smarty version 2.6.18, created on 2012-06-18 12:47:59
         compiled from blog/comments.tpl */ ?>
<table cellspacing="0" cellpadding="0" width="100%">

<tr>
          
<td valign="top" width="50%">

    <a name="cc<?php echo $this->_tpl_vars['blog']['thisid']; ?>
"></a>
                   
    <!--table cellspacing="0" cellpadding="0">
  
     <tr>
  
      <td>  
  
      <?php if ($this->_tpl_vars['blog']['comments_total'] > 0): ?><a href="javascript:ToggleCommentsS(<?php echo $this->_tpl_vars['blog']['thisid']; ?>
)"><?php endif; ?>
  
      <img title="<?php if ($this->_tpl_vars['blog']['comments_total'] > 0): ?><?php echo $this->_tpl_vars['blog']['toggleS_title']; ?>
<?php endif; ?>" id="TImgCommentS_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" src="<?php echo $this->_tpl_vars['dir_img']; ?>
<?php echo $this->_tpl_vars['blog']['toggleS_img']; ?>
.gif" border="0">
      
      <?php if ($this->_tpl_vars['blog']['comments_total'] > 0): ?></a><?php endif; ?>
   
      </td>
  
      <td class="toggle">
  
      <?php if ($this->_tpl_vars['blog']['comments_total'] > 0): ?><a href="javascript:ToggleCommentsS(<?php echo $this->_tpl_vars['blog']['thisid']; ?>
)"><?php endif; ?>
  
      <span class="span_101"><?php echo $this->_tpl_vars['commentsS_title']; ?>
 (<p id="p_num_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" class="inline"><?php echo $this->_tpl_vars['blog']['comments_total']; ?>
</p>)</span>
  
      <?php if ($this->_tpl_vars['blog']['comments_total'] > 0): ?></a><?php endif; ?>
  
      </td>
  
     </tr>
  
    </table-->
          
</td> 
          
<td align="right" valign="top" width="50%">
                  
    <table cellspacing="0" cellpadding="0">
  
     <tr>
  
      <td><?php echo $this->_tpl_vars['toogle_collapseD']; ?>

  
      <a href="javascript:ToggleCommentsW(<?php echo $this->_tpl_vars['blog']['thisid']; ?>
)">
  
      <img title="<?php if ($this->_tpl_vars['error_id'] == $this->_tpl_vars['blog']['thisid']): ?><?php echo $this->_tpl_vars['toogle_collapseD']; ?>
<?php else: ?><?php echo $this->_tpl_vars['toggle_expandD']; ?>
<?php endif; ?>" id="TImgCommentW_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" src="<?php echo $this->_tpl_vars['dir_img']; ?>
<?php if ($this->_tpl_vars['error_id'] == $this->_tpl_vars['blog']['thisid']): ?>collapse<?php else: ?>expand<?php endif; ?>.gif" border="0"></a>
   
      </td>
  
      <td class="toggle">
  
      <a href="javascript:ToggleCommentsW(<?php echo $this->_tpl_vars['blog']['thisid']; ?>
)">
  
      <span class="span_101"><?php echo $this->_tpl_vars['commentsW_title']; ?>
</span>
  
      </a>
  
      </td>
  
     </tr>
  
    </table>
            
</td>

</tr>
            
</table>

    
        <div id="commentW_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" style="<?php if ($this->_tpl_vars['error_id'] != $this->_tpl_vars['blog']['thisid']): ?>display:none<?php endif; ?>">
  
        <table cellspacing="0" cellpadding="6" width="100%">
      
         <tr>
    
          <td align="left">

          <?php if ($this->_tpl_vars['blog']['spamban'] == '0'): ?>
      
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "formular/form_comment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          
          <?php else: ?>
            <p>&nbsp;</p>
            <span class="span_101"><?php echo $this->_tpl_vars['spam_01']; ?>
</span>
            <p></p>
            <span class="span_102"><?php echo $this->_tpl_vars['spam_02']; ?>
</span>
            <p>&nbsp;</p>
          <?php endif; ?>
      
          </td>
      
         </tr>
      
        </table>
  
    </div>
         
    <div id="commentS_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" style="display:<?php echo $this->_tpl_vars['blog']['toggleS_style']; ?>
">
    
        <a name="c<?php echo $this->_tpl_vars['blog']['thisid']; ?>
"></a>
        
        <?php if ($this->_tpl_vars['blog']['comments_total'] > $this->_tpl_vars['com_perpage']): ?>
        
            <p id="p_page_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
">
   
                       <?php $_from = $this->_tpl_vars['array_pages_c']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['array_pages_c'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['array_pages_c']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['inner_pages']):
        $this->_foreach['array_pages_c']['iteration']++;
?>
                
                    <?php $_from = $this->_tpl_vars['inner_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pagekey'] => $this->_tpl_vars['valuep']):
?>
                    
                        <?php if ($this->_tpl_vars['stopthis'] == 1): ?>
                            <?php $this->assign('pages_c', $this->_tpl_vars['valuep']); ?>
                            
                            <nobr><p id="p_cpages_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" class="p_002">
                            
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagenavi_ajax.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                            </p></nobr>
                      
                            <?php $this->assign('stopthis', '0'); ?>  
                            <?php break; ?>
                        <?php endif; ?>
                             
                        <?php if ($this->_tpl_vars['pagekey'] == 'bid' && $this->_tpl_vars['valuep'] == $this->_tpl_vars['blog']['thisid']): ?>
                            <?php $this->assign('stopthis', '1'); ?>
                        <?php endif; ?>
                        
                    <?php endforeach; endif; unset($_from); ?>
                      
                <?php endforeach; endif; unset($_from); ?>
                
            </p>

        <?php else: ?><!--p>&nbsp;</p--><?php endif; ?>
        
        <table cellspacing="0" cellpadding="0" width="100%" align="center">
      
         <tr>
      
          <td align="center">
    
           <p id="p_comments_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" class="p_002">
              <!--nobr-->
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "blog/comments_show.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <!--/nobr-->
           </p>

          </td>
      
         </tr>
      
        </table>

        <?php if ($this->_tpl_vars['blog']['comments_total'] > $this->_tpl_vars['com_perpage']): ?>
        
            <p id="p_page2_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
">
        
            <?php $_from = $this->_tpl_vars['array_pages_c']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['array_pages_c'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['array_pages_c']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['inner_pages']):
        $this->_foreach['array_pages_c']['iteration']++;
?>
                
                    <?php $_from = $this->_tpl_vars['inner_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pagekey'] => $this->_tpl_vars['valuep']):
?>
                    
                        <?php if ($this->_tpl_vars['stopthis'] == 1): ?>
                            <?php $this->assign('pages_c', $this->_tpl_vars['valuep']); ?>
                            
                            <p id="p_cpages2_<?php echo $this->_tpl_vars['blog']['thisid']; ?>
" class="p_002">
            
                            <nobr> 
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagenavi_ajax.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            </nobr>
            
                            </p>
                            
                            <?php $this->assign('stopthis', '0'); ?>  
                            <?php break; ?>
                        <?php endif; ?>
                             
                        <?php if ($this->_tpl_vars['pagekey'] == 'bid' && $this->_tpl_vars['valuep'] == $this->_tpl_vars['blog']['thisid']): ?>
                            <?php $this->assign('stopthis', '1'); ?>
                        <?php endif; ?>
                        
                    <?php endforeach; endif; unset($_from); ?>
                      
            <?php endforeach; endif; unset($_from); ?>
            
            </p>

        <?php endif; ?>
                
    </div>
    
    <div style="height:200px">

    </div>
    