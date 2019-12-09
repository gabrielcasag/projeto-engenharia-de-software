<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';

    $id = $_POST['cid'];
    $nome = $_POST['cnome'];
    $cnpj = $_POST['ccnpj'];
    $telefone = $_POST['ctelefone'];
    $email = $_POST['cemail'];
    
    $conexao = new connection();
    $conexao = $conexao->getCon();
    
    $fornecedor = new Fornecedor($id, $nome, $cnpj, $telefone, $email);
    $fornecedorDAO = new FornecedorDAO();
    
    $fornecedorDAO->alterarFornecedor($fornecedor, $conexao);
    
    header('Location: ../View/paginaInicial.html');
    
?>