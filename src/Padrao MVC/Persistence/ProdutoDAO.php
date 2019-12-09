<?php
    class ProdutoDAO {
        function __construct() {}
        function salvar($produto, $conexao) {
            $sql = "INSERT INTO produto(idProduto, nomeProduto, precoFinal, precoCusto, idFornecedor) VALUES ('".
                null."','".
                $produto->getNome()."','".
                $produto->getPrecoFinal()."','".
                $produto->getPrecoCusto()."',".
                $produto->getIdFornecedor()."','";
            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('produto salvo')</script>";
            } else {
                echo "Erro ao cadastrar o produto: <br>".$conexao->error;
            }
        }
        function buscar($id, $conexao) {
            $sql = "SELECT * FROM Produto WHERE idProduto = '" . $id . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function removerProduto($id, $connect) {        
            $sql = "DELETE FROM Produto WHERE idProduto=".$id;
            
            if ($connect->query($sql) === TRUE) {
                echo "<script> alert('Produto removido!')</script>";
            } else {
                echo "Erro na remoção: " . $connect->error;
            }
        }

        function alterarProduto($produto, $connect) {
            $sql = " UPDATE Produto SET nomeProduto='" . 
            $produto->getNome() . "' ,precoFinal='" . 
            $produto->getPrecoFinal() . "',precoCusto='" . 
            $produto->getPrecoCusto() ."' ,idFornecedor=". 
            $produto->getIdFornecedor()."' WHERE idFornecedor=".$produto->getId();
            if ($connect->query($sql) === TRUE) {
                echo "<script> alert('Fornecedor alterado!')</script>";
            } else {
                echo "Erro na alteracao: " . $connect->error;
            }
        }
    }
 ?>