<?php
//* Arquivo para processar a requisição POST do login


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


echo $login . " - " . $senha;


?>