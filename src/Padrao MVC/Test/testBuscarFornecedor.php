<?php
    require_once '../Persistence/connection.php';
    require_once '../Model/Fornecedor.php';
    require_once '../Persistence/FornecedorDAO.php';
    
    class TestBuscarFornecedor extends PHPUnit\Framework\TestCase{

        public function testBuscarFornecedor(){
            //fazendo conexao com o banco de dados 
            $conexao = new connection();
            $link = $conexao->getCon();
            
            //buscando o fornecedor na tabela pela camada persistence
            $fornecedorDAO = new FornecedorDAO();
            $res = $fornecedorDAO->buscar(1,$link);

            $this->assertEquals(1, $reg['idFornecedor'], "Id errado");
        }
        
    }
    
?>