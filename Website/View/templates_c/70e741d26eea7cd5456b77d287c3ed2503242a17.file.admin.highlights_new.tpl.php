<?php /* Smarty version Smarty-3.1.8, created on 2012-11-01 20:52:56
         compiled from "/var/www/activity/ProgramFiles/View/templates/admin.highlights_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1221612602508e232406eee0-61794017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e741d26eea7cd5456b77d287c3ed2503242a17' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/admin.highlights_new.tpl',
      1 => 1351774372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1221612602508e232406eee0-61794017',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508e232414e7a4_71294712',
  'variables' => 
  array (
    'site_root' => 0,
    'items' => 0,
    'k' => 0,
    'field' => 0,
    'rs' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e232414e7a4_71294712')) {function content_508e232414e7a4_71294712($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin.head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
    	<?php if ($_smarty_tpl->tpl_vars['rs']->value!=''){?>
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
            <div id="tabs-1">
                <form action="admin.highlights.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" method="post">
                    講座名稱:<input type="text" name="CONTENT_TITLE" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_TITLE'];?>
"/> <br/>
                    活動日期:<input type="text" name="CONTENT_DATE" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_DATE'];?>
" /> <br/>
                    活動時間:<input type="text" name="CONTENT_TIME" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_TIME'];?>
" /> <br/>
                    <input type="hidden" name="process" value="2" />
                    <input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_ID'];?>
" />
                    <textarea name="CONTENT_CONTENT" class="c_content1"><?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_CONTENT'];?>
</textarea>
                    <input type="submit" value="更新資料" />
                </form>    
            </div>
            <?php } ?>
        <?php }else{ ?>
        	<div id="tabs-1">
               <form action="admin.highlights.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" method="post">
                    講座名稱:<input type="text" name="CONTENT_TITLE" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_TITLE'];?>
"/> <br/>
                    活動日期:<input type="text" name="CONTENT_DATE" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_DATE'];?>
" /> <br/>
                    活動時間:<input type="text" name="CONTENT_TIME" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_TIME'];?>
" /> <br/>
                    <input type="hidden" name="process" value="1" />
                    <input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_ID'];?>
" />
                    <textarea name="CONTENT_CONTENT" class="c_content1"><?php echo $_smarty_tpl->tpl_vars['field']->value['CONTENT_CONTENT'];?>
</textarea>
                    <input type="submit" value="更新資料" />
                </form>     
            </div>
        <?php }?>

</div>
          </div>
	</div>	
	<?php echo $_smarty_tpl->getSubTemplate ("admin.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>