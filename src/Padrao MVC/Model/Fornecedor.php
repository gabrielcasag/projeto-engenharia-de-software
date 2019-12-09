<?php
	class Fornecedor{
		var $id;
		var $nome;
		var $cnpj;
        var $tel;
        var $email;
		
		function __construct($vid, $vnome, $vcnpj, $vtel, $vemail) {
			$this->id = $vid;
			$this->nome = $vnome;
			$this->cnpj = $vcnpj;
            $this->tel = $vtel;
            $this->email = $vemail;
		}
		
		function imprimir() {
			echo "id: ".($this->id)."<br />Nome: ".($this->nome)."<br />Cnpj: ".($this->cnpj)."<br />Telefone: ".($this->tel)."<br />Email: ".(this->email)."<br />";
		}
		
		function getId() {return $this->id;}
		function getNome() {return $this->nome;}
		function getCnpj() {return $this->cnpj;}
        function getTel() {return $this->tel;}
        function getEmail() {return $this->email;}
		
		function setId($vid) {$this->id = $vid;}
		function setNome($vnome) {$this->nome = $vnome;}
		function setCnpj($vcnpj) {$this->cnpj = $vcnpj;}
        function setTel($vtel) {$this->tel = $vtel;}
        function setEmail($vemail) {$this->email = $vemail;}
	}
?>