<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';

    $id = $_POST['cid'];

    $conexao = new connection();
    $conexao = $conexao->getCon();

    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->removerFornecedor($id, $conexao);
	
	header('Location: ../View/paginaInicial.html');
?>