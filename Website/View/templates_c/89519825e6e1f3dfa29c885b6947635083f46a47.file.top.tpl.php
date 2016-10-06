<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 15:36:07
         compiled from "/var/www/activity/ProgramFiles/View/templates/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:549219405508a3d679790b2-20453154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89519825e6e1f3dfa29c885b6947635083f46a47' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/top.tpl',
      1 => 1351235628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549219405508a3d679790b2-20453154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'm_name' => 0,
    'site_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508a3d67988ba1_36257715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508a3d67988ba1_36257715')) {function content_508a3d67988ba1_36257715($_smarty_tpl) {?><div id="header">
   <div>創新創意中心</div>
   <div id="user_call">
 		<?php echo $_smarty_tpl->tpl_vars['m_name']->value;?>
&nbsp;&nbsp;歡迎您登入後台系統&nbsp; 
        &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
login_out.php">登出</a>
   </div>
</div><?php }} ?>