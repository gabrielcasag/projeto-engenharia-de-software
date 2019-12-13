<?php
    include_once("../Persistence/LoginDAO.php");
    include_once("../Persistence/connection.php");

    $conexao = new connection();
    $link = $conexao->getCon();

    $login = $_POST['clogin'];
    $senha = $_POST['csenha'];

    $logindao = new LoginDAO();
    $resultado = $logindao->validar($login,$senha,$link);

    if ( $resultado->num_rows > 0 )
    {
        header('Location: ../View/paginaInicial.html');
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
                <h1>Login inválido !!</h1>
                <br><br>
                <label for='voltar'>
                <button style='width:70px;height:30px' onclick='location.href = "."\"../View/index.html\";'  class='float-left submit-button'>Voltar</button>
                </label>
            </div>
            <center>

        </body>
        </center>
        </html>
        ";
    }
?>