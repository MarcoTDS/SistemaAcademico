<?php
//* Arquivo para processar a requisição POST do login

include_once("controller/usuario_controller.php");

session_start();

$login = trim($_POST['login']);
$senha = trim($_POST['senha']);

if(empty($login)) {
    echo "informe o login do usuário.";
    exit;
}
if(empty($senha)) {
    echo "informe a senha do usuário.";
    exit;
}

$usuarioCont = new UsuarioController();

$usuario = $usuarioCont->buscarPorLoginSenha($login, $senha);

if($usuario == null){
    echo "login ou senha inválidos";
    exit;
}

//login ocorreu com sucesso - retorna em branco
//Setar usuário na sessão php

$_SESSION['usuarioLogadoId'] = $usuario->getIdUsuario();
$_SESSION['usuarioLogadoNome'] = $usuario->getNome();

echo "";

?>