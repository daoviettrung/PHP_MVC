<?php
class DB{
	public $con;
	public $servername;
	public $username="root";
	public $password="";
	public $dbname="MVC_php";
	function __construct(){
		$this->con = mysqli_connect($this->servername,$this->username,$this->password);
		mysqli_select_db($this->con,$this->dbname);
	}
}
?>