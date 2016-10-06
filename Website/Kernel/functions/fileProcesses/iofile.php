<?php
    
/**
 * input output file
 */
class iofile {
	/*
	 *	build folder(folder path)
	 */
	public function buildFolder($folderPath){
		$result =false;
		if($folderPath !=''){
			$result =mkdir($folderPath);
		}else	
			
		return $result;
	}		
	
	/*
	 *  read file(file path)
	 */
	public function rfile($filepath){
		$result =0;
		if(file_exists($filepath)){
			
			
			
		}else	// if(file_exists($filepath))
			echo 'File '.$filepath.' not Exist';
			
		return $result;
		
	}
	
	/*
	 *  write file(file path, content)
	 */
	public function wfile($filepath, $content=''){
		 $result =0;
		 if($file =fopen($filepath, "a")){
		 	
			fwrite($file, $content);
			
			fclose($file);
			$result =1;
		 }else
			echo 'File create faild: '.$filepath;
		 return $result;
		 
	}
		
	 /*
	  *  read xml(file path), return the xml object
	  *  !!!!!!!!!!!!!!!!!!!! have some problem!!
	  */
	public function rxml($filepath){
	  	$result =0;
		if(file_exists($filepath))			
			$result =simplexml_load_file($filepath);
		else	// if(file_exists($filepath))
			echo 'File '.$filepath.' not Exist';
			
		return $result;
	  	  		  
	}
	  
	  /*
	   *  NOT COMPLIETE!
	   *  write xml(file path, element tag Array, element Content Array)
	   *  file path => where to write the xml file
	   *  element Tag Array => 0->first floor, 1->second floor
	   * 				ex: <data>	<- Array[0]
	   * 						<type></type>  <- Array[1]
	   * 					</data>
	   *  element Content Array => 
	   */
	 public function wxml($filepath, $elementTagArray, $elementContentArray){
	 	$result =0;	
	 	if(!empty($filepath)&& !empty($elementTagArray) && !empty($elementContentArray)){
		 	foreach ($variable as $key => $value) {
				 
			}	
		 	$xmlo =new SimpleXMLElement();
			
			$result =1;
		}else 	// if(!empty($filepath)&& !empty($elementTagArray) && !empty($elementContentArray))
			echo 'Paramters not Enought';
		
		return $result;		 
	 }
	 
	 
	 
	 	 	
}
    
    
    
    
    
    
    
?>