<?php
    include_once("../Persistence/LoginDAO.php");
    include_once("../Persistence/connection.php");

    $conexao = new connection();
    $conexao->getCon();

    $login = $_POST['clogin'];
    $senha = $_POST['csenha'];

    $logindao = new LoginDAO();
    $resultado = $logindao->validar($login,$senha,$conexao);

    if ( $resultado->num_rows > 0 )
    {
        header('Location: ../View/paginaInicial.html');
    }
    else
    {
        echo "<!DOCTYPE html>
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
            </html>";
    }

?>