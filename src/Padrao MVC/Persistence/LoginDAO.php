<?php
    class LoginDAO {
        function __construct() {}
        function validar($login, $senha, $conexao) {
            
            $resultado = $conexao->query("SELECT * FROM Usuario WHERE loginUsuario = '".$login."' AND senhaUsuario = '".$senha."'");

            return $resultado;
        }
    }
 ?>