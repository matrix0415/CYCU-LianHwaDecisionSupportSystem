<?php
	include_once 'Kernel/config.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: X-Requested-With');
	header("Content-Type:text/html; charset=utf-8");
	
	$postimplode =implode(",",array_keys($_POST));
	switch($postimplode){
		// Mobile
		case 'id,pwd':
		case 'pwd,id':
			$id =$_POST['id'];
			$pwd =$_POST['pwd'];
			$json =$module->login($id, $pwd);
			
			echo urldecode($json);
			
			break;
		case 'tablename':
			$tablename =$_POST['tablename'];
			$tablenameArray =explode(";", $tablename);
			
			break;
		case 'lat,lon':
			$json =$module->defineShop($_POST['lon'], $_POST['lat']);
			echo urldecode($json);
			break;
		case 'pid':
			$json =$module->selectProductsById($_POST['pid']);
			
			echo urldecode($json);
			break;
		case 'shop_id,deadline':
			
			break;
		case 'permission':
			
			break;
		case 'uid,shopid,pid,products_deadline,record_time':
		case 'products_deadline,pid,uid,record_time,shopid':
			$json =$module->insertRecord($_POST['uid'], $_POST['shopid'], $_POST['pid'], $_POST['products_deadline'], $_POST['record_time']);
			echo urldecode($json);
			break;
		case 'category':	// define manager mainframe
			$json =$module->defineManagerMainframe($_POST['category']);
			echo urldecode($json);
			break;
		case 'type_products,type_products_id,type_optional,type_optional_id,interval,secondary':	// build chart
			$json =$module->buildChart($_POST['type_products'], $_POST['type_products_id'], $_POST['type_optional'], $_POST['type_optional_id'], $_POST['interval'], $_POST['secondary']);
			//buildChart($p, $pid, $o, $oid, $interval, $secondary)
			echo $json;
			break;
			
		case 'buildChartList':
			$category =$module->selectCategory('products_category');
			$brand =$module->selectCategory('products_brand');
			$group =$module->selectCategory('products_group');
			$products =$module->selectCategory('products');
			$area =$module->selectArea(1,'');
			$chain =$module->selectChain();
			$html ='';
			if(!empty($area)){
				foreach($area as $key => $val){					
					$html .='<ul>
						<li class="parent expanded">
							<a href="#"><p class="xy" value="area" id="'.$val['areaid'].'">'.$val['area_name'].'</p></a>';
							if(isset($val['root'])){
								
								$html .='<ul>';
									foreach($val['root'] as $key2 =>$val2){
										$html .='<li class="parent expanded">';
										$html .='<a href="#">
													<p class="select" value="area" draggable="true" ondragstart="drag(event)" id="'.$val2['areaid'].'">'.$val2['area_name'].'</p>
												</a>';
										if(isset($val2['root'])){
											$html .='<ul>';
											foreach($val2['root'] as $key => $val3){
												$html .='<li class="child">';
													$html .='<p class="select" draggable="true" ondragstart="drag(event)" id="'.$val3['areaid'].'" value="area">'.$val3['area_name'].'</p>';
												$html .='</li>';
											}
											$html .='</ul>'; 
										}
										$html .='</li>';
									}
								$html .='</ul>';
							}
					
					$html .='</li>
						</ul>';
				}
			}	
				
			
			$htmlresponse ='<ul>';
			$htmlresponse .='		<li class="parent expanded">
									<a href="#">
										<p class="select" id="0" draggable="true" ondragstart="drag(event)" value="products">商品</p>
									</a>
									<ul>
										<li class="parent expanded">
											<a href="#">
												<p class="select" draggable="true" ondragstart="drag(event)" value="products_brand" id="0">商品品牌(Brand)</p>
											</a>
											<ul>';
											foreach($brand as $index => $val){
												$htmlresponse .='
												<li class="child">
													<p class="select" 
														draggable="true" 
														ondragstart="drag(event)" 
														value="products_brand" 
														id="'.$val['products_brand_id'].'">'.$val['products_brand_description'].'
													</p>
												</li>';
											}
			$htmlresponse .='					</ul>
										</li>
										<li class="parent expanded">
											<a href="#">
												<p class="select" draggable="true" ondragstart="drag(event)" value="products_group" id="0">商品分組(Group)</p>
											</a>
											<ul>';
											foreach($group as $index => $val){
												$htmlresponse .='
												<li class="child">
													<p class="select" 
														draggable="true" 
														ondragstart="drag(event)" 
														value="products_group" 
														id="'.$val['products_group_id'].'">'.$val['products_group_description'].'
													</p>
												</li>';
											}
			$htmlresponse .='					</ul>
										</li>
										<li class="parent expanded">
											<a href="#">
												<p class="select" draggable="true" ondragstart="drag(event)" value="products_category" id="0">商品分類(Category)</p>
											</a>
											<ul>';
											foreach($category as $index => $val){
												$htmlresponse .='
												<li class="child">
													<p class="select" 
														draggable="true" 
														ondragstart="drag(event)" 
														value="products_category" 
														id="'.$val['products_category_id'].'">'.$val['products_category_description'].'
													</p>
												</li>';
											}
			$htmlresponse .='					</ul>
										</li>
										<li class="parent expanded">
											<a href="#">
												<p class="select" draggable="true" ondragstart="drag(event)" value="products" id="0">商品清單</p>
											</a>
											<ul>';
											foreach($products as $index => $val){
												$htmlresponse .='
												<li class="child">
													<p class="select" 
														draggable="true" 
														ondragstart="drag(event)" 
														value="products" 
														id="'.$val['pid'].'">'.$val['products_name'].'
													</p>
												</li>';
											}
			$htmlresponse .='					</ul>
										</li>
									</ul>
								</li>';
			
			$htmlresponse .='		<li class="parent expanded">
									<a href="#">
										<p class="select" id="0" draggable="true" ondragstart="drag(event)" value="chain">通路</p>
									</a>
									<ul>';
										foreach($chain as $index => $val){
											$htmlresponse .='
											<li class="child">
												<p class="select" 
													draggable="true" 
													ondragstart="drag(event)" 
													value="chain" 
													id="'.$val['chain_id'].'">'.$val['chain_description'].'
												</p>
											</li>';
										}
			$htmlresponse .='			</ul>
								</li>
							';
			
			
			
			$htmlresponse .='		<li class="parent expanded">
									<a href="#">
										<p class="select" id="0" draggable="true" ondragstart="drag(event)" value="area">地區</p>
									</a>
									';
										
			$htmlresponse .=$html;							
			$htmlresponse .='			
								</li>
							';
			
			
			
			
			
			$htmlresponse .='
						</ul>';
			echo $htmlresponse;
			break;
			
		// Website
		
		case 'website_products':
			$result =$module->selectProducts($_POST['website_products']);
			$html ='';
			foreach($result as $value){
				$html .='<div class="list" value="'.$value['pid'].'">
						<div class="product">'.$value['products_name'].'</div>
						<div class="brand">'.$value['products_brand_id'].'</div>
						<div class="group">'.$value['products_group_id'].'</div>
						<div class="class">'.$value['products_category_id'].'</div>
						</div>';
			}
			echo $html;
			break;
		case 'website_shop':
			$html =$module->selectShop($_POST['website_shop'], '');
			echo $html;
			break;
		case 'website_shop_area':
			$html =$module->selectShop('', $_POST['website_shop_area']);
			echo $html;
			break;
		// Area table ----------------------------------------------------------------------------------
		case 'area_name,area_layer,area_upper':	// area table insert data
			$json =$module->insertArea($_POST['area_name'],$_POST['area_layer'],$_POST['area_upper']);
			echo urldecode($json);
			break;
		case 'area_upper':	// 
			$rs =$module->selectArea($_POST['area_upper'],'');
			$html ='';
			//print_r($rs);
			///print_r($rs['root']);
			if(!empty($rs)){
				foreach($rs as $key => $val){					
					$html .='<ul>
						<li class="parent expanded">
							<a href="#"><p class="xy" value="'.$val['areaid'].'" id="">'.$val['area_name'].'</p></a>';
							if(isset($val['root'])){
								
								$html .='<ul>';
									foreach($val['root'] as $key2 =>$val2){
										$html .='<li class="parent expanded">';
										$html .='<a href="#">
													<p class="select" value="'.$val2['areaid'].'" draggable="true" ondragstart="drag(event)" id="">'.$val2['area_name'].'</p>
												</a>';
										if(isset($val2['root'])){
											$html .='<ul>';
											foreach($val2['root'] as $key => $val3){
												$html .='<li class="child">';
													$html .='<a href="#"><p class="select" draggable="true" ondragstart="drag(event)" id="area" value="'.$val3['areaid'].'" onclick="areaclick('.$val3['areaid'].')">'.$val3['area_name'].'</p></a>';
												$html .='</li>';
											}
											$html .='</ul>'; 
										}
										$html .='</li>';
									}
								$html .='</ul>';
							}
					
					$html .='</li>
						</ul>';
				}
				echo $html;
			}else
				echo 'Empty';
			// print_r($result);
			break;
		
		case 'areaid':
			$json =$module->selectArea('',$_POST['areaid']);
			echo urldecode($json);
			break;
		
		// Area table ----------------------------------------------------------------------------------
		
		case 'shop_name,chain_id,areaid,shop_phone,shop_lat,shop_lon,shop_country,shop_city,shop_address':
			$json =$module->insertShop($_POST['shop_name'], $_POST['chain_id'], $_POST['areaid'],
									$_POST['shop_phone'], $_POST['shop_lat'], $_POST['shop_lon'],
									$_POST['shop_country'], $_POST['shop_city'], $_POST['shop_address']);
			echo $json;
			break;
		case 'pid,products_name,products_deadline,products_category_id,products_group_id,products_brand_id':
			$result =$module->insertProducts($_POST['pid'], $_POST['products_name'], $_POST['products_deadline'], $_POST['products_category_id'], $_POST['products_group_id'], $_POST['products_brand_id']);
			return $result;
			break;
		case 'sync':
			if(!isset($_POST['sync']))
				$sync_date =DATE_NOW;
			else
				$sync_date =$_POST['sync'];
			$start =time();
			$count =$module->syncAgeTable($sync_date);
			$end =time();
			echo $count.'<br/>';
			echo 'Time Spend::'.($end-$start);
			
			break;
		case 'page,keyword':	
			$json =$module->selectAge($_POST['page'], $_POST['keyword']);
			echo urldecode($json);
			break;
		
		
		
		/*
		
					<ul>
                            <li class="parent expanded">
                                <a href="#">
                                    <p class="xy">x軸</p>
                                </a>
                                <ul>
                                    <li class="parent expanded">
                                        <a href="#">
                                            <p class="select" id="0" draggable="true" ondragstart="drag(event)" value="products">商品</p>
                                        </a>
                                        <ul>
                                            <li class="child">
                                                <p class="select" draggable="true" ondragstart="drag(event)" value="products"
                                                id="101">商品</p>
                                            </li>
                                            <li class="child">
                                                <p class="select" draggable="true" ondragstart="drag(event)" value="products"
                                                id="102">通路</p>
                                            </li>
                                            <li class="child">
                                                <p class="select" draggable="true" ondragstart="drag(event)" value="products"
                                                id="103">地區</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
					</ul>		
		
		
		
		
		*/
		
		default:
			echo 'case not find, postimplode ='.$postimplode;
			break;
	}
	
?>

