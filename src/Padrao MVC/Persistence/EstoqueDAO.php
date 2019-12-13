<?php
    class EstoqueDAO {
        //construtor .. nada a fazer aqui
        function __construct() {}

        //funcao para salvar no estoque o produto cadastrado
        function salvar($estoque, $conexao) {
            $sql = "INSERT INTO Estoque(idFornecedor, idProduto, qtdeProduto, tamanhoProduto) VALUES ('". 
            $estoque->getIdFornecedor()."','".
            $estoque->getIdProduto()."','".
            $estoque->getQtdeProduto()."','".
            $estoque->getTamanhoProduto()."')";
            
            //se a query for realizada com sucesso imprime uma mensagem de sucesso
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
                        <h1>Produto inserido no estoque !!</h1>
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
                        <h1>Erro ao cadastrar produto no estoque!!</h1>"
                        .$conexao->error."
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/cadastrarProduto.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
                </body>
                </center>
                </html>
                ";
            }
        }

        // busca no estoque um produto pelo seu nome
        function consultar($nome, $conexao) {
            $sql = "SELECT * FROM Estoque WHERE nomeProduto =" . $nome;
            $resultado = mysqli_query($conexao,$sql);
            return $resultado;
        }
    }
 ?>
