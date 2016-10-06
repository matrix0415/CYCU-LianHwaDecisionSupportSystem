<?php

	include_once '../config.php';
	include_once SITE_FUNCTION.'fileProcesses/iofile.php';
	
	
	$result =$dbo->dbAction("SHOW TABLES", array());	
	$i=0;
	while($row=$result->fetch(PDO::FETCH_OBJ)){    
		$table[$i] =$row->Tables_in_LianHwa;
		$i++; 
	}
	
	
	$publicVar ="";
	$searchForValue ="";
	$publicVarArray =array();
	foreach($table as $tablename){
		$result =$dbo->dbAction("DESCRIBE ".$tablename, array());	
		
		//echo "\t\t\t\t// ".$tablename." \n";
		
		while($row=$result->fetch(PDO::FETCH_OBJ)){    
			$field =$row->Field;
			if(!in_array($field ,$publicVarArray)){
				$publicVar .="\tpublic \$".$field.";\n";
				array_push($publicVarArray, $field);
			}
			
			$searchForValue .="\t\t\t\tif(isset(\$this->".$field.")){
								array_push(\$SET, \$this->".$field.");
								\$this->".$field."=null;
							}\n";
		}	
		// \$SET .=' ".$field."=\"'.\$this->".$field.".'\", ';
		$searchForValue .="\n\n\n\n\n\n\n\n\n";
	}
	unset($publicVarArray);

	//$io =new iofile();
	//$io->wfile();
	
	echo $publicVar;
	echo "\n\n\n\n\n\n";
	echo $searchForValue;
?>
