<?php

class User extends MySql{
	private $authId;
	private $username;
	private $password;
	public $userID;
	public $userEmail;
	public $userName;
	public $userApprove;

	function userLogin($array){
		$this->username = isset($array["username"]) ? $array["username"] : '';
		$this->password = isset($array["password"]) ? $array["password"] : '';
	
		$query = "SELECT * FROM `clients` WHERE `username`='".$this->addFilter($this->username)."'";
		$rec = $this->fetchAll($query);
	
		if(is_array($rec) && count($rec) > 0){
			$password = $this->password;
			if($password == $rec[0]["password"]){
				$this->userID = $rec[0]["client_id"];
				$this->userEmail = $rec[0]["email"];
				$this->userName = $rec[0]["username"];
				$this->userApprove = $rec[0]["aprove"];
				return true;
			}	
		}		
		return false;
	}

	function getUserEmail($email){
		$safe_id = (int)$email;
		$query = "SELECT * FROM `clients` WHERE `client_id`={$safe_id}";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();
	}

	function approvedUser($username)
	{
		$safe_uname = $this->addFilter($username);
		$query = "SELECT * FROM `clients` WHERE `username`='{$safe_uname}' AND `aprove`=1";
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();
	}	
		
	function getLoggedData($email)
	{
		$safe_email = $this->addFilter($email);
		$query = "SELECT * FROM `clients` WHERE `email`='{$safe_email}'";		
		$rec = $this->fetchAll($query);
		return is_array($rec) ? $rec : array();
	}	
}
?>