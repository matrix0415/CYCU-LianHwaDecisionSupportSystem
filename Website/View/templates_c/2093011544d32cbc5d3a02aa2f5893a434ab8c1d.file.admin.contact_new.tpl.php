<?php /* Smarty version Smarty-3.1.8, created on 2012-10-29 08:22:45
         compiled from "/var/www/activity/ProgramFiles/View/templates/admin.contact_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:768323766508dcc42f0fb50-27595405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2093011544d32cbc5d3a02aa2f5893a434ab8c1d' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/admin.contact_new.tpl',
      1 => 1351470163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '768323766508dcc42f0fb50-27595405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508dcc4308fc29_65374636',
  'variables' => 
  array (
    'site_root' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508dcc4308fc29_65374636')) {function content_508dcc4308fc29_65374636($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
          	 <form action="admin.contact.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" method="post">
                <table id="plugin_table" class="display fix_tab">       
                    <tr>
                        <td>姓名:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>    
                    <tr>
                        <td>單位:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>    
                    <tr>
                        <td>電話:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>    
                    <tr>   
                        <td>E-MAIL:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>    
                    <tr>
                        <td>職掌:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>
                    <tr>
                        <td>照片:</td>
                        <td>
                          <input type="file" name="c_link"/>
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