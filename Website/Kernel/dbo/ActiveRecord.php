<?php

class ActiveRecord{
	
	private static $dbo;
	
	private $table;
	private $join;
	private $setValue ="";
	private $where ="1";
	private $field ="*";
	private $group;
	private $sequence;	// order by  ASC, DESC
	private $limit;
	private $mode="ASSOC";	// normal mode, ASSOC mode
	
	public $areaid;
	public $area_name;
	public $area_layer;
	public $area_upper;
	public $chain_id;
	public $chain_description;
	public $patrolpoint_id;
	public $patrolpoint_name;
	public $pid;
	public $products_name;
	public $products_deadline;
	public $products_category_id;
	public $products_group_id;
	public $products_brand_id;
	public $products_layer;
	public $products_upper;
	public $ageid;
	public $products_age_avg;
	public $products_age_avg_total;
	public $products_age_date;
	public $products_brand_description;
	public $products_category_description;
	public $products_group_description;
	public $recordid;
	public $uid;
	public $shopid;
	public $record_deadline;
	public $record_intodbtime;
	public $record_time;
	public $shop_name;
	public $shop_phone;
	public $shop_lon;
	public $shop_lat;
	public $shop_country;
	public $shop_city;
	public $shop_address;
	public $user_name;
	public $user_phone;
	public $user_email;
	public $user_pwd;
	public $user_hierarchy;	
	
	public function __construct($dbo){
		$this->dbo =$dbo;
	}
	public function setTable($setTable){	// setting table, must
		$this->table =$setTable;
	}
	public function setJoin($table, $on){		// select join, optional function
		$join =$table.' ON '.$on;
		$this->join =$join;
	}
	public function setValue($setvalue){
		$this->setValue =$setvalue;
	}
	public function setWhere($where){	// delete, update, select, must
		$this->where =$where;
		
	}
	public function setField($field){	// select, optional
		$this->field =$field;
	}
	public function setGroupBy($groupby){
		$this->group =$groupby;
	}
	public function setSequence($sequence){	 // select, optional
		$this->sequence ='ORDER BY '.$sequence;
	}
	public function setLimit($FROM, $TO){
		$this->limit =$FROM.','.$TO;
	}
	public function setMode($mode){		// select, optional function
		$this->mode =$mode;
	}
	
