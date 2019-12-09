<?php
    class EstoqueDAO {
        function __construct() {}
        function salvar($estoque, $conexao) {
            $sql = "INSERT INTO produto(idProduto, idFornecedor, tamProduto, qtdeProduto) VALUES ('".
                $estoque->getIdProduto()."','".
                $estoque->getIdFornecedor()."','".
                $estoque->getTamanhoProduto()."','".
                $estoque->getQuantidadeProduto()."',";
            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('Estoque salvo')</script>";
            } else {
                echo "Erro ao cadastrar o Estoque: <br>".$conexao->error;
            }
        }
        function consultar($nome, $conexao) {
            $sql = "SELECT * FROM Estoque WHERE nomeProduto = '" . $nome . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>