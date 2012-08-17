<?php /* Smarty version 2.6.18, created on 2012-07-03 19:40:59
         compiled from titlebar.tpl */ ?>
  
           
    <?php if ($this->_tpl_vars['module'] != '' && $this->_tpl_vars['module'] != 'references'): ?>
     
        <table class="nav_01" height="44" border="0" cellpadding="0" cellspacing="0">
      	<tr>                                      

      		<td class="heading_back_ini" height="44" align="center"> 


          <a href="#"  onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
<?php if ($this->_tpl_vars['module'] == 'blog' && $this->_tpl_vars['bid'] != ""): ?>blog/<?php elseif ($this->_tpl_vars['module'] == 'services' && $this->_tpl_vars['sid'] != ''): ?><?php endif; ?>'" class="header_nav_button">
              
              <?php if ($this->_tpl_vars['module'] == 'blog' && $this->_tpl_vars['bid'] != ''): ?>
              <span class="heading_fix"><?php echo $this->_tpl_vars['titlebar_overview']; ?>
</span>
              <?php else: ?><span class="heading_fix2"><?php echo $this->_tpl_vars['titlebar_home']; ?>
</span><?php endif; ?>
          
          </a>
          
          </td>
          <td style="background:url('<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/gfx/headerbg_01c.png') repeat-x" align="center" class="heading_back_2">&nbsp;
      		
          </td>
          
      		<td style="background:url('<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/gfx/headerbg_02.png') repeat-x" class="nav_02" height="44" align="center">
          <span class="header_nav_title">
          <?php if ($this->_tpl_vars['module'] == 'blog'): ?><?php echo $this->_tpl_vars['titlebar_blog']; ?>

          <?php elseif ($this->_tpl_vars['module'] == 'admin'): ?><?php echo $this->_tpl_vars['titlebar_admin']; ?>

          <?php elseif ($this->_tpl_vars['module'] == 'products'): ?> 
            <?php if ($this->_tpl_vars['pid'] == 'app_check'): ?>AppCheck<?php endif; ?>
            <?php if ($this->_tpl_vars['pid'] == 'app_optimization'): ?><?php if ($this->_tpl_vars['lang'] == 'german'): ?>App&nbsp;Store&nbsp;Optimierung<?php else: ?>App&nbsp;Store&nbsp;Optimization<?php endif; ?><?php endif; ?>
            <?php if ($this->_tpl_vars['pid'] == 'app_campaign'): ?><?php if ($this->_tpl_vars['lang'] == 'german'): ?>App Kampagne<?php else: ?>Campaigning<?php endif; ?><?php endif; ?>
            <?php if ($this->_tpl_vars['pid'] == 'app_banner'): ?>AppBanner<?php endif; ?>
          <?php elseif ($this->_tpl_vars['module'] == 'services'): ?>          <?php if ($this->_tpl_vars['sid'] == 'consulting'): ?>Consulting<?php endif; ?>
          <?php if ($this->_tpl_vars['sid'] == 'development'): ?>Development<?php endif; ?>
          <?php if ($this->_tpl_vars['sid'] == 'publishing'): ?>Publishing<?php endif; ?>
          <?php if ($this->_tpl_vars['sid'] == 'monitoring'): ?>Monitoring<?php endif; ?>
          <?php if ($this->_tpl_vars['sid'] == 'marketing'): ?>Marketing<?php endif; ?>
          <?php elseif ($this->_tpl_vars['module'] == 'team'): ?>Team
          <?php elseif ($this->_tpl_vars['module'] == 'cms' && $this->_tpl_vars['cat'] == 'imprint'): ?>
            <?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['block']['imprint']['title_DE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['block']['imprint']['title_EN']; ?>

            <?php endif; ?>
                      <?php elseif ($this->_tpl_vars['module'] == 'press'): ?>
            <?php if ($this->_tpl_vars['lang'] == 'german'): ?><?php echo $this->_tpl_vars['block']['press']['title_DE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['block']['press']['title_EN']; ?>

            <?php endif; ?>              
          <?php else: ?><?php endif; ?>
          </span></td>
      		<td style="background:url('<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/gfx/headerbg_03.png')" width="95" height="44" align="center">
          </td>
      		<td style="background:url('<?php echo $this->_tpl_vars['root_dir']; ?>
media/images/gfx/headerbg_04.png')" width="28" height="44"></td>
      	</tr>
      </table>
    

     <?php elseif ($this->_tpl_vars['module'] == 'references'): ?>
          
     
           <div class="ref_navi">
         
     <table width="100%" height="44" border="0" cellpadding="0" cellspacing="0" class="table_ref_t">
	<tr>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_01.png')" width="125" height="44" align="center">
    <a href="#" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
'" class="header_nav_button">
    <span><?php echo $this->_tpl_vars['titlebar_home']; ?>
</span>
    </a>
    </td>
		<td class="ref_navi_02" height="44">&nbsp;</td>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_b_03<?php if ($this->_tpl_vars['cat'] == 'iPhone' || $this->_tpl_vars['cat'] == ""): ?>_h<?php endif; ?>.png')" width="78" height="44" align="center"><a href="#" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
references/iPhone/'"><span style="color:#fff;font-size:14px;">iPhone</span></a></td>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_b_04<?php if ($this->_tpl_vars['cat'] == 'iPad'): ?>_h<?php endif; ?>.png')" width="72" height="44" align="center"><a href="#"  onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
references/iPad/'"><span style="color:#fff;font-size:14px;">Tablets</span></a></td>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_b_05<?php if ($this->_tpl_vars['cat'] == 'android'): ?>_h<?php endif; ?>.png')" width="84" height="44" align="center"><a href="#" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
references/android/'"><span style="color:#fff;font-size:14px;">Android</span></a></td>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_b_06<?php if ($this->_tpl_vars['cat'] == 'services'): ?>_h<?php endif; ?>.png')" width="207" height="44" align="center"><a href="#" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
references/services/'"><span style="color:#fff;font-size:14px;">Marketing & Consulting</span></a></td>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_b_07.png')" width="1" height="44"></td>
	</tr>
