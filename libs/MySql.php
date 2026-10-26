<?php	 	
/**
 * Modernized MySQLi Database Abstraction Layer
 * Fully compatible with PHP 8.4.2 & PHP 8.x
 */
class MySql
{
	private $dbUser;
	private $dbPass;
	private $dbName;
	private $dbHost;
	public $dbConnection;
	private $errorString;
	private $filter;		
	public static $instance;
	public $query;
	public $newCon;
	
	function __construct()
	{
		$this->dbConnection = null;
		$this->filter = true;	
		$this->newCon = false;
		$this->errorString = "";
		// Suppress unhandled exceptions from mysqli in PHP 8.1+ to keep legacy error handling working
		if (function_exists('mysqli_report')) {
			@mysqli_report(MYSQLI_REPORT_OFF);
		}
	}
	
	function setNew()
	{
		$this->newCon = true;
	}
	
	function noFilter()
	{
		$this->filter = false;
	}
	
	function setError($string)
	{
		$this->errorString = (string)$string;
	}
	
	function getError()
	{
		return $this->errorString;
	}
	
	function connect()
	{
		if ($this->dbConnection instanceof mysqli) {
			return $this->dbConnection;
		}

		$configPath = defined('CONST_BASEDIR') ? CONST_BASEDIR . '/config.php' : dirname(dirname(__FILE__)) . '/config.php';
		if (!file_exists($configPath)) {
			$configPath = dirname(__FILE__) . '/../config.php';
		}
		
		$config = array();
		if (file_exists($configPath)) {
			require_once($configPath);
		}

		$this->dbUser = isset($config["databaseUser"]) ? $config["databaseUser"] : "alfine_essaren_ese";
		$this->dbPass = isset($config["databasePass"]) ? $config["databasePass"] : "XPGCN3qVZYy3";
		$this->dbName = isset($config["databaseName"]) ? $config["databaseName"] : "alfine_essaren_ese";
		$this->dbHost = isset($config["databaseHost"]) ? $config["databaseHost"] : "localhost";

		$this->dbConnection = @mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
		
		if (!$this->dbConnection) {
			$this->setError(mysqli_connect_error());
			return null;
		}

		@mysqli_set_charset($this->dbConnection, "utf8mb4");
		self::$instance = $this->dbConnection;
		return $this->dbConnection;
	}
	
