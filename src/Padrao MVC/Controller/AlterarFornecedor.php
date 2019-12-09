<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $conexao = new connection();
    $conexao = $conexao->getCon();
    $fornecedor = new Fornecedor($id, $nome, $cnpj, $telefone, $email);
    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->alterarFornecedor($id, $conexao);
	
	header('Location: ../index.php');
?>