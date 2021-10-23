<?php 
class Koneksi{	//class
 
	var $host = "localhost";	//property
	var $username = "root";
	var $password = "";
	var $database = "lspp_library_crud";
	
	protected $conn;
 
	function __construct(){		//method
		if (!isset($this->conn)) {
			$this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
		}
		if (!$this->conn) {
			echo"Koneksi Gagal";
		}
		return $this->conn;
	}
} 
 
?>