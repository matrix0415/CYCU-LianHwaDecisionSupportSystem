<?php
	
	include_once 'config.php';
	
	//print_r($module->selectProductsById("9780273754534"));
	//print_r($module->defineManagerMainframe("2"));
	$result =$module->selectProducts('');
	
	foreach($result as $index=> $value)
		echo "'".$value['pid']."',";
?>