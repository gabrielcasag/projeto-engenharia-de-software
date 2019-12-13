<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Produto.php';
    include_once '../Persistence/ProdutoDAO.php';
    
    //capturando dados do formulario
    $id = $_POST['cid'];
    $nome = $_POST['cnome'];
    $precoFinal = $_POST['cprecof'];
    $precoCusto = $_POST['cprecoc'];
    $idFornecedor = $_POST['cidf'];
    $qtdeProduto = $_POST['cqtde'];
    
    //fazendo conexao com o banco de dados
    $conexao = new connection();
    $conexao = $conexao->getCon();

    //instanciando um objeto do novo produto
    $produto = new Produto($id, $nome, $precoFinal, $precoCusto, $idFornecedor);

    //instanciando um objeto DAO para comunicar com o bd
    $produtoDAO = new ProdutoDAO();
    $produtoDAO->alterarProduto($produto, $conexao);
	
?>