	public function action($type){	// using active record funtion (insert, delete, update, select)
	
		$SET =array();
		
		if(isset($this->table)){
			
			switch($type){		// action
				case 'SELECT':
				case 'select':
				
					$SQLHEAD =$this->mode.' SELECT '.$this->field.' FROM '.$this->table;
					$SQLEND =' WHERE '.$this->where.' ';
					$SET =$this->actionSET();
					if(isset($this->join))
						$SQLHEAD .=' INNER JOIN '.$this->join;
					if(isset($this->sequence))
						$SQLEND .=$this->sequence;
					if(isset($this->group))
						$SQLEND .=' GROUP BY '.$this->group;
					if(isset($this->limit))
						$SQLEND .=' LIMIT '.$this->limit;
					$SQL =$SQLHEAD.$SQLEND;
					
					break;
				case 'INSERT':
				case 'insert':
					$SQL ="INSERT INTO ".$this->table." SET ".$this->setValue;
					$SET =$this->actionSET();
					break;
				case 'UPDATE':
				case 'update':
					if($this->where !="1"){
						$SQLHEAD ="UPDATE ".$this->table." SET ".$this->setValue;					
						$SQLEND =' WHERE '.$this->where;
						$SET =$this->actionSET();
						$SQL =SQLHEAD.$SQLEND;
					}else{
						
					}
					break;
				case 'DELETE':
				case 'delete':
					if(isset($this->where) && $this->where !=1){
						$SQL .='DELETE '.$this->field.' FROM '.$this->table.' WHERE '.$this->where;
					}else{
						
					}
					break;
				default:
					$SQL =$this->mode.' '.$type;
					$SET =array();
					break;
			}
			
			$this->table =null;
			$this->join =null;
			$this->setValue ="";
			$tihs->where ="1";
			$this->field ="*";
			$this->group =null;
			$this->sequence =null;	// order by  ASC, DESC
			$this->limit =null;
			$rs =$this->dbo->dbAction($SQL, $SET);			
			return $rs;
			
		}else{	// paramter not enough
			
		}	// if(isset($table))
	
	}
	
	
	public function actionSET(){
		$SET=array();
		switch($this->table){
			case 'area':
				if(isset($this->areaid)){
					array_push($SET, $this->areaid);
					$this->areaid=null;
				}
				if(isset($this->area_name)){
								array_push($SET, $this->area_name);
								$this->area_name=null;
							}
				if(isset($this->area_layer)){
								array_push($SET, $this->area_layer);
								$this->area_layer=null;
							}
				if(isset($this->area_upper)){
								array_push($SET, $this->area_upper);
								$this->area_upper=null;
							}
				break;
			
			case 'chain':
				if(isset($this->chain_id)){
								array_push($SET, $this->chain_id);
								$this->chain_id=null;
							}
				if(isset($this->chain_description)){
								array_push($SET, $this->chain_description);
								$this->chain_description=null;
							}
				break;
			case 'patrolpoint':
				if(isset($this->patrolpoint_id)){
								array_push($SET, $this->patrolpoint_id);
								$this->patrolpoint_id=null;
							}
				if(isset($this->patrolpoint_name)){
								array_push($SET, $this->patrolpoint_name);
								$this->patrolpoint_name=null;
							}
				if(isset($this->areaid)){
								array_push($SET, $this->areaid);
								$this->areaid=null;
							}
				break;
			case 'products':
				if(isset($this->pid)){
								array_push($SET, $this->pid);
								$this->pid=null;
							}
				if(isset($this->products_name)){
								array_push($SET, $this->products_name);
								$this->products_name=null;
							}
				if(isset($this->products_deadline)){
								array_push($SET, $this->products_deadline);
								$this->products_deadline=null;
							}
				if(isset($this->products_category_id)){
								array_push($SET, $this->products_category_id);
								$this->products_category_id=null;
							}
				if(isset($this->products_group_id)){
								array_push($SET, $this->products_group_id);
								$this->products_group_id=null;
							}
				if(isset($this->products_brand_id)){
								array_push($SET, $this->products_brand_id);
								$this->products_brand_id=null;
							}
				if(isset($this->products_layer)){
								array_push($SET, $this->products_layer);
								$this->products_layer=null;
							}
				if(isset($this->products_upper)){
								array_push($SET, $this->products_upper);
								$this->products_upper=null;
							}
				break;
			case 'products_age':
				if(isset($this->ageid)){
								array_push($SET, $this->ageid);
								$this->ageid=null;
							}
				if(isset($this->pid)){
								array_push($SET, $this->pid);
								$this->pid=null;
							}
				if(isset($this->areaid)){
								array_push($SET, $this->areaid);
								$this->areaid=null;
							}
				if(isset($this->chain_id)){
								array_push($SET, $this->chain_id);
								$this->chain_id=null;
							}
				if(isset($this->products_brand_id)){
								array_push($SET, $this->products_brand_id);
								$this->products_brand_id=null;
							}
				if(isset($this->products_category_id)){
								array_push($SET, $this->products_category_id);
								$this->products_category_id=null;
							}
				if(isset($this->products_group_id)){
								array_push($SET, $this->products_group_id);
								$this->products_group_id=null;
							}
				if(isset($this->products_age_avg)){
								array_push($SET, $this->products_age_avg);
								$this->products_age_avg=null;
							}
				if(isset($this->products_age_avg_total)){
								array_push($SET, $this->products_age_avg_total);
								$this->products_age_avg_total=null;
							}
				if(isset($this->products_age_date)){
								array_push($SET, $this->products_age_date);
								$this->products_age_date=null;
							}
				break;
			case 'products_brand':
				if(isset($this->products_brand_id)){
								array_push($SET, $this->products_brand_id);
								$this->products_brand_id=null;
							}
				if(isset($this->products_brand_description)){
								array_push($SET, $this->products_brand_description);
								$this->products_brand_description=null;
							}
				break;
			case 'products_category':
				if(isset($this->products_category_id)){
								array_push($SET, $this->products_category_id);
								$this->products_category_id=null;
							}
				if(isset($this->products_category_description)){
								array_push($SET, $this->products_category_description);
								$this->products_category_description=null;
							}
				break;
			case 'products_group':
				if(isset($this->products_group_id)){
								array_push($SET, $this->products_group_id);
								$this->products_group_id=null;
							}
				if(isset($this->products_group_description)){
								array_push($SET, $this->products_group_description);
								$this->products_group_description=null;
							}
				break;
			case 'record':
				if(isset($this->recordid)){
								array_push($SET, $this->recordid);
								$this->recordid=null;
							}
				if(isset($this->uid)){
								array_push($SET, $this->uid);
								$this->uid=null;
							}
				if(isset($this->shopid)){
								array_push($SET, $this->shopid);
								$this->shopid=null;
							}
				if(isset($this->pid)){
								array_push($SET, $this->pid);
								$this->pid=null;
							}
				if(isset($this->record_deadline)){
								array_push($SET, $this->record_deadline);
								$this->record_deadline=null;
							}
				if(isset($this->record_intodbtime)){
								array_push($SET, $this->record_intodbtime);
								$this->record_intodbtime=null;
							}
				if(isset($this->record_time)){
								array_push($SET, $this->record_time);
								$this->record_time=null;
							}
				break;
			case 'shop':
				if(isset($this->shopid)){
								array_push($SET, $this->shopid);
								$this->shopid=null;
							}
				if(isset($this->shop_name)){
								array_push($SET, $this->shop_name);
								$this->shop_name=null;
							}
				if(isset($this->chain_id)){
								array_push($SET, $this->chain_id);
								$this->chain_id=null;
							}
				if(isset($this->areaid)){
								array_push($SET, $this->areaid);
								$this->areaid=null;
							}
				if(isset($this->shop_phone)){
								array_push($SET, $this->shop_phone);
								$this->shop_phone=null;
							}
				if(isset($this->shop_lon)){
								array_push($SET, $this->shop_lon);
								$this->shop_lon=null;
							}
				if(isset($this->shop_lat)){
								array_push($SET, $this->shop_lat);
								$this->shop_lat=null;
							}
				if(isset($this->shop_country)){
								array_push($SET, $this->shop_country);
								$this->shop_country=null;
							}
				if(isset($this->shop_city)){
								array_push($SET, $this->shop_city);
								$this->shop_city=null;
							}
				if(isset($this->shop_address)){
								array_push($SET, $this->shop_address);
								$this->shop_address=null;
							}
				break;
			case 'user':
				if(isset($this->uid)){
								array_push($SET, $this->uid);
								$this->uid=null;
							}
				if(isset($this->user_name)){
								array_push($SET, $this->user_name);
								$this->user_name=null;
							}
				if(isset($this->user_phone)){
								array_push($SET, $this->user_phone);
								$this->user_phone=null;
							}
				if(isset($this->user_email)){
								array_push($SET, $this->user_email);
								$this->user_email=null;
							}
				if(isset($this->user_pwd)){
								array_push($SET, $this->user_pwd);
								$this->user_pwd=null;
							}
				if(isset($this->user_hierarchy)){
								array_push($SET, $this->user_hierarchy);
								$this->user_hierarchy=null;
							}
				if(isset($this->patrolpoint_id)){
								array_push($SET, $this->patrolpoint_id);
								$this->patrolpoint_id=null;
							}
				break;
		}
		return $SET;
	}

}

/*
$ActiveRecord =new ActiveRecord();
$ActiveRecord->setTable("products");
$ActiveRecord->pid ="123";
$ActiveRecord->products_name ="hao";
echo $ActiveRecord->action("INSERT");

$ActiveRecord->c_cls_name ="test active record";
$ActiveRecord->setGroupBy("cid");
$ActiveRecord->setJoin("Table","i.i=i");
$ActiveRecord->setWhere("I=1");
$ActiveRecord->setField("FIELD");
$ActiveRecord->setSequence("ORDER BY CON");
$ActiveRecord->setLimit(20,50);
echo $result =$ActiveRecord->action("SELECT");
*/
//echo substr($result, 0,strlen($result)-2);
?>
