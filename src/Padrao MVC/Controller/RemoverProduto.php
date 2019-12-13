<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';

    $id = $_POST['cid'];

    $conexao = new connection();
    $conexao = $conexao->getCon();

    $produtoDAO = new ProdutoDAO();
    $produtoDAO->removerProduto($id, $conexao);
?>