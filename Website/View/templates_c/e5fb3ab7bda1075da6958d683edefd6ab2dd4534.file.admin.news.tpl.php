<?php /* Smarty version Smarty-3.1.8, created on 2012-11-01 21:11:18
         compiled from "/var/www/activity/ProgramFiles/View/templates/admin.news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292846273508dc6107125f1-32588757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5fb3ab7bda1075da6958d683edefd6ab2dd4534' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/admin.news.tpl',
      1 => 1351775307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292846273508dc6107125f1-32588757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508dc610803827_88402232',
  'variables' => 
  array (
    'site_root' => 0,
    'link' => 0,
    'field_title' => 0,
    'title' => 0,
    'rs' => 0,
    'field' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508dc610803827_88402232')) {function content_508dc610803827_88402232($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin.head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
     		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_TITLE'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_DATE'];?>
</td>
                    <td></td>
                    <td><input type="button" value="修改" onclick="location.href='admin.news_new.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_ID'];?>
'"></td>
                    <td><input type="button" value="刪除" onclick="location.href='admin.news_new.php?process=3&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_ID'];?>
'"></td>
                </tr>
           <?php } ?>
    </tbody>
</table>
          </div>
	</div>	
	<?php echo $_smarty_tpl->getSubTemplate ("admin.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>