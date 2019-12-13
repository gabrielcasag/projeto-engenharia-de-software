<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';

    //capturando dados do formulario
    $id = $_POST['cid'];
    $nome = $_POST['cnome'];
    $cnpj = $_POST['ccnpj'];
    $telefone = $_POST['ctelefone'];
    $email = $_POST['cemail'];
    
    //fazendo conexao com o banco de dados
    $conexao = new connection();
    $conexao = $conexao->getCon();
    
    //instanciando um objeto do novo fornecedor
    $fornecedor = new Fornecedor($id, $nome, $cnpj, $telefone, $email);
    
    //instanciando um objeto DAO para comunicar com o bd
    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->alterarFornecedor($fornecedor, $conexao);
    
?>
