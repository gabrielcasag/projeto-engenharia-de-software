<?php
	class Produto{
		var $id;
        var $nome;
        var $precoFinal;
        var $precoCusto;
        var $idFornecedor;
		
		function __construct($vid, $vnome, $vprecoFinal, $vprecoCusto, $vidFornecedor) {
			$this->id = $vid;
            $this->nome = $vnome;
            $this->precoFinal = $vprecoFinal;
            $this->precoCusto = $vprecoCusto;
            $this->idFornecedor = $vidFornecedor;
		}
		
		/*function imprimir() {
			echo "id: ".($this->id)."<br />Nome: ".($this->nome)."<br />PrecoFinal: ".($this->precoFinal)."<br />PrecoCusto: ".($this->precoCusto)."<br />idFornecedor: ".($this->idFornecedor)."<br />";
		}*/
		
		function getId() {return $this->id;}
		function getNome() {return $this->nome;}
		function getPrecoFinal() {return $this->precoFinal;}
        function getPrecoCusto() {return $this->precoCusto;}
        function getIdFornecedor() {return $this->idFornecedor;}
	}
?>