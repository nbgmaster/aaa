<?php /* Smarty version 2.6.18, created on 2012-07-03 13:13:47
         compiled from products/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'eval', 'products/details.tpl', 44, false),)), $this); ?>
  
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
js/jquery.carousel.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$("div.products").carousel();
		});
	</script>

    <p>&nbsp;</p>
    <div align="center">
    
    <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['products']):
        $this->_foreach['products']['iteration']++;
?>
    
    <table width="96%">
    
    <tr>
    
    <?php if ($this->_tpl_vars['products']['category'] != 'marketing'): ?>
    
    <td valign="top" align="center" class="td_004">
    <img src="<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/products/logos/<?php echo $this->_tpl_vars['products']['id_handler']; ?>
.png" class="icon_products">
    <p>&nbsp;</p>
    <div align="left" class="div_005">
    Betriebssystem: <?php echo $this->_tpl_vars['products']['OS']; ?>

    <p>&nbsp;</p>
    Preis: <?php echo $this->_tpl_vars['products']['price']; ?>

    <p>&nbsp;</p>
    </div>
    <a href="<?php echo $this->_tpl_vars['products']['external']; ?>
" target="itunes_store">
    <img src="http://r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" alt="Cost Control for Car2Go - all about apps" style="border: 0;" class="icon_products">
    </a>
    
    </td>
    
    <?php endif; ?>
    
    <td class="td_003">
    
    <!--span class="blog_title" align="left"><nobr><?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['products']['name_DE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['products']['name_EN']; ?>
<?php endif; ?></nobr></span>
    <p>&nbsp;</p-->
       
    <span class="blog_content"><?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo smarty_function_eval(array('var' => $this->_tpl_vars['products']['description_DE']), $this);?>
<?php else: ?><?php echo smarty_function_eval(array('var' => $this->_tpl_vars['products']['description_EN']), $this);?>
<?php endif; ?></span>
    <p>&nbsp;</p>
    
    </td></tr>
    <tr><td colspan="2" class="td_005">

    <?php if ($this->_tpl_vars['total_screens'] > 0): ?>  
<!--[if IE 6]><div id="IE6" class="IE"><![endif]--> <!--[if IE 7]><div id="IE7" class="IE"><![endif]--> <!--[if IE & ((!IE 6) & (!IE 7))]><div><![endif]--> <!--[if !IE]>--><div><!--<![endif]-->
	<div id="slider_container">

			<div class="box box-inner">
				<div class="box box-primary">

					<div class="carousel products"> 

						<ul>
						
            <?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['start'] = (int)1;
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['total_screens']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
if ($this->_sections['foo']['start'] < 0)
    $this->_sections['foo']['start'] = max($this->_sections['foo']['step'] > 0 ? 0 : -1, $this->_sections['foo']['loop'] + $this->_sections['foo']['start']);
else
    $this->_sections['foo']['start'] = min($this->_sections['foo']['start'], $this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] : $this->_sections['foo']['loop']-1);
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?> 
            	<li>
								<img src="<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/products/screenshots/<?php echo $this->_tpl_vars['products']['id_handler']; ?>
/screen_<?php echo $this->_sections['foo']['index']; ?>
.png" alt="" class="screenshots" />
							</li>

<?php endfor; endif; ?> 

						</ul>
					</div>
				</div>
				
			<?php endif; ?>

    </td>
    </tr>
    </table>
    <?php endforeach; endif; unset($_from); ?>
    
    <p>&nbsp;</p>
    
    </div>