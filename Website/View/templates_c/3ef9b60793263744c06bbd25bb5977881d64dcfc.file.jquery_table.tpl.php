<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 17:53:57
         compiled from "/var/www/activity/ProgramFiles/View/templates/jquery_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1451473862508a5db59b2149-08088246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ef9b60793263744c06bbd25bb5977881d64dcfc' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/jquery_table.tpl',
      1 => 1351235627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451473862508a5db59b2149-08088246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508a5db59cc5f5_14622273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508a5db59cc5f5_14622273')) {function content_508a5db59cc5f5_14622273($_smarty_tpl) {?><!--jQuery Table-->
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
jquery_plugin/jquery_table/css/demo_page.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
jquery_plugin/jquery_table/css/demo_table.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
jquery_plugin/jquery_table/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#plugin_table').dataTable({
		"sPaginationType":"full_numbers"
	});
});
</script><?php }} ?>