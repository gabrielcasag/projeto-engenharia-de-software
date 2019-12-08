<?php
    class FornecedorDAO {
        function __construct() {}
        function salvar($fornecedor, $conexao) {
            $sql = "INSERT INTO Fornecedor(null, nomeFornecedor, cnpj, telFornecedor, emailFornecedor) VALUES ('".
                $fornecedor->getId()."','".
                $fornecedor->getNome()."','".
                $fornecedor->getCnpj()."','".
                $fornecedor->getTel()."',".
                $fornecedor->getEmail()."','";
            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('fornecedor salvo')</script>";
            } else {
                echo "Erro ao cadastrar o fornecedor: <br>".$conexao->error;
            }
        }
        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM fornecedor WHERE cpf = '" . $cpf . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>