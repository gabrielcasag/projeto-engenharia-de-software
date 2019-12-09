<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $conexao = new connection();
    $conexao = $conexao->getCon();
    $fornecedor = new Fornecedor(null, $nome, $cnpj, $telefone, $email);
    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->salvar($fornecedor, $conexao);
	
	header('Location: ../index.php');
?>