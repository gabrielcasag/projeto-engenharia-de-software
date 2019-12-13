<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';
    
    //recebendo os dados
    $nome = $_POST['cnome'];
    $cnpj = $_POST['ccnpj'];
    $telefone = $_POST['ctelefone'];
    $email = $_POST['cemail'];

    //fazendo conexao com o banco de dados 
    $conexao = new connection();
    $link = $conexao->getCon();

    //criando o objeto do fornecedor a ser inserido
    $fornecedor = new Fornecedor(null, $nome, $cnpj, $telefone, $email);
    
    //salvando o novo fornecedor na tabela pela camada persistence
    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->salvar($fornecedor, $link);
    
?>