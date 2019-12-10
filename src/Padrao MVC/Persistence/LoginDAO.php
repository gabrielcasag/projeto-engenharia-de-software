<?php
    class LoginDAO {
        function __construct() {}
        function validar($login, $senha, $conexao) {
            
            $sql = "SELECT * FROM Usuario WHERE loginUsuario = '".$login."' AND senhaUsuario = '".$senha."'";
            
            $resultado = mysqli_query($conexao,$sql);

            return $resultado;
        }
    }
 ?>