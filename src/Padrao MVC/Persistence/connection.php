<?php
class connection {
	//atributos do banco de dados
	private $servername="127.0.0.1";
	private $username="root";
	private $password="";
	private $bd="lojacalcados";
	private $con=null;
	
	//construtor que inicia a conexao com o bd	
	function __construct() {
		if($this->con == null) {
			$this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
		}
		if(!$this->con) {
			die("Conexão falhou");
		}
	}
	
	//funcao para retornar o "link" da conexao
	function getCon() {
		return $this->con;
	}
	
}
?>