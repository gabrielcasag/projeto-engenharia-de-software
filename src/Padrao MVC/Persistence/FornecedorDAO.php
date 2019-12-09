<?php
    class FornecedorDAO {
        function __construct() {}
        function salvar($fornecedor, $conexao) {
            $sql = "INSERT INTO Fornecedor(idFornecedor, nomeFornecedor, cnpj, telFornecedor, emailFornecedor) VALUES ('".
                null.
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
        function buscar($cnpj, $conexao) {
            $sql = "SELECT * FROM Fornecedor WHERE cnpj = '" . $cnpj . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function removerFornecedor($id, $connect) {        
            $sql = "DELETE FROM Fornecedor WHERE idFornecedor=".$id;
            
            if ($connect->query($sql) === TRUE) {
                echo "<script> alert('Fornecedor removido!')</script>";
            } else {
                echo "Erro na remoção: " . $connect->error;
            }
        }

        function alterarFornecedor($fornecedor, $connect) {
            $sql = " UPDATE Fornecedor SET nomeFornecedor='" . 
            $fornecedor->getNome() . "' ,cnpj='" . 
            $fornecedor->getCnpj() . "',telFornecedor='" . 
            $fornecedor->getTel() ."' ,emailFornecedor=". 
            $fornecedor->getEmail()."' WHERE idFornecedor=".$fornecedor->getId();
            if ($connect->query($sql) === TRUE) {
                echo "<script> alert('Fornecedor alterado!')</script>";
            } else {
                echo "Erro na alteracao: " . $connect->error;
            }
        }
    }
 ?>