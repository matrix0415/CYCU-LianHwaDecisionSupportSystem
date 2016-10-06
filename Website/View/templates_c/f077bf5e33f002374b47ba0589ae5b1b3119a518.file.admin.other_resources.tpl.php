<?php /* Smarty version Smarty-3.1.8, created on 2012-10-29 22:39:21
         compiled from "/var/www/activity/ProgramFiles/View/templates/admin.other_resources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:549827912508dcfd8277a86-99074559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f077bf5e33f002374b47ba0589ae5b1b3119a518' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/admin.other_resources.tpl',
      1 => 1351521320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549827912508dcfd8277a86-99074559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508dcfd8535275_90909178',
  'variables' => 
  array (
    'site_root' => 0,
    'link' => 0,
    'field_title' => 0,
    'title' => 0,
    'rs' => 0,
    'm_type_id' => 0,
    'update_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508dcfd8535275_90909178')) {function content_508dcfd8535275_90909178($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/activity/ProgramFiles/View/smarty/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin.head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("jquery_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
js/kads_things_ajax.js"></script>
<div id="wrap">
		<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div id="contentwrap"> 
          <?php echo $_smarty_tpl->getSubTemplate ("left_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("content_title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <div id="content">
<table id="plugin_table" class="display fix_tab">
    <thead>
    	<tr>
        	<td colspan="8">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
">
            		<img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/icon/action_add.png"/>新增
                </a>
            </td>
        </tr>
        <tr>
            <!--title names-->
            <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_title']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value){
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['title']->key;
?>	
				<th><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</th>
            <?php } ?>

        </tr>
    </thead>
    <tbody>
       <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tool'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tool']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['name'] = 'tool';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tool']['total']);
?> 
       		<tr>
            	<td><?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_date'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['type_number']==112){?>
                    	系辦公告
                    <?php }elseif($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['type_number']==113){?>
                    	系學會公告
                    <?php }elseif($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['type_number']==30){?>
                    	招生資訊
                    <?php }elseif($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['type_number']==15){?>
                    	活動花絮    
                    <?php }elseif($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['type_number']==13){?>
                    	相關連結    
                    <?php }?>
                </td>
                <td>
                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_title'],15);?>
<a href="news_view.php?c_id=<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
"></a></td>
                <td>
                	<?php if ($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_status']==1){?>
                    <a href="#" onclick="ajax_process('<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
index_manage/index_news_process.php','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_status'];?>
','','B')">
                		<img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/icon/action_check.png"/>
                    </a>
                    <?php }elseif($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_status']!=1){?> 
                    <a href="#" onclick="ajax_process('<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
index_manage/index_news_process.php','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_status'];?>
','','B')">
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/icon/action_delete.png"/>
                    </a>
                    <?php }?>
                </td>
                <td>
                	<!--主任審核-->
                	<?php if ($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_max_status']==1){?>
                    	<?php if ($_smarty_tpl->tpl_vars['m_type_id']->value=='A'||$_smarty_tpl->tpl_vars['m_type_id']->value=='H'){?>
                        <a href="#" onclick="ajax_process('<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
index_manage/index_news_process.php','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_max_status'];?>
','','A')">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/icon/action_check.png"/>
                        </a>
                    	<?php }else{ ?>
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/icon/action_check.png"/>
                        <?php }?>
                    <?php }elseif($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_max_status']!=1){?>
                    	<?php if ($_smarty_tpl->tpl_vars['m_type_id']->value=='A'||$_smarty_tpl->tpl_vars['m_type_id']->value=='H'){?>
                        <a href="#" onclick="ajax_process('<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
index_manage/index_news_process.php','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_max_status'];?>
','','A')">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/icon/action_delete.png"/>
                        </a>
                    	<?php }else{ ?>
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/icon/action_delete.png"/>
                        <?php }?>
                    <?php }?>
                </td>
                <td><input type="button" value="修改" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['update_page']->value;?>
?c_id=<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
&process=2&type_number=<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['type_number'];?>
'"/>
                </td>
                <td>
                	<?php if ($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_status']!=2){?>
                    	<input type="button" onclick="ajax_process('<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
index_manage/index_news_process.php','<?php echo $_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_id'];?>
','6')" value="刪除"/>
                	<?php }elseif($_smarty_tpl->tpl_vars['rs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tool']['index']]['c_status']==2){?>
                    	<input type="button" value="已刪除"/>
                    <?php }?>
                </td>
            </tr>
            </tr>
       <?php endfor; endif; ?>
    </tbody>
</table>
          </div>
	</div>	
	<?php echo $_smarty_tpl->getSubTemplate ("admin.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>