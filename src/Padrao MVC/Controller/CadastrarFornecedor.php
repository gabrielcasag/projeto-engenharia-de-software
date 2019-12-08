<?php
    include_once '../persistence/connection.php';
    include_once '../model/Fornecedor.php';
    include_once '../persistence/FornecedorDAO.php';
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $conexao = new Connection();
    $conexao = $conexao->getCon();
    $fornecedor = new Fornecedor(null, $nome, $cnpj, $telefone, $email);
    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->salvar($fornecedor, $conexao);
	
	header('Location: ../index.php');
?>