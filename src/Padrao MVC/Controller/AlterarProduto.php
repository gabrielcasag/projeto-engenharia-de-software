<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';
    $id = $_POST['id'];
    $precoFinal = $_POST['precoFinal'];
    $precoCusto = $_POST['precoCusto'];
    $idFornecedor = $_POST['idFornecedor'];
    $tamanhoProduto = $_Post['tamanhoProduto'];
    $qtdeProduto = $_Post['qtdeProduto'];
    $conexao = new connection();
    $conexao = $conexao->getCon();
    $produto = new Produto($id, $nome, $precoFinal, $precoCusto, $idFornecedor);
    $produtoDAO = new ProdutoDAO();
    $produtoDAO->removerProduto($id, $conexao);
	
	header('Location: ../index.php');
?>