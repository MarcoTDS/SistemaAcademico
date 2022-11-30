<?php
#Classe de controller para Usuario 

include_once("dao/usuario_dao.php");

class UsuarioController {

    public function listarPorLoginSenha($login, $senha) {
        $suarioDAO = new UsuarioDAO();
        return $cursoDAO->list();
    }

}

?>