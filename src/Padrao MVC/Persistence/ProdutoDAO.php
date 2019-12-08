<?php
    class ProdutoDAO {
        function __construct() {}
        function salvar($produto, $conexao) {
            $sql = "INSERT INTO produto(null, nomeProduto, precoFinal, precoCusto, idFornecedor) VALUES ('".
                $produto->getId()."','".
                $produto->getNome()."','".
                $produto->getPrecoFinal()."','".
                $produto->getPrecoCusto()."',".
                $produto->getIdFuncionario()."','";
            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('produto salvo')</script>";
            } else {
                echo "Erro ao cadastrar o produto: <br>".$conexao->error;
            }
        }
        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM Produto WHERE cpf = '" . $cpf . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>