<?php
// using php data object, 2012/5/3, by matrix0415@gmail.com

/**
 * pdo include select, insert, delete, update
 */
class SQLObject extends DBinfo{
	
	private static $db;
	private static $dbname;
	private static $dbacc;
	private static $dbpwd;
	private static $dbhost;
	
	/*
	 *  read config file, have dbname, dbacc, dbpwd, dbhost
	 *  ALERT!!: php.ini -> fopen wrappers most be true!
	 */ 
	public function __construct(){
		$this->dbname =parent::getDbName();
		$this->dbhost =parent::getDbUrl();
		$this->dbacc =parent::getDbAcc();
		$this->dbpwd =parent::getDbPwd();
		
	}
	
	public function QueryCleaner($query){
		$queryExplode =explode(' ',$query);
		$returnQuery ='';
		for($i=1;$i<count($queryExplode);$i++)
			$returnQuery .=$queryExplode[$i].' ';
		return $returnQuery;
	}
	/**
	 * db action, auto connect and include SELECT, INSERT, DELETE, UPDATE, CREATE
	 * ALERT!! SQL QUERY MUST USE CAPTIAL
	 */
	
	public function dbAction($sql, $parameter){
		
		
		if(!empty($sql)){
		
			$sqlARRAY =explode(' ', $sql);		
			
				/*
				case 'MULTITRANSATIONS':	// for multi transations :: insert, pdate, delete
					$sql =$this->QueryCleaner($sql);
						$multiSql =explode(';', $sql);
					$db->beginTransaction();
					$sth =$db->prepare($sql);
					try{								
						$sth->execute($parameter);
						$db->commit();
					}catch(exception $e){
						$db->rollback();
						$result =0;
						echo 123;
					}
					break;
				*/
			switch($sqlARRAY[0]){
				case 'ASSOC':
				case 'SMARTY':
				case 'OBJ':
				case 'COUNT':
					$cleansql =$this->QueryCleaner($sql);
					break;
				default:	// insert, update, delete, show, describe	
					$cleansql =$sql;
					break;
			}
		
			try{	
				// connecting database
				$db =new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, 
							$this->dbacc, $this->dbpwd, 
							array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')
						);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				try{
					$sth =$db->prepare($cleansql);
					$sth->execute($parameter);
					try{
						switch($sqlARRAY[0]){
							case 'ASSOC':
								$result =array();
								$sth->setFetchMode(PDO::FETCH_ASSOC);
								while($row = $sth->fetch()){
									array_push($result, $row);
								}
								break;
							case 'SMARTY':
								$result =$sth->fetch(PDO::FETCH_LAZY);
								break;
							case 'OBJ':
								$result =$sth->fetch(PDO::FETCH_OBJ);
								break;
							case 'COUNT':
								$result =$sth->fetch(PDO::FETCH_ASSOC);
								break;
							default:	// insert, update, delete, show, describe
								unset($sth);
								$result =true;
								break;
						}
					}catch(exception $e){
						$result ='Fetch Faild::::'.$e;
					}
					$db =null;
				}catch(exception $e){
					$result ='Operation Faild::::'.$e.'::::SQL ='.$cleansql.'::::';	
				}			
			}catch(exception $e){	
				$result ='Connection Faild::::'.$e;
			}
		}else{	// if(!empty($sql))
			//echo $log->doLog(__FILE__, 'SQL =Empty', 'error');
			$result =$e;
		}
		return $result;
		
	}	
	
}

?>
