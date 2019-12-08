<?php
    class UsuarioDAO {
        function __construct() {}
        function salvar($usuario, $conexao) {
            $sql = "INSERT INTO usuario(null, nomeUsuario, cpf, telUsuario, emailUsuario, endereco, loginUsuario, senha) VALUES ('".
                $usuario->getId()."','".
                $usuario->getNome()."','".
                $usuario->getCpf()."','".
                $usuario->getTel()."',".
                $usuario->getEmail()."','"
                $usuario->getEndereco()."','"
                $usuario->getLogin()."','"
                $usuario->getSenha()."','";
            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('usuario salvo')</script>";
            } else {
                echo "Erro ao cadastrar o usuario: <br>".$conexao->error;
            }
        }
        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM Usuario WHERE cpf = '" . $cpf . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }
 ?>