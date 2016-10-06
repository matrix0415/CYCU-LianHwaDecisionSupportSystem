{include file="admin.head.tpl"}
<script language="javascript" src="{$site_root}js/kads_things_ajax.js"></script>
<div id="wrap">
	{include file="top.tpl"}
		{include file="top_menu.tpl"}
      <div id="contentwrap"> 
          {include file="left_menu.tpl"}
          {include file="content_title.tpl"}
          {include file="../library/ui.tpl"}
          {include file="../library/ui_tab.tpl"}
          {include file="../library/jquery_ckeditor.tpl"}
        
<script language="javascript">
$(function(){
  /*tab*/
  $("#about_tabs").tabs();
  /*Ckeditor*/
  $('.c_content1').ckeditor(kads_config);
});
</script>
          <div id="content">
          	 <form action="admin.other.php?type={$type}" method="post">
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
	{include file="admin.footer.tpl"}
</div>
</body>
</html>
