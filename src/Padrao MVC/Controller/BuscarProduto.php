<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';

    $id = $_POST['vid'];

    $conexao = new connection();
    $conexao = $conexao->getCon();

    $produtoDAO = new ProdutoDAO();

    $res = $produtoDAO->buscar();

    if ($res->num_rows > 0 )
    {
        echo 
        "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='../CSS/cadastrarProduto.css'>
            <meta charset='utf-8'>
            <title>TripleG Store</title>
        </head>
        <center>
        <body>
            <div class='frame' >
                <h1>Produto Encontrado</h1>
                <br>
                <label for='text'>
                    ID : " .$res['idProduto'] . "
                </label>
                <label for='nome'>
                    Nome: " .$res['nomeProduto'] ."
                </label>
                <label for='precofinal'>
                    Preço Final: " .$res['precoFinal'] ."
                </label>
                <label for='precocusto'>
                    Preço Custo: " .$res['precoCusto'] ."
                </label>
                <label for='id'>
                    ID do Fornecedor: " .$res['idFornecedor'] ."
                </label>
            </div>
        </body>
        </center>	
        </html>
        "
    }
    else
    {
        echo 
        "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='../CSS/cadastrarProduto.css'>
            <meta charset='utf-8'>
            <title>TripleG Store</title>
        </head>
        <center>
        <body>
            <div class='frame'>
                <br>
                <h1>Produto Nao Encontrado !!</h1>
            </div>
        </body>
        </center>
        </html>
        "
    }
    
    header('Location: ../index.php');
?>
