<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';

    $id = $_POST['vid'];

    $conexao = new connection();
    $conexao = $conexao->getCon();

    $produtoDAO = new ProdutoDAO();

    $res = $produtoDAO->buscar();

    header('Location: ../index.php');
?>