</table>
     
     </div>
     
  <div class="ref_navi_mobile">
         
     <table class="table_ref_navi" height="44" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_b_01_m.png') no-repeat;width:100px" height="44" align="center">
    <a href="#" onclick="parent.location='<?php echo $this->_tpl_vars['root_dir']; ?>
'" class="header_nav_button">
    <span><?php echo $this->_tpl_vars['titlebar_home']; ?>
</span>
    </a>
    </td>
		<td class="ref_navi_02" height="44">&nbsp;</td>
		<td style="background:url('<?php echo $this->_tpl_vars['dir_img']; ?>
gfx/bookshelf_top_b_06_m.png') no-repeat;width:175px" height="44" align="center">
		<select ONCHANGE="location = this.options[this.selectedIndex].value;">
		<option value="<?php echo $this->_tpl_vars['root_dir']; ?>
references/iPhone/" <?php if ($this->_tpl_vars['cat'] == '' || $this->_tpl_vars['cat'] == 'iPhone'): ?>selected="selected"<?php endif; ?>>iPhone</option>
		<option value="<?php echo $this->_tpl_vars['root_dir']; ?>
references/iPad/" <?php if ($this->_tpl_vars['cat'] == 'iPad'): ?>selected="selected"<?php endif; ?>>Tablets</option>
		<option value="<?php echo $this->_tpl_vars['root_dir']; ?>
references/android/" <?php if ($this->_tpl_vars['cat'] == 'android'): ?>selected="selected"<?php endif; ?>>Android</option>
		<option value="<?php echo $this->_tpl_vars['root_dir']; ?>
references/services/" <?php if ($this->_tpl_vars['cat'] == 'services'): ?>selected="selected"<?php endif; ?>>Services</option>
		</select>
								
		</td>
	</tr>
</table>    
     
     </div>
          
     <?php endif; ?>
    
    
    