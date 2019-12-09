<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';
    
    $id = $_POST['cid'];
    $precoFinal = $_POST['cprecof'];
    $precoCusto = $_POST['cprecoc'];
    $idFornecedor = $_POST['cidf'];
    $qtdeProduto = $_POST['cqtde'];
    
    $conexao = new connection();
    $conexao = $conexao->getCon();

    $produto = new Produto($id, $nome, $precoFinal, $precoCusto, $idFornecedor);

    $produtoDAO = new ProdutoDAO();
    $produtoDAO->alterarProduto($produto, $conexao);
	
	header('Location: ../View/paginaInicial.html');
?>