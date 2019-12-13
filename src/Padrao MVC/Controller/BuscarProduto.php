<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';

    //capturando dados 
    $id = $_POST['cid'];
    
    $conexao = new connection();
    $conexao = $conexao->getCon();

    $produtoDAO = new ProdutoDAO();

    $resultado = $produtoDAO->buscar($id,$conexao);

    if  ( $obj = mysqli_fetch_assoc($resultado) )
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
                <h3> ID : " .$obj['idProduto'] . "</h3>
                <h3> Nome: " .$obj['nomeProduto'] ."</h3>
                <h3> Preço Final: " .$obj['precoFinal'] ."</h3>
                <h3> Preço Custo: " .$obj['precoCusto'] ."</h3>
                <h3> ID do Fornecedor: " .$obj['idFornecedor'] ."</h3>
                <br><br>
                <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
            </div>
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
            <link rel='stylesheet' href='../CSS/cadastrarProduto.css'>
            <meta charset='utf-8'>
            <title>TripleG Store</title>
        </head>
        <center>
        <body>
            <div class='frame'>
                <br>
                <h1>Produto Nao Encontrado !!</h1>
                <br><br>
                <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
            </div>
        </body>
        </center>
        </html>
        ";
    }
    
?>
