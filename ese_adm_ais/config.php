<?php
/**
 * Database Configuration & Legacy Adapter
 * PHP 8.4.2 compatible
 */

class mysqldb {
	var $hostname = "localhost";
	var $username = "alfine_essaren_ese";
	var $password = "XPGCN3qVZYy3";
	var $database = "alfine_essaren_ese";
	var $connection = null;

	function db_connect() {
		if ($this->connection instanceof mysqli) {
			return $this->connection;
		}
		$this->connection = @mysqli_connect($this->hostname, $this->username, $this->password, $this->database); 
		if (!$this->connection) {
			echo 'Connection to database server at: '.$this->hostname.' failed.';
			return false;
		}
		@mysqli_set_charset($this->connection, "utf8mb4");
		return $this->connection;
	}

	function select_db() {
		return $this->db_connect();
	}

	function query($query) {
		$this->db_connect();
		$result = mysqli_query($this->connection, $query);
		if (!$result) {
			die("Query failed: " . htmlspecialchars($query) . "<br><br>" . mysqli_error($this->connection));
		}
		return $result;
	}

	function fetch_array($result) {
		return mysqli_fetch_array($result);
	}

	function num_rows($result) {
		return is_object($result) ? mysqli_num_rows($result) : 0;
	}

	function last_insert_id() {
		return $this->connection ? mysqli_insert_id($this->connection) : 0;
	}

	function kill() {
		if ($this->connection) {
			@mysqli_close($this->connection);
			$this->connection = null;
		}
	}
}
?>
