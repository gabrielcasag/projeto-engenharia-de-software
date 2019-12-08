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
		
		function imprimir() {
			echo "id: ".($this->id)."<br />Nome: ".($this->nome)."<br />cpf: ".($this->cpf)."<br />Telefone: ".($this->tel)."<br />Email: ".(this->email)."<br />Endereco: ".($this->endereco)."<br />Login: ".($this->login)."<br />Senha: ".(this->senha)."<br />;
		}
		
		function getId() {return $this->id;}
		function getNome() {return $this->nome;}
		function getCpf() {return $this->cpf;}
        function getTel() {return $this->tel;}
		function getEmail() {return $this->email;}
		function getEndereco() {return $this->endereco;}
        function getLogin() {return $this->login;}
        function getSenha() {return $this->senha;}
		
		function setid($vid) {$this->id = $vid;}
		function setNome($vnome) {$this->nome = $vnome;}
		function setCpf($vcpf) {$this->cpf = $vcpf;}
        function setTel($vtel) {$this->tel = $vtel;}
		function setEmail($vemail) {$this->email = $vemail;}
		function setEndereco($vendereco) {$this->endereco = $vendereco;}
        function setTel($vlogin) {$this->login = $vlogin;}
        function setEmail($vsenha) {$this->email = $vsenha;}
	}
?>