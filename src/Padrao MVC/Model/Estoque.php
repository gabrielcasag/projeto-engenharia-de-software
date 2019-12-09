<?php
// Model do Estoque

class Estoque {

    private $idProduto;
    private $idFornecedor;
    private $tamanhoProduto;
    private $qtdeProduto;
    

    function __construct($vidProduto="",$vidFornecedor="",$vtam="",$vqtde=""){
        $this->idProduto = $vidProduto;
        $this->idFornecedor;
        $this->tamanhoProduto = $vtam;
        $this->qtdeProduto = $vqtde;
    }

    function getIdProduto(){
		return $this->idProduto;
    }

    function getIdFornecedor(){
		return $this->idFornecedor;
    }

    function getTamanhoProduto(){
		return $this->tamanhoProduto;
    }

    function getQtdeProduto(){
		return $this->qtdeProduto;
	  }

    function setIdProduto( $vid ){
		$this->idProduto = $vid;
    }

    function setIdFornecedor( $vid ){
		$this->idFornecedor = $vid;
    }

    function setTamanhoProduto( $vtam ){
	    $this->tamanhoProduto = $vtam;
    }

    function setQtdeProduto( $vqtd ){
		$this->qtdeProduto = $vqtd;
	}
}
?>