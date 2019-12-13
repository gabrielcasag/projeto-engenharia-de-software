<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';
    include_once '../Model/Estoque.php';
    include_once '../Persistence/EstoqueDAO.php';

    $nome = $_POST['cnome'];
    $precoFinal = $_POST['cprecof'];
    $precoCusto = $_POST['cprecoc'];
    $idFornecedor = $_POST['cidf'];
    $tamanhoProduto = $_POST['ctamanho'];
    $qtdeProduto = $_POST['cqtde'];

    $conexao = new connection();
    $conexao = $conexao->getCon();

    $produto = new Produto(null, $nome, $precoFinal, $precoCusto, $idFornecedor);
    $produtoDAO = new ProdutoDAO();

    $produtoDAO->salvar($produto, $conexao);

    $idProduto = $produtoDAO->buscarNome($nome, $conexao);

    $estoque = new Estoque($idProduto, $idFornecedor,$tamanhoProduto, $qtdeProduto);

    $estoqueDAO = new EstoqueDAO();
    $estoqueDAO->salvar($estoque,$conexao);
	
?>