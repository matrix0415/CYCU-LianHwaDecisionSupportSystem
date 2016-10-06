{include file="head.tpl"}
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
		{*{foreach from=$rs item=field key=k}*}
    	<div id="tabs-1">
        	<form action="admin.other.php?type={$type}" method="post">
            	標題名稱:<input type="text" name="CONTENT_TITLE" /> <br/>
                心得作者:<input type="text" name="" /> <br/>
                公佈日期:<input type="text" name="" /> <br/>
            	<input type="hidden" name="process" value="1" />
                <textarea name="CONTENT_CONTENT" class="c_content1">{$field}</textarea>
                <input type="submit" value="更新資料" />
            </form>    
        </div>
        {*{/foreach}*}

</div>
          </div>
	</div>	
	{include file="footer.tpl"}
</div>
</body>
</html>
