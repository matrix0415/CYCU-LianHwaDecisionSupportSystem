<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 17:30:00
         compiled from "/var/www/activity/ProgramFiles/View/templates/content_title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1069882472508a3d67aa51a8-96760030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f630d46ff8f6b13a415d922baaec7fa3e5c5d49' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/content_title.tpl',
      1 => 1351243797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069882472508a3d67aa51a8-96760030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508a3d67ab5280_70370689',
  'variables' => 
  array (
    'site_root' => 0,
    'left_menu_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508a3d67ab5280_70370689')) {function content_508a3d67ab5280_70370689($_smarty_tpl) {?><div id="content_title" style="background:url('<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
images/admin.title.jpg') no-repeat;">
	<?php echo $_smarty_tpl->tpl_vars['left_menu_title']->value;?>

</div>
<?php }} ?>