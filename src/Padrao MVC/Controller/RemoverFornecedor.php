<?php
    include_once '../Persistence/connection.php';
    include_once '../Model/Fornecedor.php';
    include_once '../Persistence/FornecedorDAO.php';

    //recebendo os dados
    $id = $_POST['cid'];
    
    //fazendo a conexao com o banco de dados
    $conexao = new connection();
    $conexao = $conexao->getCon();
    
    //removendo o fornecedor pela camada persistence
    $fornecedorDAO = new FornecedorDAO();
    $fornecedorDAO->removerFornecedor($id, $conexao);

?>