	function getInstance()
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		return $this->dbConnection;
	}
	
	function close()
	{
		if ($this->dbConnection) {
			@mysqli_close($this->dbConnection);
			$this->dbConnection = null;
		}
	}	
	
	function fetchAll($query)
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		$this->query = $query;
		$resultSet = array();

		if (!$this->dbConnection) {
			return $resultSet;
		}

		$result = @mysqli_query($this->dbConnection, $query);
		if ($result && !is_bool($result)) {
			$fields = array();
			$fieldProperties = mysqli_fetch_fields($result);
			foreach ($fieldProperties as $prop) {
				$fields[] = $prop->name;
			}
			$fieldsLength = count($fields);

			while ($row = mysqli_fetch_row($result)) {
				$record = array();
				for ($j = 0; $j < $fieldsLength; $j++) {
					$val = isset($row[$j]) ? $row[$j] : null;
					$record[$fields[$j]] = ($this->filter && $val !== null) ? $this->removeFilter($val) : $val;
				}
				$resultSet[] = $record;
			}
			mysqli_free_result($result);
		} else {
			if ($this->dbConnection) {
				$this->setError(mysqli_error($this->dbConnection));
			}
		}
		return $resultSet;
	}
	
	function insert($options, $table)
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		if (!is_array($options) || empty($options) || !$this->dbConnection) {
			return false;
		}

		$fieldList = array();
		$valueList = array();
		foreach ($options as $key => $val) {
			$fieldList[] = "`" . str_replace("`", "``", $key) . "`";
			$escapedVal = mysqli_real_escape_string($this->dbConnection, (string)$val);
			$valueList[] = "'{$escapedVal}'";
		}

		$queryString = "INSERT INTO `{$table}` (" . implode(",", $fieldList) . ") VALUES (" . implode(",", $valueList) . ")";
		$this->query = $queryString;
		
		$result = @mysqli_query($this->dbConnection, $queryString);
		if (!$result) {
			$this->setError("Insert error: " . mysqli_error($this->dbConnection));
			return false;
		}
		return true;
	}
	
	function insertMulti($fields, $values, $table)
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		if (!is_array($fields) || !is_array($values) || empty($values) || !$this->dbConnection) {
			return false;
		}

		$fieldList = array();
		foreach ($fields as $val) {
			$fieldList[] = "`" . str_replace("`", "``", $val) . "`";
		}
		$fieldString = implode(",", $fieldList);

		$valueRows = array();
		foreach ($values as $row) {
			$escapedRow = array();
			foreach ($row as $val) {
				$escapedRow[] = "'" . mysqli_real_escape_string($this->dbConnection, (string)$val) . "'";
			}
			$valueRows[] = "(" . implode(",", $escapedRow) . ")";
		}

		$queryString = "INSERT INTO `{$table}` ({$fieldString}) VALUES " . implode(",", $valueRows);
		$this->query = $queryString;
		$result = @mysqli_query($this->dbConnection, $queryString);
		if (!$result) {
			$this->setError("InsertMulti error: " . mysqli_error($this->dbConnection));
			return false;
		}
		return true;
	}
	
	function update($options, $table, $condition)
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		if (!is_array($options) || empty($options) || !$this->dbConnection) {
			return false;
		}

		$updates = array();
		foreach ($options as $key => $val) {
			$escapedVal = mysqli_real_escape_string($this->dbConnection, (string)$val);
			$updates[] = "`" . str_replace("`", "``", $key) . "`='{$escapedVal}'";
		}

		$queryString = "UPDATE `{$table}` SET " . implode(",", $updates);
		if (!empty($condition)) {
			$queryString .= " WHERE {$condition}";
		}
		$this->query = $queryString;
		
		$result = @mysqli_query($this->dbConnection, $queryString);
		if (!$result) {
			$this->setError("Update error: " . mysqli_error($this->dbConnection));
			return false;
		}
		return true;
	}
	
	function delete($table, $condition)
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		if (!$this->dbConnection) {
			return false;
		}
		$queryString = "DELETE FROM `{$table}`";
		if (!empty($condition)) {
			$queryString .= " WHERE {$condition}";
		}
		$this->query = $queryString;
		$result = @mysqli_query($this->dbConnection, $queryString);
		if (!$result) {
			$this->setError("Delete error: " . mysqli_error($this->dbConnection));
			return false;
		}
		return true;
	}
	
	function execute($query)
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		if (!$this->dbConnection) {
			return false;
		}
		$this->query = $query;
		$result = @mysqli_query($this->dbConnection, $query);
		if (!$result) {
			$this->setError("Execute error: " . mysqli_error($this->dbConnection));
			return false;
		}
		return $result;
	}
	
	function lastInsertId()
	{
		if (!$this->dbConnection) {
			$this->connect();
		}
		return $this->dbConnection ? mysqli_insert_id($this->dbConnection) : 0;
	}
	
	function affectedRows($instance = null)
	{
		$link = $instance ?: $this->dbConnection;
		return $link ? mysqli_affected_rows($link) : 0;
	}
	
	function addFilter($string)
	{
		if ($this->dbConnection) {
			return mysqli_real_escape_string($this->dbConnection, (string)$string);
		}
		return addslashes((string)$string);
	}
	
	function removeFilter($string)
	{			
		return stripslashes((string)$string);			
	}	
	
	function escapeHtml($text)
	{
		return strip_tags((string)$text);
	}
}
?>