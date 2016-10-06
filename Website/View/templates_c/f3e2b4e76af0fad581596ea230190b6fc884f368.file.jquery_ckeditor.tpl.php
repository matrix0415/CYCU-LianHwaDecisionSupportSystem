<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 16:26:48
         compiled from "/var/www/activity/ProgramFiles/View/library/jquery_ckeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1727160457508a4639898916-23738193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e2b4e76af0fad581596ea230190b6fc884f368' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/library/jquery_ckeditor.tpl',
      1 => 1351239981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1727160457508a4639898916-23738193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508a46398b1db5_33412825',
  'variables' => 
  array (
    'site_root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508a46398b1db5_33412825')) {function content_508a46398b1db5_33412825($_smarty_tpl) {?><!--Ckeditor-->
<!--
使用方法
$(function(){
	$('.post_content').ckeditor(kads_config);
});
-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
ckeditor/ckeditor.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
ckeditor/adapters/jquery.js"></script>
<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
ckeditor/ckeditor_toolbar.js"></script><?php }} ?>