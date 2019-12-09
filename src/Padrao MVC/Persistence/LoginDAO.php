<?php
    class LoginDAO {
        function __construct() {}
        function buscar($login, $senha, $conexao) {
            $sql = "SELECT * FROM Usuario WHERE loginUsuario = '" . $login . "',
            AND senhaUsuario = '" .$senha;
            "'" . $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>