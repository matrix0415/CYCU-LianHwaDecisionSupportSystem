<?php
	
class logHandling{
	
	private $PrintOrNot =false;	// whether print or write into log; ture=print, false=write
	private $logFileLocation =SITE_ROOT;
	private $errorState =true;
	private $warningState =true;
	private $noticeState =true;
	private $io =false;
	
	public function settingLogFileLocation($logFileLocation=''){		// setting log file location
		if($logFileLocation !='')
			$this->logFileLocation =$logFileLocation;	
	}
	
	public function settingLogState($errorState, $warningState, $noticeState){		// whether write(print) the log or not
		
		if(!$errorState)
			$this->errorState =$errorState;
		if(!$warningState)
			$this->warningState =$warningState;
		if(!$noticeState)
			$this->noticeState =$noticeState;	
	}
	
	public function settingLogPrintOrWrite($printOrWrite=''){
		switch($printOrWrite){
			case 'write':
				$this->PrintOrNot =false;
				break;
			case 'print':
				$this->PrintOrNot =true;
				break;
		}
	}
	
	public function buildLog(){
		
		if($this->io==false){
			include_once SITE_FUNCTION.'fileProcesses/iofile.php';
			$this->io =new iofile();
		}
		$result =$this->io->buildFolder($this->logFileLocation.'LOG/');
		if($result){	// create folder fail
			if($this->errorState){	// if write/print the error == true
				if($this->PrintOrNot)
					echo TIME.'::'.SITE_FUNCTION.'logHandling.php : MKDIR FAIL;';
				else
					$this->io->wfile(SITE_ROOT.'ERROR.LOG', TIME.'::'.SITE_FUNCTION.'logHandling.php : MKDIR FAIL;');
			}
		}else{	// mkdir sucess!
			$cferesult =$this->io->wfile($this->logFileLocation.'LOG/ERROR.LOG', TIME."::CREATE ERROR LOG!\r\n");
			$cfnresult =$this->io->wfile($this->logFileLocation.'LOG/NOTICE.LOG', TIME."::CREATE NOTICE LOG!\r\n");
			$cfwresult =$this->io->wfile($this->logFileLocation.'LOG/WARNING.LOG', TIME."::CREATE WARNING LOG!\r\n");
			if($this->errorState){	// whether want to log messages or not
				if(!$this->PrintOrNot){	// not Print, write into file
					if($cferesult !=1)
						$this->io->wfile(SITE_ROOT.'ERROR.LOG', TIME.'::'.SITE_FUNCTION.'logHandling.php : CREATE FILE "ERROR.LOG" FAIL, '.$cferesult.";\r\n");
					if($cfwresult !=1)
						$this->io->wfile(SITE_ROOT.'WARNING.LOG', TIME.'::'.SITE_FUNCTION.'logHandling.php : CREATE FILE "WARNING.LOG" FAIL, '.$cfwresult.";\r\n");
					if($cfnresult !=1)
						$this->io->wfile(SITE_ROOT.'NOTICE.LOG', TIME.'::'.SITE_FUNCTION.'logHandling.php : CREATE FILE "NOTICE.LOG" FAIL, '.$cfnresult.";\r\n");
				}else{		// Print
					if($cferesult !=1)
						echo TIME.'::'.SITE_FUNCTION.'logHandling.php : CREATE FILE "ERROR.LOG" FAIL, '.$cferesult.';<br/>';
					if($cfwresult !=1)
						echo TIME.'::'.SITE_FUNCTION.'logHandling.php : CREATE FILE "WARNING.LOG" FAIL, '.$cfwresult.';<br/>';
					if($cfnresult !=1)
						echo TIME.'::'.SITE_FUNCTION.'logHandling.php : CREATE FILE "NOTICE.LOG" FAIL, '.$cfnresult.';<br/>';
					
				}	// if($this->PrintOrNot){
			}	// if($this->errorState){
		}
	}
		
	public function doLog($fileName, $Log, $type){		// whether the user want to Log the messages or not. And write or print the log messages
		
		if($this->io==false){
			include_once SITE_FUNCTION.'fileProcesses/iofile.php';
			$this->io =new iofile();
		}
		if($fileName !='' || $Log !='' || $type){
			$log =TIME.'::'.$fileName.' : '.$Log.';';
			switch($type){
				case 'error':
					if($this->errorState)	// want to log the messages or not
						if($this->PrintOrNot)	// print
							return '<span style="color:red;">ERROR = '.$log.'</span><br/>';
						else	// write
							$this->io->wfile($this->logFileLocation.'LOG/ERROR.LOG', 'ERROR = '.$log."\r\n");
					break;
				case 'warning':
					if($this->warningState)
						if($this->PrintOrNot)
							return '<span style="color:blue;">WARNING = '.$log.'</span><br/>';
						else
							$this->io->wfile($this->logFileLocation.'LOG/WARNING.LOG', 'WARNING = '.$log."\r\n");
					break;
				case 'notice':
					if($this->noticeState)
						if($this->PrintOrNot)
							return 'NOTICE = '.$log.'<br/>';
						else
							$this->io->wfile($this->logFileLocation.'LOG/NOTICE.LOG', 'NOTICE = '.$log."\r\n");
					break;
			}	
		}else		// paramter not enough
			doLog(__FILE__, 'doLog(); Paramter not enough, FileName='.$fileName.', Log='.$Log.', Type='.$type, 'error');
		
	}
		
}
	
	


?>