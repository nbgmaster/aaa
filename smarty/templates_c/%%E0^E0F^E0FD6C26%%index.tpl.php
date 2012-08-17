<?php /* Smarty version 2.6.18, created on 2012-07-05 14:54:18
         compiled from press/index.tpl */ ?>
<div class="press_1">

     <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['press'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['press']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['press']):
        $this->_foreach['press']['iteration']++;
?>
    
      <span class="blog_date_c" style="font-size:14px"><?php echo $this->_tpl_vars['press']['date_form']; ?>
 <?php echo $this->_tpl_vars['press']['source']; ?>
</span>

    <a href="<?php echo $this->_tpl_vars['press']['link']; ?>
" target="_blank">
    <p class="blog_list" style="padding-left:0"><b><?php echo $this->_tpl_vars['press']['title']; ?>
</b></p>
    </a>
    <p>&nbsp;</p>
   <?php echo $this->_tpl_vars['press']['text']; ?>
...
  <p></p> <a href="<?php echo $this->_tpl_vars['press']['link']; ?>
" target="_blank" style="font-size:14px;text-decoration:underline">read more</a>


<p>&nbsp;</p>

<?php endforeach; endif; unset($_from); ?>


</div>
<div class="press_2">

<p class="blog_list" style="padding-left:0"><b>Follow us on</b></p>
<p>&nbsp;</p>
<img src="<?php echo $this->_tpl_vars['dir_img']; ?>
facebook.png" width="24">
&nbsp;
<a href="https://twitter.com/#!/@itsallaboutapps" target="_blank"><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
twitter.png" width="24"></a>
 
<p>&nbsp;</p>
<p>&nbsp;</p>
 
<p class="blog_list" style="padding-left:0"><b>Media Contact</b></p>

<p>&nbsp;</p>
Bernhard Lehner
<p>&nbsp;</p>
<ul class="bb-list-unordered">
<li class="bb-listitem">b.lehner@i5invest.com</li>
<!--li class="bb-listitem"><a href="https://www.facebook.com/SocialBarni" target="_blank"><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
facebook.png" width="24"></a>&nbsp;&nbsp;&nbsp;<a href="http://twitter.com/#!/bernhardlehner" target="_blank"><img src="<?php echo $this->_tpl_vars['dir_img']; ?>
twitter.png" width="24"></a></li-->
<li class="bb-listitem">(+43) 0 644 439 86 09</li>
</ul>


</div>