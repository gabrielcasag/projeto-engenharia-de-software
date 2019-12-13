<?php
    require_once '../Persistence/connection.php';
    require_once '../Model/Fornecedor.php';
    require_once '../Persistence/FornecedorDAO.php';
    
    class TestCadastrarFornecedor extends PHPUnit\Framework\TestCase{

        public function testCadastrarFornecedor(){
            //fazendo conexao com o banco de dados 
            $conexao = new connection();
            $link = $conexao->getCon();

            //criando o objeto do fornecedor a ser inserido
            $fornecedor = new Fornecedor(null, "Adidas", "99586250459", "55686525152", "adidas@gmail.com");
            
            //salvando o novo fornecedor na tabela pela camada persistence
            $fornecedorDAO = new FornecedorDAO();
            $fornecedorDAO->salvar($fornecedor, $link);

            $res = $link->query("SELECT nomeFornecedor, cnpj, telFornecedor, emailFornecedor FROM Fornecedor WHERE nomeFornecedor='Adidas'");
            $reg = $res->fetch_assoc();

            $this->assertEquals("Adidas", $reg['nomeFornecedor'], "Nome errado");
            $this->assertEquals("99586250459", $reg['cnpj'], "CNPJ errado");
            $this->assertEquals("55686525152", $reg['telFornecedor'], "Telefone errado");
            $this->assertEquals("adidas@gmail.com", $reg['emailFornecedor'], "Email errado");
        }
        
    }
    
?>