<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';

    //recebendo os dados
    $id = $_POST['cid'];
    
    //fazendo conexao com o banco de dados
    $conexao = new connection();
    $conexao = $conexao->getCon();  
    
    //instanciando um dao para fazer a operacao no bd
    $fornecedor = new FornecedorDAO();
    $resultado = $fornecedor->buscar($id,$conexao);
    
    //se o resultado da query tiver pelo menos uma linha mostra uma tela de sucesso     
    if ( $obj = mysqli_fetch_assoc($resultado) )
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
                <h1>Fornecedor encontrado!!</h1><br> ".
                "<h2> ID: " .$obj["idFornecedor"]. " </h2:>".
                "<h2> Nome: " .$obj["nomeFornecedor"]. " </h2>".
                "<h2> Email: " .$obj["emailFornecedor"]. " </h2>".
                "<br><br>
                <label for='voltar'>
                <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                </label>
            </div>
            <center>

        </body>
        </center>
        </html>
        ";

        
    }else//se nao mostra uma tela de erro
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
                <h1>Erro ao buscar fornecedor!!</h1>
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
?>
