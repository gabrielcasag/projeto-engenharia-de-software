<?php
    class ProdutoDAO {
        //construtor.. nada a fazer aqui
        function __construct() {}

        //funcao para salvar um produto na tabela
        function salvar($produto, $conexao) {
            $sql = "INSERT INTO Produto(idProduto, nomeProduto, precoFinal, precoCusto, idFornecedor) VALUES (null,'". 
            $produto->getNome()."','".
            $produto->getPrecoFinal()."','".
            $produto->getPrecoCusto()."','".
            $produto->getIdFornecedor()."')";
            
            mysqli_query($conexao,$sql);
            if( mysqli_affected_rows( $conexao ) > 0){
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Produto inserido !!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";
            }
            else 
            {
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Erro ao cadastrar produto !!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";
            }
        }

        function buscar($id, $conexao) {
            $sql = "SELECT * FROM Produto WHERE idProduto =" .$id;
            $resultado = mysqli_query($conexao,$sql);
            return $resultado;
        }

        function buscarNome($nome, $conexao) {
            $sql = "SELECT idProduto FROM Produto WHERE nomeProduto =" .$nome;
            $resultado = mysqli_query($conexao,$sql);
            if ( $resultado )
            {
                echo "deu certo";
            }else{
                echo "deu errado";
            }
            
            return $id["idProduto"];
        }

        function removerProduto($id, $conexao) {        
            $sql = "DELETE FROM Produto WHERE idProduto=".$id;
            
            mysqli_query($conexao,$sql);

            if( mysqli_affected_rows( $conexao ) > 0){
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Produto removido com sucesso!!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";
            } else {
                echo 
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Erro na remocao do produto!!</h1><br>"
                        .$conexao->error."
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                "; 
        }
    }

        function alterarProduto($produto, $conexao) {
            $sql = "UPDATE Produto SET nomeProduto='". $produto->getNome() . 
            "',precoFinal='".$produto->getPrecoFinal()."',precoCusto='" . $produto->getPrecoCusto() . 
            "',idFornecedor='" . $produto->getIdFornecedor() . 
            "'WHERE idProduto=" .$produto->getId();

            mysqli_query($conexao,$sql);
            if( mysqli_affected_rows( $conexao ) > 0){
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Produto alterado com sucesso!!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";
            } else {
                echo 
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Erro ao alterar produto!!</h1><br>"
                        .$conexao->error."
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";
            }
        }
    }

?>