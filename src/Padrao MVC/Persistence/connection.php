<?php
class connection {
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $bd="lojaCalcados";
	private $con=null;
	
	function __construct() {}
	
	function conectar() {
		if($this->con == null) {
			$this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
		}
		if(!$this->con) {
			die("Conexão falhou. $con->conect_error");
		}
	}
	
	function getCon() {
		return $this->con;
	}
	
}
?>