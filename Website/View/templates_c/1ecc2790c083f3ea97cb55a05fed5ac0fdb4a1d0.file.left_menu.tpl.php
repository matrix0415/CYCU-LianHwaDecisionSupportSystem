<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 17:23:09
         compiled from "/var/www/activity/ProgramFiles/View/templates/left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1460255207508a3d679d9c89-29700777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ecc2790c083f3ea97cb55a05fed5ac0fdb4a1d0' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/left_menu.tpl',
      1 => 1351243385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1460255207508a3d679d9c89-29700777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508a3d67a9fa69_29831002',
  'variables' => 
  array (
    'left_title' => 0,
    'left_menu' => 0,
    'lid' => 0,
    'd_menu' => 0,
    'level1' => 0,
    'de_menu' => 0,
    'deid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508a3d67a9fa69_29831002')) {function content_508a3d67a9fa69_29831002($_smarty_tpl) {?><script language="javascript">
$(function(){
	$('#sidebar ul li div').hide();
	$('#sidebar ul li').find('a').css({
			'font-size':'14px',
			'color':'#666'
	});
	
	$('#sidebar ul li').hover(function(){
		$(this).find('div').fadeIn('slow');
		
	},function(){
		$(this).find('div').fadeOut('slow');
	});
});
</script>

<div id="sidebar">
    <h3><?php echo $_smarty_tpl->tpl_vars['left_title']->value;?>
</h3>
    <ul>
       <?php  $_smarty_tpl->tpl_vars['l_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l_menu']->_loop = false;
 $_smarty_tpl->tpl_vars['lid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['left_menu']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l_menu']->key => $_smarty_tpl->tpl_vars['l_menu']->value){
$_smarty_tpl->tpl_vars['l_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['lid']->value = $_smarty_tpl->tpl_vars['l_menu']->key;
?> 

            <?php  $_smarty_tpl->tpl_vars['d_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d_menu']->_loop = false;
 $_smarty_tpl->tpl_vars['did'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['left_menu']->value[0][$_smarty_tpl->tpl_vars['lid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d_menu']->key => $_smarty_tpl->tpl_vars['d_menu']->value){
$_smarty_tpl->tpl_vars['d_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['did']->value = $_smarty_tpl->tpl_vars['d_menu']->key;
?>
                <?php $_smarty_tpl->tpl_vars['level1'] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['d_menu']->value), null, 0);?>
                 <?php if ($_smarty_tpl->tpl_vars['level1']->value!=''){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['level1']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['level1']->value[0];?>
</a>
                 <?php }elseif($_smarty_tpl->tpl_vars['level1']->value==''){?>
                 	<!--第二層選單-->
                 	<div id="option_l2">
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['de_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['de_menu']->_loop = false;
 $_smarty_tpl->tpl_vars['deid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['de_menu']->key => $_smarty_tpl->tpl_vars['de_menu']->value){
$_smarty_tpl->tpl_vars['de_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['deid']->value = $_smarty_tpl->tpl_vars['de_menu']->key;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['de_menu']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['deid']->value;?>
</a></li>
                         <?php } ?>
                        </ul>
                    </div>
                    </li>
                 <?php }?>
            <?php } ?>
       <?php } ?>
    </ul>
</div>
<?php }} ?>