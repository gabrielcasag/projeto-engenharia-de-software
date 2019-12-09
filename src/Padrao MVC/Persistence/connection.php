<?php
class connection {
	private $servername="127.0.0.1";
	private $username="root";
	private $password="";
	private $bd="lojacalcados";
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