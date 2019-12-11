<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';

    $id = $_POST['cid'];

    $conexao = new connection();
    $conexao = $conexao->getCon();

    $fornecedor = new FornecedorDAO();

    $res = $fornecedor->buscar($id,$conexao);

    if ($res->num_rows > 0 )
    {
        echo 
        "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='../CSS/cadastrarFornecedor.css'>
            <meta charset='utf-8'>
            <title>TripleG Store</title>
        </head>
        <center>
        <body>
            <div class='frame' >
                <h1>Fornecedor Encontrado</h1>
                <br>
                <label for='text'>
                    ID : " .$res['idFornecedor'] . "
                </label>
                <label for='nome'>
                    Nome: " .$res['nomeFornecedor'] ."
                </label>
                <label for='cnpj'>
                    CNPJ: " .$res['cnpj'] ."
                </label>
                <label for='tel'>
                    Telefone: " .$res['telFornecedor'] ."
                </label>
                <label for='email'>
                    Email: " .$res['emailFornecedor'] ."
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
                <h1>Fornecedor Nao Encontrado !!</h1>
            </div>
        </body>
        </center>
        </html>
        ";
    }
    
    header('Location: ../View/paginaInical.html');
?>
