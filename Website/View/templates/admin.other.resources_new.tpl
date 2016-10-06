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
          {if $type!=26}  
              {if $rs!=''}
                {foreach from=$rs item=field key=k}
                 <form action="admin.other.php?type={$type}" method="post">
                    <input type="hidden" name="process" value="2" />
                    <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                    <table id="plugin_table" class="display fix_tab">       
                        <tr>
                            <td>{$title_field}:</td>
                            <td>
                              <input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}" size="40"/>
                            </td>
                        </tr>    
                        <tr>
                            <td>連結:</td>
                            <td>
                              <input type="text" name="CONTENT_CONTENT" value="{$field.CONTENT_CONTENT}" size="40"/>
                            </td>
                        </tr>    
                        <tr>
                            <td>公布日期:</td>
                            <td>
                              <input type="text" name="CONTENT_DATE" value="{$field.CONTENT_DATE}" size="40"/>
                            </td>
                        </tr>                        
                        <tr>
                            <td colspan="2"><input type="submit" value="送出" /></td>
                        </tr>
                   </table>
                 </form>  
                {/foreach}
              {else}
                  <form action="admin.other.php?type={$type}" method="post">
                    <input type="hidden" name="process" value="1" />
                    <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                    <table id="plugin_table" class="display fix_tab">       
                        <tr>
                            <td>{$title_field}:</td>
                            <td>
                              <input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}" size="40"/>
                            </td>
                        </tr>    
                        <tr>
                            <td>連結:</td>
                            <td>
                              <input type="text" name="CONTENT_CONTENT" value="{$field.CONTENT_CONTENT}" size="40"/>
                            </td>
                        </tr>    
                        <tr>
                            <td>公布日期:</td>
                            <td>
                              <input type="text" name="CONTENT_DATE" value="{$field.CONTENT_DATE}" size="40"/>
                            </td>
                        </tr>                        
                        <tr>
                            <td colspan="2"><input type="submit" value="送出" /></td>
                        </tr>
                   </table>
                 </form> 
              {/if}   
          {else}   <!----好書推薦--->
          	  {if $rs!=''}
                {foreach from=$rs item=field key=k}
                 <form action="admin.other.php?type={$type}" method="post">
                    書名:<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}"/><br/>
                    照片上傳:<input type="file" name="file" value="{$field.CONTENT_TITLE}"/>
                    <input type="hidden" name="process" value="2" />
                    <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                    <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                    <input type="submit" value="更新資料" />
                 </form>  
                {/foreach}
              {else}
                  <form action="admin.other.php?type={$type}" method="post">
                    書名:<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}"/><br/>
                    照片上傳:<input type="file" name="file" value="{$field.CONTENT_TITLE}"/>
                    <input type="hidden" name="process" value="1" />
                    <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                    <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                    <input type="submit" value="更新資料" />
                 </form> 
              {/if}  
          {/if}   
          </div>
	</div>	
	{include file="admin.footer.tpl"}
</div>
</body>
</html>
