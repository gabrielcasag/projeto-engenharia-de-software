<?php
	class Usuario{
		var $id;
		var $nome;
		var $cpf;
        var $tel;
		var $email;
		var $endereco;
		var $login;
		var $senha;
		
		function __construct($vid, $vnome, $vcpf, $vtel, $vmail, $vendereco, $vlogin, $vsenha) {
			$this->id = $vid;
			$this->nome = $vnome;
			$this->cpf = $vcpf;
            $this->tel = $vtel;
			$this->email = $vemail;
			$this->endereco = $vendereco;
			$this->login = $vlogin;
			$this->senha = $vsenha;
		}
		
		function getId() {return $this->id;}
		function getNome() {return $this->nome;}
		function getCpf() {return $this->cpf;}
        function getTel() {return $this->tel;}
		function getEmail() {return $this->email;}
		function getEndereco() {return $this->endereco;}
        function getLogin() {return $this->login;}
        function getSenha() {return $this->senha;}
	}
?>