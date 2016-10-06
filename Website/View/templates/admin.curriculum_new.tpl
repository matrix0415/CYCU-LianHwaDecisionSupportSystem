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

<div id="about_tabs">
	<ul>
    	{foreach from=$items item=field key=k}
        	<li><a href="#tabs-{$k+1}">{$field}</a></li>
        {/foreach}        
	</ul>
		{if $type=='9'}
            {if $rs!=''}
                {foreach from=$rs item=field key=k}
                <div id="tabs-1">
                    <form action="admin.curriculum.php?type={$type}" method="post">
                        講座名稱<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}" /><br/>
                        活動日期<input type="text" name="CONTENT_DATE" value="{$field.CONTENT_DATE}" /><br/>
                        <input type="hidden" name="process" value="2" />
                        <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                        <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                        <input type="submit" value="更新資料" />
                    </form>    
                </div>
                {/foreach}
            {else}
                <div id="tabs-1">
                    <form action="admin.curriculum.php?type={$type}" method="post">
                        講座名稱<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}" /><br/>
                        活動日期<input type="text" name="CONTENT_DATE" value="{$field.CONTENT_DATE}" /><br/>
                        <input type="hidden" name="process" value="1" />
                        <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                        <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                        <input type="submit" value="新增資料" />
                    </form>    
                </div>
            {/if}  
		{else}  <!---課程--->
        	{if $rs!=''}
                {foreach from=$rs item=field key=k}
                <div id="tabs-1">
                    <form action="admin.curriculum.php?type={$type}" method="post">
                        單位<input type="text" name="CONTENT_REMARK" value="{$field.CONTENT_REMARK}" /><br/>
                        學系<input type="text" name="CONTENT_FILE" value="{$field.CONTENT_FILE}" /><br/>
                        課程名稱<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}" /><br/>
                        <input type="hidden" name="process" value="2" />
                        <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                        <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                        <input type="submit" value="更新資料" />
                    </form>    
                </div>
                {/foreach}
            {else}
                <div id="tabs-1">
                    <form action="admin.curriculum.php?type={$type}" method="post">
                        單位<input type="text" name="CONTENT_REMARK" value="{$field.CONTENT_REMARK}" /><br/>
                        學系<input type="text" name="CONTENT_FILE" value="{$field.CONTENT_FILE}" /><br/>
                        課程名稱<input type="text" name="CONTENT_TITLE" value="{$field.CONTENT_TITLE}" /><br/>
                        <input type="hidden" name="process" value="1" />
                        <input type="hidden" name="ID" value="{$field.CONTENT_ID}" />
                        <textarea name="CONTENT_CONTENT" class="c_content1">{$field.CONTENT_CONTENT}</textarea>
                        <input type="submit" value="新增資料" />
                    </form>    
                </div>
            {/if}  
        {/if}            
</div>
          </div>
	</div>	
	{include file="admin.footer.tpl"}
</div>
</body>
</html>
