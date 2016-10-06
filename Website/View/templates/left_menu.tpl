<script language="javascript">
$(function(){
	$('#sidebar ul li div').hide();
	$('#sidebar ul li').find('a').css({
			'font-size':'14px',
			'color':'#666'
	});
	
	$('#sidebar ul li').hover(function(){
		$(this).find('div').fadeIn('slow');
		
	},function(){
		$(this).find('div').fadeOut('slow');
	});
});
</script>

<div id="sidebar">
    <h3>{$left_title}</h3>
    <ul>
       {foreach from=$left_menu[0] item=l_menu key=lid} 

            {foreach from=$left_menu[0][$lid] item=d_menu key=did}
                {assign var=level1 value="|"|explode:$d_menu}
                 {if $level1!=''}
                    <li><a href="{$level1[1]}">{$level1[0]}</a>
                 {else if $level1==''}
                 	<!--第二層選單-->
                 	<div id="option_l2">
                        <ul>
                        {foreach from=$d_menu item=de_menu key=deid}
                            <li><a href="{$de_menu}">{$deid}</a></li>
                         {/foreach}
                        </ul>
                    </div>
                    </li>
                 {/if}
            {/foreach}
       {/foreach}
    </ul>
</div>
