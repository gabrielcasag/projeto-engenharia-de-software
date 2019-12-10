<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';

    $nome = $_POST['cnome'];
    $cnpj = $_POST['ccnpj'];
    $telefone = $_POST['ctelefone'];
    $email = $_POST['cemail'];

    $conexao = new connection();
    $link = $conexao->getCon();

    $fornecedor = new Fornecedor(null, $nome, $cnpj, $telefone, $email);
    $fornecedorDAO = new FornecedorDAO();
    
    $fornecedorDAO->salvar($fornecedor, $link);
	
	header('Location: ../View/paginaInicial.html');
?>