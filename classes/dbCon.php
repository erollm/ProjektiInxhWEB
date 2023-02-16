<?php
class dbCon{
private $con = null;
private $servername = "localhost";
private $db = "pizza";
private $username = "root";
private $password = "";

public function connectDB(){
	try{
		$this->con = new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username, $this->password);
		$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->con->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);
	}
	catch(PDOException $e){
		die("Lidhja deshtoi: ".$e->getMessage());
	}
	return $this->con;
  }
}
?>