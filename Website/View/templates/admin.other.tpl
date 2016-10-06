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
       {section name=tool loop=$rs} 
       		<tr>
            	<td>{$rs[tool].c_id}</td>
                <td>{$rs[tool].c_date}</td>
                <td>
                    {if $rs[tool].type_number==112}
                    	系辦公告
                    {elseif $rs[tool].type_number==113}
                    	系學會公告
                    {elseif $rs[tool].type_number==30}
                    	招生資訊
                    {elseif $rs[tool].type_number==15}
                    	活動花絮    
                    {elseif $rs[tool].type_number==13}
                    	相關連結    
                    {/if}
                </td>
                <td>
                {$rs[tool].c_title|truncate:15}<a href="news_view.php?c_id={$rs[tool].c_id}"></a></td>
                <td>
                	{if $rs[tool].c_status==1}
                    <a href="#" onclick="ajax_process('{$site_root}index_manage/index_news_process.php','{$rs[tool].c_id}','{$rs[tool].c_status}','','B')">
                		<img src="{$site_root}images/icon/action_check.png"/>
                    </a>
                    {elseif $rs[tool].c_status!=1} 
                    <a href="#" onclick="ajax_process('{$site_root}index_manage/index_news_process.php','{$rs[tool].c_id}','{$rs[tool].c_status}','','B')">
                    	<img src="{$site_root}images/icon/action_delete.png"/>
                    </a>
                    {/if}
                </td>
                <td>
                	<!--主任審核-->
                	{if $rs[tool].c_max_status==1}
                    	{if $m_type_id=='A' || $m_type_id=='H'}
                        <a href="#" onclick="ajax_process('{$site_root}index_manage/index_news_process.php','{$rs[tool].c_id}','{$rs[tool].c_max_status}','','A')">
                            <img src="{$site_root}images/icon/action_check.png"/>
                        </a>
                    	{else}
                        	<img src="{$site_root}images/icon/action_check.png"/>
                        {/if}
                    {elseif $rs[tool].c_max_status!=1}
                    	{if $m_type_id=='A' || $m_type_id=='H'}
                        <a href="#" onclick="ajax_process('{$site_root}index_manage/index_news_process.php','{$rs[tool].c_id}','{$rs[tool].c_max_status}','','A')">
                            <img src="{$site_root}images/icon/action_delete.png"/>
                        </a>
                    	{else}
                        	<img src="{$site_root}images/icon/action_delete.png"/>
                        {/if}
                    {/if}
                </td>
                <td><input type="button" value="修改" onclick="location.href='{$site_root}{$update_page}?c_id={$rs[tool].c_id}&process=2&type_number={$rs[tool].type_number}'"/>
                </td>
                <td>
                	{if $rs[tool].c_status!=2}
                    	<input type="button" onclick="ajax_process('{$site_root}index_manage/index_news_process.php','{$rs[tool].c_id}','6')" value="刪除"/>
                	{elseif $rs[tool].c_status==2}
                    	<input type="button" value="已刪除"/>
                    {/if}
                </td>
            </tr>
            </tr>
       {/section}
    </tbody>
</table>
          </div>
	</div>	
	{include file="admin.footer.tpl"}
</div>
</body>
</html>
