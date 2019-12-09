<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';
    $nome = $_POST['nome'];
    $precoFinal = $_POST['precoFinal'];
    $precoCusto = $_POST['precoCusto'];
    $idFornecedor = $_POST['idFornecedor'];
    $conexao = new connection();
    $conexao = $conexao->getCon();
    $produto = new Produto(null, $nome, $precoFinal, $precoCusto, $idFornecedor);
    $produtoDAO = new ProdutoDAO();
    $produtoDAO->salvar($produto, $conexao);
	
	header('Location: ../index.php');
?>