<?php
	
	class Utilities
	{
		private $filterPattern;
		
		function __construct()
		{
			$this->filterPattern = array();	
		}
		
		function getRandom()
		{
			return strtotime(date("Y-m-d H:i:s"));
		}
		
		function getExtension($string)
		{
			$ext = "";
			try{
				$parts = explode(".", (string)$string);
				$ext = strtolower($parts[count($parts)-1]);
			}catch(Exception $c){
				$ext = "";
			}
			return $ext;
		}
		
		/*
		 * Set Pattern for the FilterFunction
		*/
		function setPattern($array)
		{
			$this->filterPattern = $array;
		}
		
		/*
		 * Remove Special Chars
		*/
		function filterChars($string)
		{
			try{
				foreach($this->filterPattern as $key){
					$string = str_replace($key, "", (string)$string);
				}
			}catch(Exception $c){
				
			}
			return $string;
		}
		
		/*
		 * Display DateFormat
		*/
		function dateDisplayFormat($date)
		{
			return date("M-d-Y", strtotime((string)$date));
		}
		
		function dateTimeDisplayFormat($date)
		{
			return date("M-d-Y H:i:s", strtotime((string)$date));
		}
		
		/*
		 * Mysql DateFormat
		*/
		function dateInsertFormat($date)
		{
			return date("Y-m-d H:i:s", strtotime((string)$date));
		}
		
		function encodeString($string)
		{
			return base64_encode((string)$string);
		}
		
		function decodeString($string)
		{
			return base64_decode((string)$string);
		}
		
		function priceFormat($price){
			$price = round(doubleval($price), 3);
			$price = ($price * 1.000) / (doubleval(1.000));
			$parts = explode(".", (string)$price);
			if(count($parts) == 2){
				$string = $parts[0];
				if(strlen($parts[1]) == 1){
					$string .= "." . $parts[1] . "00";
				}else if(strlen($parts[1]) == 2){
					$string .= "." . $parts[1] . "0";
				}else if(strlen($parts[1]) == 3){
					$string .= "." . $parts[1] . "";
				}
			}else{
				$string = $parts[0] . ".000";
			}
			return $string;
		}

		function addFilter($string){
			return addslashes((string)$string);
		}
		
		function encode($originalStr){
			$encodedStr = (string)$originalStr;
			$num = mt_rand(1, 6);
			for($i = 1; $i <= $num; $i++)
			{
				$encodedStr = base64_encode($encodedStr);
			}
			$seed_array = array('S','H','A','F','I','Q');
			$encodedStr = $encodedStr . "+" . $seed_array[$num];
			$encodedStr = base64_encode($encodedStr);
			return urlencode($encodedStr);
		}
		
		function decode($decodedStr){
			$decodedStr = urldecode((string)$decodedStr);
			$seed_array = array('S','H','A','F','I','Q');
			$decoded = base64_decode($decodedStr);
			$parts = explode("+", (string)$decoded, 2);
			$decoded = $parts[0];
			$letter = isset($parts[1]) ? $parts[1] : '';
			$foundIdx = 0;
			for($i = 0; $i < count($seed_array); $i++)
			{
				if($seed_array[$i] == $letter){
					$foundIdx = $i;
					break;
				}
			}
			for($j = 1; $j <= $foundIdx; $j++)
			{
				$decoded = base64_decode($decoded);
			}
			return $decoded;
		} 
		
		function getBaseUrl(){
			$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
			$list = explode('/', $url);
			$comp = array();
			foreach($list as $ind=>$val){
				if(trim($val) != ''){
					$comp[] = $val;
				}
			}
			$baseUrl = '';
			for($i = 0; $i < count($comp); $i++){
				if(strtolower($comp[$i]) != 'administrator'){
					$baseUrl .= '/' . $comp[$i];
				}else{
					break;
				}
			}
			return $baseUrl;
		}
	}
	
?>