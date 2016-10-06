{include file="admin.head.tpl"}
{include file="jquery_table.tpl"}
<script language="javascript" src="{$site_root}js/kads_things_ajax.js"></script>
<div id="wrap">
		{include file="top.tpl"}
		{include file="top_menu.tpl"}
      <div id="contentwrap"> 
          {include file="left_menu.tpl"}
          {include file="content_title.tpl"}
          <div id="content">
<table id="plugin_table" class="display fix_tab">
    <thead>
    	<tr>
        	<td colspan="8">
            	<a href="{$link}">
            		<img src="{$site_root}images/icon/action_add.png"/>新增
                </a>
            </td>
        </tr>
        <tr>
            <!--title names-->
            {foreach from=$field_title item=title key=k}	
				<th>{$title}</th>
            {/foreach}

        </tr>
    </thead>
    <tbody>
           {foreach from=$rs item=field key=k}
                  <tr>
                      <td>{$field.CONTENT_TITLE}</td>
                      <td>{$field.CONTENT_DATE}</td>
                      <td>{$field.CONTENT_TIME}</td>
                      <td></td>
                      <td><input type="button" value="修改" onclick="location.href='admin.highlights_new.php?type={$type}&id={$field.CONTENT_ID}'"></td>
                      <td><input type="button" value="刪除" onclick="location.href='admin.highlights_new.php?process=3&type={$type}&id={$field.CONTENT_ID}'"></td>
                  </tr>
             {/foreach}
    </tbody>
</table>
          </div>
	</div>	
	{include file="admin.footer.tpl"}
</div>
</body>
</html>
