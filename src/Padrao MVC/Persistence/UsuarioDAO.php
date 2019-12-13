<?php
    class UsuarioDAO {
        function __construct() {}
        function salvar($usuario, $conexao) {
            $sql = "INSERT INTO usuario(idUsuario, nomeUsuario, cpf, telefoneUsuario, emailUsuario, enderecoUsuario, loginUsuario, senhaUsuario) VALUES ('".
                $usuario->getId()."','".
                $usuario->getNome()."','".
                $usuario->getCpf()."','".
                $usuario->getTel()."',".
                $usuario->getEmail()."','"
                $usuario->getEndereco()."','"
                $usuario->getLogin()."','"
                $usuario->getSenha()."','";
            mysqli_query($conexao,$sql);
			if( mysqli_affected_rows( $conexao ) > 0){
                echo "<script>alert('usuario salvo')</script>";
            } else {
                echo "Erro ao cadastrar o usuario: <br>".$conexao->error;
            }
        }
        function consultar($cpf, $conexao) {
            $sql = "SELECT * FROM Usuario WHERE cpf = '" . $cpf . "'";
            $resultado = mysqli_query($conexao,$sql);
            return $resultado;
        }
    }
 ?>
