<?php
	
	date_default_timezone_set("Asia/Calcutta");
	if(!defined("CONST_BASEDIR")){
		define("CONST_BASEDIR", dirname(dirname(__FILE__)));
	}
	if(!defined("CONST_LIBRARY_FOLDER")){
		define('CONST_LIBRARY_FOLDER', CONST_BASEDIR.'/ese_adm_ais/libs');
	}
	if(session_status() === PHP_SESSION_ACTIVE){
		$_SESSION['CONST_BASEDIR'] = CONST_BASEDIR;
	}
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	spl_autoload_register(function ($className) {
		if(!class_exists($className, false)){
			$parts = explode("_", $className);			
			if(count($parts) == 1){
				$folder = CONST_LIBRARY_FOLDER . "/" . $className . ".php";
			}else{
				$folder = CONST_LIBRARY_FOLDER . "/";
				for($i=0; $i<count($parts)-1; $i++){
					$folder .= strtolower($parts[$i]) . "/";					
				}
				$folder .= $parts[count($parts)-1] . ".php";
			}
			if(file_exists($folder)){
				include_once($folder);
			} elseif(file_exists(CONST_BASEDIR . '/libs/' . $className . '.php')) {
				include_once(CONST_BASEDIR . '/libs/' . $className . '.php');
			}
		}
	});

	function seoTitle($string){
		$string = strtolower((string)$string);
		$string = preg_replace('/[^a-zA-Z0-9\s]+/', '', $string);
		$string = preg_replace('/[\s]+/', '-', $string);
		return strtolower($string);
	}
?>