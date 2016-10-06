<?php

	ini_set('default_charset','utf-8'); //************
	define('SITE_URL', "http://".$_SERVER['HTTP_HOST']."/LianHwa/");
	define('SITE_ROOT', dirname(dirname(__FILE__))."/");
	define('SITE_KERNEL',SITE_ROOT."Kernel/");
	define('SITE_FUNCTION',SITE_KERNEL.'functions/');
	define('SITE_VIEW', SITE_ROOT.'View/');
	define('SITE_SMARTY', SITE_VIEW.'smarty/');
	
	define('DATE_NOW', date('Y-m-d'));
	define('TIME_NOW', date('Y-m-d.H:i:s'));
	
	include_once SITE_SMARTY.'Smarty.class.php';
	include_once SITE_FUNCTION.'logHandling.php';
	include_once SITE_KERNEL.'dbo/pdo.php';
	include_once SITE_KERNEL.'dbo/ActiveRecord.php';
	include_once SITE_KERNEL.'module.php';
	
	// smarty
	$smarty = new Smarty();
	$smarty->template_dir=SITE_VIEW.'templates';
	$smarty->compile_dir=SITE_VIEW.'templates_c';
	
	// log
	$logO =new log();
	
	// database
	$dbo =new SQLObject();
	
	// ActiveRecord
	$ar =new ActiveRecord($dbo);
	
	// Module
	$module =new module($ar);
	
	class DBinfo{
		private $dbname ="LianHwa";
		private $dburl ="localhost";
		private $dbacc ="root";
		private $dbpwd ="root";
		
		protected function getDbName(){
			return $this->dbname;
		}
		protected function getDbUrl(){
			return $this->dburl;
		}
		protected function getDbAcc(){
			return $this->dbacc;
		}
		protected function getDbPwd(){
			return $this->dbpwd;
		}
	}
	class log{
		public function __construct(){
			$this->logO =new logHandling();
			$this->logO->settingLogState(true,true,true);
			$this->logO->settingLogPrintOrWrite('print');
		}
	}
	
	//$logO->buildLog();
	//$logO->doLog(__FILE__, 'Error!', 'error');
	//$logO->doLog(__FILE__, 'Warning!', 'warning');
	//$logO->doLog(__FILE__, 'Notice!', 'notice');
	//$logO->doLog(__FILE__, 'doLog(); Paramter not enough, FileName='.$fileName.', Log='.$Log.', Type='.$type, 'error');


?>
