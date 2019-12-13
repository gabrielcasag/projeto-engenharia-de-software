<?php
    //Classe da tabela Fornecedor
    class FornecedorDAO {
        //construtor.. nada a fazer aqui
        function __construct() {
        }

        //funcao para salvar um fornecedor na tabela
        function salvar($fornecedor, $conexao) {
            //montando query
            $sql = "INSERT INTO Fornecedor(idFornecedor, nomeFornecedor, cnpj, telFornecedor, emailFornecedor) VALUES (null,'". 
                $fornecedor->getNome()."','".
                $fornecedor->getCnpj()."','".
                $fornecedor->getTel()."','".
                $fornecedor->getEmail()."')";

            //se a query for feita com sucesso mostra uma tela de sucesso
            mysqli_query($conexao,$sql);
    		if( mysqli_affected_rows( $conexao ) > 0){
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Fornecedor cadastrado com sucesso !!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";            
            } 
            else //se ocorrer algum erro mostra uma tela de erro avisando qual o erro 
            {
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Erro ao inserir fornecedor!!</h1><br>"
                        .$conexao->error." 
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/cadastrarFornecedor.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
                </body>
                </center>
                </html>
                ";
            }
        }

        //funcao para buscar um fornecedor na tabela
        function buscar($id, $conexao) {
            //montando a string
            $sql = "SELECT * FROM Fornecedor WHERE idFornecedor =".$id ;
            //realizando a query
            $result = mysqli_query($conexao,$sql);
            //retornando o resultado da query
            return $result;
        }

        //funcao para remover um fornecedor da tabela
        function removerFornecedor($id, $conexao) {   
            //montando a query     
            $sql = "DELETE FROM Fornecedor WHERE idFornecedor=".$id;
            //se for possivel remover mostra uma tela de sucesso
            mysqli_query($conexao,$sql);
            if( mysqli_affected_rows( $conexao ) > 0){
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Fornecedor removido com sucesso !!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";            
            }
            else//se nao mostra uma tela de erro indicando o erro
            {
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Erro ao remover fornecedor !!</h1>
                        <h3>".$conexao->error. "</h3>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";
            }
        }

        //funcao para alterar um fornecedor na tabela 
        function alterarFornecedor($fornecedor, $conexao) {
            //montando a string
            $sql = "UPDATE Fornecedor SET nomeFornecedor='". $fornecedor->getNome() . 
            "',cnpj='".$fornecedor->getCnpj()."',telFornecedor='" . $fornecedor->getTel() . 
            "',emailFornecedor='" . $fornecedor->getEmail() . 
            "'WHERE idFornecedor=" .$fornecedor->getId();
			mysqli_query($conexao,$sql);
            if( mysqli_affected_rows( $conexao ) > 0){
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Fornecedor alterado com sucesso!!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
        
                </body>
                </center>
                </html>
                ";       
            } else {
                echo
                "
                <!DOCTYPE html>
                <html>
                <head>
                    <link rel='stylesheet' href='../CSS/baseform.css'>
                    <meta charset='utf-8'>
                    <title>TripleG Store</title>
                </head>
                <center>
                <body>
                    <div class='frame'>
                        <br>
                        <h1>Erro ao alterar fornecedor!!</h1>
                        <br><br>
                        <label for='voltar'>
                        <button style='width:70px;height:30px' onclick='location.href = "."\"../View/paginaInicial.html\";'  class='float-left submit-button'>Voltar</button>
                        </label>
                    </div>
                    <center>
                    </body>
                </center>
                </html>
                ";  
			}
		}
}
?>
