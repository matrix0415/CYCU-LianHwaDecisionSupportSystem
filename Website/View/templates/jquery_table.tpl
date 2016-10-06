<!--jQuery Table-->
<link href="{$site_root}jquery_plugin/jquery_table/css/demo_page.css" rel="stylesheet" type="text/css" />
<link href="{$site_root}jquery_plugin/jquery_table/css/demo_table.css" rel="stylesheet" type="text/css" />
<script src="{$site_root}jquery_plugin/jquery_table/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#plugin_table').dataTable({
		"sPaginationType":"full_numbers"
	});
});
</script>