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
		
		function getId() {return $this->id;}
		function getNome() {return $this->nome;}
		function getCnpj() {return $this->cnpj;}
        function getTel() {return $this->tel;}
        function getEmail() {return $this->email;}
	}
?>