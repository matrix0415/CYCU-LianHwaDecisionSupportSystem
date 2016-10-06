<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 18:34:20
         compiled from "/var/www/activity/ProgramFiles/View/templates/top_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1821953651508a3d6798c650-84391743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e13480cb958904393b376d1bb336308f5ee8cf' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/top_menu.tpl',
      1 => 1351246905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821953651508a3d6798c650-84391743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508a3d679d5a49_78215250',
  'variables' => 
  array (
    'top_menu' => 0,
    'site_root' => 0,
    'lid' => 0,
    'l_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508a3d679d5a49_78215250')) {function content_508a3d679d5a49_78215250($_smarty_tpl) {?><div id="menu">
    <ul>
    	<!--建構上方選單-->
        <?php  $_smarty_tpl->tpl_vars['l_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l_menu']->_loop = false;
 $_smarty_tpl->tpl_vars['lid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top_menu']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l_menu']->key => $_smarty_tpl->tpl_vars['l_menu']->value){
$_smarty_tpl->tpl_vars['l_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['lid']->value = $_smarty_tpl->tpl_vars['l_menu']->key;
?>
            <li style="background:url(<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['top_menu']->value[2][$_smarty_tpl->tpl_vars['lid']->value];?>
) no-repeat;">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['top_menu']->value[1][$_smarty_tpl->tpl_vars['lid']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['l_menu']->value;?>
</a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>