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
          	  {if $rs!=''}
                {foreach from=$rs item=field key=k}
                 <form action="admin.other.php?type={$type}" method="post">
                    標題名稱:<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}"/><br/>
                    <input type="hidden" name="process" value="2" />
                    <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                    <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                    <input type="submit" value="更新資料" />
                 </form>  
                {/foreach}
              {else}
                  <form action="admin.other.php?type={$type}" method="post">
                    標題名稱:<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}"/><br/>
                    <input type="hidden" name="process" value="1" />
                    <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                    <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                    <input type="submit" value="更新資料" />
                 </form> 
              {/if}    
          </div>
	</div>	
	{include file="admin.footer.tpl"}
</div>
</body>
</html>
