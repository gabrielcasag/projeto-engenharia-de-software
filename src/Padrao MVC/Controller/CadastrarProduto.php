<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';
    include_once '../Model/Estoque.php';
    include_once '../Persistence/EstoqueDAO.php';
    $nome = $_POST['nome'];
    $precoFinal = $_POST['precoFinal'];
    $precoCusto = $_POST['precoCusto'];
    $idFornecedor = $_POST['idFornecedor'];
    $tamanhoProduto = $_Post['tamanhoProduto'];
    $qtdeProduto = $_Post['qtdeProduto'];
    $conexao = new connection();
    $conexao = $conexao->getCon();
    $produto = new Produto(null, $nome, $precoFinal, $precoCusto, $idFornecedor);
    $produtoDAO = new ProdutoDAO();
    $produtoDAO->salvar($produto, $conexao);

    $idProduto = $produtoDAO->buscar($nome, $conexao);
    $estoque = new Estoque($idProduto, $idFornecedor,$tamanhoProduto, $qtdeProduto);
    $estoqueDAO = new EstoqueDAO();
    $estoqueDAO->salvar($estoque,$conexao);
	
	header('Location: ../index.php');
?>