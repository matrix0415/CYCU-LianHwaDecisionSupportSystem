<?php /* Smarty version Smarty-3.1.8, created on 2012-10-29 14:10:14
         compiled from "/var/www/activity/ProgramFiles/View/templates/admin.share_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1426660133508e1dc67582e6-61691899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c64c6c7b2c21af5c7bd6b6be076f8251f0cc121' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/admin.share_2.tpl',
      1 => 1351491002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426660133508e1dc67582e6-61691899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root' => 0,
    'items' => 0,
    'k' => 0,
    'field' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508e1dc68466b7_34796893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e1dc68466b7_34796893')) {function content_508e1dc68466b7_34796893($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
js/kads_things_ajax.js"></script>
<div id="wrap">
	<?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div id="contentwrap"> 
          <?php echo $_smarty_tpl->getSubTemplate ("left_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("content_title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("../library/ui.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("../library/ui_tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("../library/jquery_ckeditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<script language="javascript">
$(function(){
  /*tab*/
  $("#about_tabs").tabs();
  /*Ckeditor*/
  $('.c_content1').ckeditor(kads_config);
});
</script>
          <div id="content">

<div id="about_tabs">
	<ul>
    	<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        	<li><a href="#tabs-<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</a></li>
        <?php } ?>        
	</ul>
		
    	<div id="tabs-1">
        	<form action="admin.other.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" method="post">
            	標題名稱:<input type="text" name="CONTENT_TITLE" /> <br/>
                心得作者:<input type="text" name="" /> <br/>
                公佈日期:<input type="text" name="" /> <br/>
            	<input type="hidden" name="process" value="1" />
                <textarea name="CONTENT_CONTENT" class="c_content1"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</textarea>
                <input type="submit" value="更新資料" />
            </form>    
        </div>
        

</div>
          </div>
	</div>	
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>