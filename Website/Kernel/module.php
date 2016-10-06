<?php
	
	include_once "config.php";
	
	class module{
		private static $ar =null;
		
		public function __construct($ar){
			$this->ar =$ar;
		}		
		
		public function login($acc, $pwd){	// mobile & website
			
			$this->ar->setTable("user");
			$this->ar->setField("COUNT(uid) AS a");
			$this->ar->setWhere("uid =? AND user_pwd =?");
			$this->ar->setMode("COUNT");
			$this->ar->uid =$acc;
			$this->ar->user_pwd =$pwd;
			$result =$this->ar->action("SELECT");
			if($result['a']  ==1){
				$rs =true;
				$this->ar->setTable("user");
				$this->ar->setField("user_hierarchy");
				$this->ar->setWhere("uid =? AND user_pwd =?");
				$this->ar->uid =$acc;
				$this->ar->user_pwd =$pwd;
				$result =$this->ar->action("SELECT");
				$rs2 =$result['user_hierarchy'];
			}else{
				$rs =false;
				$rs2 ="none";
			}
			$jsonArray =array();
			$jsonArray["bool"] =$rs;
			$jsonArray["permission"] =$rs2;
			$json =$this->jsonProducer($jsonArray);
			//$json =urlencode(json_encode($jsonArray));
			return $json; //$json;
			unset($result, $rs, $rs2, $json);
		}
		
		public function createMobileDatabase($tablenameArray){		// mobile
			$this->ar->setTable("products");
			$this->ar->setField("shopid,shop_name,shop_city,shop_address");
			$this->ar->setWHERE("(shop_lat > ".$latlower." OR shop_lat < ".$latupper.") 
								AND (shop_lon > ".$lonlower." AND shop_lon < ".$lonupper.")");
			$this->ar->setLimit("3");
			$result =$this->ar->action("SELECT");
			
			
			$json =$this->jsonProducer($result);
			return $json;
		}
		
		public function defineManagerMainframe($category){
			$htmlresponse =array();			
			if($category =="products_category" || $category =="products_group" || $category =="products_brand"){
				$this->ar->setTable($category);
				$this->ar->setWhere("1");
				$this->ar->setMode("ASSOC");
				$result1 =$this->ar->action("SELECT");
				$i =0;
				foreach($result1 as $value){		// multiple rows
					
					$this->ar->setTable("products_age");
					$this->ar->setField("AVG(products_age_avg) as avgg");
					$this->ar->setWhere($category."_id =?");
					$this->ar->products_category_id =$value[$category.'_id'];
					$this->ar->setGroupBy($category."_id");
					
					$this->ar->setLimit(0,1);
					$result2 =$this->ar->action("SELECT");
					//print_r($result2);
					$keyvalue =$category.'_id';
					$keyvalue2 =$category.'_description';
					//$htmlresponse[$value][$i++]['id'] =$value[$keyvalue];
					//$htmlresponse[$value][$i++]['name'] =$value[$keyvalue2];
					//if(!empty($result2['OrderAverage']))
						//$htmlresponse[$value][$i++]['age'] =$result2['OrderAverage'];
					$htmlresponse[$i]['id'] =$value[$keyvalue];
					$htmlresponse[$i]['name'] =trim($value[$keyvalue2]);
					if(!empty($result2[0]['avgg']))
						$htmlresponse[$i]['age'] =intval($result2[0]['avgg']);
					$json =$this->jsonProducer($htmlresponse);
					$i++;
				}
			}else
				$json =false;
			return $json;
		}
			
		public function buildChart($p, $pid, $o, $oid, $interval, $secondary){
			$where ='';
			$groupby ='';
			$parameter =array();
			switch($p){
				case 'products_brand':
					if(!empty($pid))	
						$where ='products.products_brand_id ="'.$pid.'"';
					else	
						$groupby ='products.products_brand_id, ';
					break;
				case 'products_category':
					if(!empty($pid))
						$where ='products.products_category_id ="'.$pid.'"';
					else
						$groupby ='products.products_category_id,';
					break;
				case 'products_group':
					if(!empty($pid))
						$where ='products.products_group_id ="'.$pid.'"';
					else
						$groupby ='products.products_group_id,';
					break;
				case 'products':
					if(!empty($pid))
						$where ='products.pid ="'.$pid.'"';
					else
						$groupby ='products.pid,';
					break;
			}
			$optionalWhere ='';
			
			if(!empty($where))
				$where =$where.' AND ';
			switch($o){
				case 'area': 	// layer 1
					if(!empty($oid)){
						$this->ar->setTable("area");
						$this->ar->setField("area_upper");
						$this->ar->setWhere("areaid =?");
						$this->ar->areaid =$oid;
						$rs =$this->ar->action("SELECT");
						
						if(is_array($rs)){
							foreach($rs as $index => $rs2){	// layer 2
								
								$optionalWhere .='areaid='.$rs2['area_upper'].' OR ';
								$this->ar->setTable("area");
								$this->ar->setField("area_upper");
								$this->ar->setWhere("areaid =?");
								$this->ar->areaid =$rs2['area_upper'];
								$rs2 =$this->ar->action("SELECT");
								if(is_array($rs2)){
									foreach($rs2 as $index2 => $rs3){	// layer 3
										$optionalWhere .='products_age.areaid='.$rs3['area_upper'].' OR ';
									}
								}
							}	
						}
						
						$optionalWhere =' AND ('.substr($optionalWhere, 0,-3).' )';
						$where .=$optionalWhere;
					}else
						$groupby .=' products_age.areaid,';
					
					break;
				case 'chain':	
					if(empty($oid))
						$groupby .=' products_age.chain_id,';
					else
						$where .=' products_age.chain_id ="'.$oid.'"';
					
					break;
			}
			//echo "GROUP BY::".$groupby."<br/>";
			//echo "WHERE::".$where."<br/>";
			/*
			 	
			SELECT 
				products_age.pid, products_age.products_age_date, AVG(products_age.products_age_avg), (SELECT `products_age_date` from products_age ORDER BY `products_age_date` DESC LIMIT 1) as DD, products_name FROM products_age 
			INNER JOIN 
				products 
			ON 
				products.pid = products_age.pid
			WHERE	
				(products_age.products_age_date >= DATE_SUB((SELECT `products_age_date` from products_age ORDER BY `products_age_date` DESC LIMIT 1), INTERVAL 5 DAY) and products_age.products_age_date <=(SELECT `products_age_date` from products_age ORDER BY `products_age_date` DESC LIMIT 1)) GROUP BY products_age.pid
				
				
			SELECT products_age.pid, products.products_name, AVG(products_age.products_age_avg) as AVG, DATE_SUB((SELECT products_age_date from products_age ORDER BY products_age_date DESC LIMIT 1), INTERVAL 60 DAY) as DD, products_name FROM `products_age` INNER JOIN products ON products.pid = products_age.pid WHERE DATE_SUB(products_age.products_age_date, INTERVAL 0 DAY) >= DATE_SUB((SELECT `products_age_date` from products_age ORDER BY `products_age_date` DESC LIMIT 1), INTERVAL 5 DAY) and products_age.products_age_date <=
			(SELECT `products_age_date` from products_age ORDER BY `products_age_date` DESC LIMIT 1)
			AND 1 GROUP BY products_age.areaid	
				
				
				
					
			*/
			if(!empty($where))
					$where =' AND '.$where;
			
			$htmlresponse ='';
			$num =0;
			for($k =0; $k<$secondary; $k++){
				
				$start =$k*$interval+1;
				// echo '<br/>';
				$end =($k+1)*$interval;
				if($k ==0)
					$start--;
				$this->ar->setTable("products_age");
				$this->ar->setJoin("products", "products.pid = products_age.pid");
				$this->ar->setField("products_age.pid, products.products_name, AVG(products_age.products_age_avg) as AVG, DATE_SUB((SELECT products_age_date from products_age ORDER BY products_age_date DESC LIMIT 1), INTERVAL ".$start." DAY) as DD, products_name");
				
				//echo ':::::'.$where.':::::::::::::::::';
				$this->ar->setWhere("
					DATE_SUB(products_age.products_age_date, INTERVAL ".$start." DAY) >= DATE_SUB((SELECT `products_age_date` from products_age ORDER BY `products_age_date` DESC LIMIT 1), INTERVAL ".$end." DAY) 
					and 
					products_age.products_age_date <=(SELECT `products_age_date` from products_age ORDER BY `products_age_date` DESC LIMIT 1) ".$where
				);
				//echo '::::'.$groupby.'<br/>';
				//echo '::::'.$where.'<br/>';
				if($groupby !='')
					$this->ar->setGroupBy(substr($groupby,0,-1));
				//echo $where;
				//print_r();
				$rs =$this->ar->action("SELECT");
				//echo '<br/>'.gettype($rs).'<br/>';
				
				//print_r($rs);
				foreach($rs as $index => $value){
					$DDE =explode('-',$value['DD']);
					$htmlresponse .='false;'.$DDE[0].','.$DDE[1].','.$DDE[2].';'.intval($value['AVG']).'|';
					$htmlresponse .='true;'.$num.','.$value['products_name'].';'.intval($value['AVG']).'|';
					$num+=3;
				}
				unset($rs);
				
			}
			$htmlresponse =substr($htmlresponse, 0,-1);
			return $htmlresponse;
		}
		
		
		public function syncAgeTable($sync_date){
			/*
			SELECT  `recordid` ,  `uid` ,  `shopid` ,  `pid` ,  `record_time` ,  `record_intodbtime` , FROM_UNIXTIME( AVG( UNIX_TIMESTAMP( `record_deadline`))) FROM record WHERE DAYOFMONTH( record_time ) >=21 AND DAYOFMONTH( record_time ) <=25 GROUP BY  `record_time` 
			
			SELECT record_time, AVG((unix_timestamp(record.record_time)-unix_timestamp(DATE_SUB(record.record_deadline,INTERVAL products.products_deadline MONTH))))/60/60/24 as dn from record INNER JOIN products ON products.pid =record.pid where record.record_sync=false GROUP BY record_deadline
			
			$dateCondition =array();
			$temp =1;
			for($d =1+$interval; $d<=31; $d+=$interval){
				$condition ='DAYOFMONTH(record_time)>='.$temp.' AND DAYOFMONTH(record_time) <='.$d;
				array_push($dateCondition, $condition);
				$temp =$d;
			}
			print_r($dateCondition);
			echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
			
			
			
			
			
			
			select record.pid, s.areaid, s.chain_id, p.products_brand_id, p.products_category_id, p.products_group_id, record.record_time, AVG((unix_timestamp(record.record_time)-unix_timestamp(DATE_SUB(record.record_deadline,INTERVAL p.products_deadline MONTH))))/60/60/24 as dn
			from record
			inner join products as p on record.pid =p.pid
			inner join shop as s on record.shopid =s.shopid
		
			select record.pid, p.products_name, s.areaid, s.chain_id, p.products_brand_id, p.products_category_id, p.products_group_id, record.record_time, (unix_timestamp(record.record_time)-unix_timestamp(DATE_SUB(record.record_deadline,INTERVAL p.products_deadline MONTH)))/60/60/24 as dn
			from record
			inner join products as p on record.pid =p.pid
			inner join shop as s on record.shopid =s.shopid
			
			
			select 
			record.pid, s.areaid, s.chain_id, p.products_brand_id, p.products_category_id, p.products_group_id, record.record_time, AVG((unix_timestamp(record.record_time)-unix_timestamp(DATE_SUB(record.record_deadline,INTERVAL p.products_deadline MONTH))))/60/60/24 as dn
			from record
			inner join products as p on record.pid =p.pid
			inner join shop as s on record.shopid =s.shopid
			GROUP BY p.pid, s.areaid, s.chain_id, record.record_time
			
			*/
			$ii=0;
			$this->ar->setTable("record");
			$rs =$this->ar->action("SELECT 
								record.pid, s.areaid, s.chain_id, p.products_brand_id, p.products_category_id, p.products_group_id, record.record_time, AVG((unix_timestamp(record.record_time)-unix_timestamp(DATE_SUB(record.record_deadline,INTERVAL p.products_deadline MONTH))))/60/60/24 as dn
								FROM record
								INNER JOIN products as p on record.pid =p.pid
								INNER JOIN shop as s on record.shopid =s.shopid
								WHERE record.record_time>='".$sync_date."'
								GROUP BY p.pid, s.areaid, s.chain_id, record.record_time");
			$insertvalue ='';
			foreach($rs as $value){
				$insertvalue .='("'.$value['pid'].'","'.$value['areaid'].'","'.$value['chain_id'].'","'.$value['products_brand_id'].'","'.$value['products_category_id'].'","'.$value['products_group_id'].'","'.$value['record_time'].'","'.$value['dn'].'"),';
				$ii++;
			}
			$this->ar->setTable("products_age");
			$insertvalue =substr($insertvalue, 0, -1);
			$result =$this->ar->action("INSERT INTO products_age (pid, areaid, chain_id ,products_brand_id, products_category_id, products_group_id, products_age_date, products_age_avg) VALUES ".$insertvalue.";");
			
			return $ii;
		}
		
		// Area ----------------------------------------------------
		public function insertArea($name, $layer, $upper){	// website
			$this->ar->setTable("area");
			$this->ar->setValue("area_name =?, area_layer =?, area_upper =?");
			$this->ar->area_name =$name;
			$this->ar->area_layer =$layer;
			$this->ar->area_upper =$upper;
			$result =$this->ar->action("INSERT");
			$json =$this->jsonProducer($result);
			return $json;
		}
		public function deleteArea($name, $upper){	// website
			$this->ar->setTable("area");
			
			$result =$this->ar->action("DELETE");
			
			$json =$this->jsonProducer($result);
			return $json;
		}
		public function selectArea($upper, $id){	// website
			if(!empty($id)){
				
				$this->ar->setTable("area");
				$this->ar->setField("*");
				$this->ar->setWhere("areaid =?");
				$this->ar->areaid =$id;
				$rs =$this->ar->action("SELECT");
				$json =$this->jsonProducer($rs);
				
			}elseif(!empty($upper)){
				$this->ar->setTable("area");
				$this->ar->setField("*");
				$this->ar->setWhere("areaid =?");
				$this->ar->area_upper =$upper;
				$this->ar->setSequence ='area_name';
				$rs =$this->ar->action("SELECT");
				//print_r($rs);
				
				if(is_array($rs)){
					foreach($rs as $index => $val){	// layer 2
						
						$this->ar->setTable("area");
						$this->ar->setField("*");
						$this->ar->setWhere("area_upper =?");
						$this->ar->area_upper =$val['areaid'];
						$rs2 =$this->ar->action("SELECT");
						
						if(is_array($rs2) && !empty($rs2[0])){
							foreach($rs2 as $index2 => $val2){	// layer 2
								$this->ar->setTable("area");
								$this->ar->setField("*");
								$this->ar->setWhere("area_upper =?");
								$this->ar->area_upper =$val2['areaid'];
								$rs3 =$this->ar->action("SELECT");		
								$rs2[$index2]['root'] =$rs3;
							}	
						}
						$rs[$index]['root'] =$rs2;
					}
				}
				$json =$rs;
			}
			
			return $json;
		}
		
		// Products category, Products brand, Products Group ----------------------------------------------------
		public function selectCategory($table){
		
			$this->ar->setTable($table);
			$this->ar->setWhere("1");
			$this->ar->setMode("ASSOC");
			$result =$this->ar->action("SELECT");
			return $result;
		}
		// Products category, Products brand, Products Group ----------------------------------------------------
		
		// Shop ----------------------------------------------------
		public function insertShop($shop_name, $chain_id, $areaid, $shop_phone, 
								$shop_lat, $shop_lon, $shop_country, $shop_city, $shop_address){	// website
			$this->ar->setTable("shop");
			$this->ar->setValue("shop_name =?, chain_id =?, areaid =?, shop_phone =?, 
								shop_lat =?, shop_lon =?, shop_country =?, shop_city =?, shop_address =?");
			$this->ar->shop_name =$shop_name;
			$this->ar->chain_id =$chain_id;
			$this->ar->areaid =$areaid;
			$this->ar->shop_phone =$shop_phone;
			$this->ar->shop_lat =$shop_lat;
			$this->ar->shop_lon =$shop_lon;
			$this->ar->shop_country =$shop_country;
			$this->ar->shop_city =$shop_city;
			$this->ar->shop_address =$shop_address;
			$result =$this->ar->action("INSERT");
			
			//$json =$this->jsonProducer($result);
			return $result;
		}
		
		public function defineShop($lat, $lon){		// mobile
			$this->ar->setTable("shop");
			$this->ar->setField("shopid,shop_name,shop_city,shop_address");
			$latupper =$lat+0.0005;
			$latlower =$lat-0.0005;
			$lonupper =$lon+0.0005;
			$lonlower =$lon-0.0005;
			$this->ar->setWHERE("(shop_lat > ".$latlower." OR shop_lat < ".$latupper.") 
						AND (shop_lon > ".$lonlower." OR shop_lon < ".$lonupper.")");
			$this->ar->setLimit('0',"4");
			$result =$this->ar->action("SELECT");
			$json =$this->jsonProducer($result);
			return $json;
		}
		
		public function selectShop($keywords, $area){
			if(!empty($area))
				$wherearea =' AND areaid ='.$area;
			else
				$wherearea ='';
			$this->ar->setTable("shop");
			$this->ar->setField("shopid, shop_name, areaid, chain_id, shop_city, shop_address");
			if(!empty($keywords)){
				$this->ar->setWhere("(shop_name LIKE '".$keywords."%' OR shop_address LIKE '".$keywords."%')".$wherearea);
			}else
				$this->ar->setWhere("1".$wherearea);
				
			$result =$this->ar->action("SELECT");
			
			$html ='';
			foreach($result as $value){
				$html .='<div class="list" value="'.$value['shopid'].'">
						<div class="shop">'.$value['shop_name'].'</div>
						<div class="channel">'.$value['chain_id'].'</div>
						<div class="address">'.$value['shop_city'].$value['shop_address'].'</div>
						</div>';
			}
			return $html;
			
		}
		
		// Products ----------------------------------------------------
		public function selectProductsById($pid){	// mobile
			$this->ar->setTable("products");
			$this->ar->setField("products_name, products_deadline");
			$this->ar->setWHERE("pid =?");
			$this->ar->pid =$pid;
			$result =$this->ar->action("SELECT");
			
			$json =$this->jsonProducer($result);
			return $json;
		}
		
		public function insertProducts($pid, $name, $deadline, $category_id, $group_id, $brand_id){		// website
			$this->ar->setTable("products");
			$this->ar->setValue("pid =?, products_name =?, products_deadline =?, products_category_id =?, products_group_id =?, products_brand_id =?");
			$this->ar->pid =$pid;
			$this->ar->products_name =$name;
			$this->ar->products_deadline =$deadline;
			$this->ar->products_category_id =$category_id;
			$this->ar->products_group_id =$group_id;
			$this->ar->products_brand_id =$brand_id;
			$result =$this->ar->action("INSERT");
			
			$json =$this->jsonProducer($result);
			return $json;
		}
		
		public function selectProducts($keywords){
		
			$this->ar->setTable("products");
			$this->ar->setField("pid, products_name, products_brand_id, products_group_id, products_category_id");
			if(!empty($keywords)){
				$this->ar->setWhere("products_name LIKE ?");
				$this->ar->products_name ='%'.$keywords.'%';
			}else
				$this->ar->setWhere("1");
				
			$result =$this->ar->action("SELECT");
			
			
			return $result;
			
		}
		
		// Record ----------------------------------------------------
		public function insertRecord($uid, $shopid, $pid, $deadline, $record_time){
			$this->ar->setTable("record");
			$this->ar->setValue("uid =?, shopid =?, pid =?, record_deadline =?, record_time =?");
			
			$this->ar->uid =$uid;
			$this->ar->shopid =$shopid;
			$this->ar->pid =$pid;
			$this->ar->record_deadline =$deadline;
			$this->ar->record_time =$record_time;
			
			$result =$this->ar->action("INSERT");
			
			$json =$this->jsonProducer($result);
			return $json;
		}
		
		
		// Products_age ----------------------------------------------------
		public function selectAge($page, $keyword){
			$start =($page-1)*20;
			$end =$page*20;
			$this->ar->setTable("products_age");
			$this->ar->setField("products_age.ageid, products.products_name, products_age.products_age_date, products_age.products_age_avg");
			$this->ar->setJoin("products", "products_age.pid =products.pid");
			
			if(empty($keyword))
				$this->ar->setWhere("1");
			else
				$this->ar->setWhere("products.products_name LIKE '".$keyword."%'");
				
			$this->ar->setSequence("products_age.products_age_date DESC");
			$this->ar->setLimit($start, $end);
			$result =$this->ar->action("SELECT");
			
			$json =$this->jsonProducer($result);
			return $json;
			
		}
		
		// Chain ----------------------------------------------------
		public function selectChain(){
			
			$this->ar->setTable("chain");
			$this->ar->setField("*");
			$this->ar->setWHERE("1");
			$result =$this->ar->action("SELECT");
			return $result;
		}
		// Chain ----------------------------------------------------
		
		private function jsonProducer($jsonArray){
			$json =array();
			if(is_array($jsonArray)){
				foreach($jsonArray as $index => $value){
					if(is_array($value)){
						foreach($value as $index2 => $value2)
							if(is_array($value2)){
								foreach($value2 as $index3 => $value3)
									if(is_array($value3)){
										foreach($value3 as $index4 => $value4)
											if(is_array($value4)){
												foreach($value4 as $index4 => $value5)
													$json[$index][$index2][$index3][$index4][$index5] =urlencode($value5);	
											}else
												$json[$index][$index2][$index3][$index4] =urlencode($value4);	
									}else
										$json[$index][$index2][$index3] =urlencode($value3);
							}else
								$json[$index][$index2] =urlencode($value2);
					}else
						$json[$index] =urlencode($value);
				}
			}else{
				array_push($json, urlencode($jsonArray));
			}
			
			
			$json =json_encode($json);
			return $json;
		}
		
		
	}
	
	
	
	/*
	$module =new module();
	$value['CONTENT_TITLE'] ="title";
	echo $module->INSERT(1,$value);
	
select sec_to_time
(AVG((unix_timestamp(record.record_time)-(unix_timestamp(period_add(record.record_deadline,-products.products_deadline*30))))/24) as ti from record 
INNER JOIN products ON products.pid =record.pid
where record.record_sync=false
	
	
	
	*/
?>
