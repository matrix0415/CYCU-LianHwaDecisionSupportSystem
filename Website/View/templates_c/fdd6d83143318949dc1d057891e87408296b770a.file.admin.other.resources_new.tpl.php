<?php /* Smarty version Smarty-3.1.8, created on 2012-10-29 08:48:44
         compiled from "/var/www/activity/ProgramFiles/View/templates/admin.other.resources_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250723574508dd1039828a5-86197168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd6d83143318949dc1d057891e87408296b770a' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/admin.other.resources_new.tpl',
      1 => 1351471715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250723574508dd1039828a5-86197168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508dd103a43b95_37484374',
  'variables' => 
  array (
    'site_root' => 0,
    'type' => 0,
    'title_field' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508dd103a43b95_37484374')) {function content_508dd103a43b95_37484374($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
          	 <form action="admin.other.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" method="post">
                <table id="plugin_table" class="display fix_tab">       
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['title_field']->value;?>
:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>    
                    <tr>
                        <td>連結:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>    
                    <tr>
                        <td>公布日期:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>                        
                    <tr>
                    	<td colspan="2"><input type="submit" value="送出" /></td>
                    </tr>
               </table>
             </form>  
          </div>
	</div>	
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>