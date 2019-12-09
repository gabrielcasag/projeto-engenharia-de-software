<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';
    $id = $_POST['id'];
    $conexao = new connection();
    $conexao = $conexao->getCon();
    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->removerFornecedor($id, $conexao);
	
	header('Location: ../index.php');
?>