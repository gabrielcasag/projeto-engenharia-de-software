<?php
    class Estoque {

        private $idProduto;
        private $idFornecedor;
        private $tamanhoProduto;
        private $qtdeProduto;
        

        function __construct($vidProduto,$vidFornecedor,$vtam,$vqtde){
            $this->idProduto = $vidProduto;
            $this->idFornecedor = $vidFornecedor;
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

    }
?>