<div id="menu">
    <ul>
    	<!--建構上方選單-->
        {foreach from=$top_menu[0] item=l_menu key=lid}
            <li style="background:url({$site_root}images/{$top_menu[2][$lid]}) no-repeat;">
            	<a href="{$site_root}{$top_menu[1][$lid]}">{$l_menu}</a>
            </li>
        {/foreach}
    </ul>
</div>
