<?php /* Smarty version Smarty-3.1.8, created on 2012-10-29 14:54:17
         compiled from "/var/www/activity/ProgramFiles/View/templates/admin.other.resources_new_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993653248508dd56a1c30d8-22372780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11cfc971cedbc6bc36bfb82be7b9f2434e33ec9c' => 
    array (
      0 => '/var/www/activity/ProgramFiles/View/templates/admin.other.resources_new_1.tpl',
      1 => 1351493654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '993653248508dd56a1c30d8-22372780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508dd56a28ca46_93191489',
  'variables' => 
  array (
    'site_root' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508dd56a28ca46_93191489')) {function content_508dd56a28ca46_93191489($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                        <td>書籍類別:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>    
                    <tr>
                        <td>書名:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>
                    <tr>
                        <td>作者:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>
                    <tr>
                        <td>出版社:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>
                    <tr>
                        <td>語言:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>
                    <tr>
                        <td>內容介紹:</td>
                        <td>
                          <input type="text" name="c_link" size="40"/>
                        </td>
                    </tr>
                    <tr>
                        <td>書籍圖片:</td>
                        <td>
                          <input type="file" name="c_link" size="40"/>
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