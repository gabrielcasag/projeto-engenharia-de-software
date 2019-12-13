<?php
    class LoginDAO {
    	//construtor.. nada a fazer aqui
        function __construct() {}

        //funcao para validar o login e senha no sistema
        function validar($login, $senha, $conexao) {
            
            $sql = "SELECT * FROM Usuario WHERE loginUsuario = '".$login."' AND senhaUsuario = '".$senha."'";
            
            $resultado = mysqli_query($conexao,$sql);

            return $resultado;
        }
    }
 ?>