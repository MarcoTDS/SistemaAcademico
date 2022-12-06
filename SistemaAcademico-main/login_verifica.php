<?php

session_start();

if(! isset($_SESSION['usuarioLogadoId'])){

    header("location: login.php");
    exit;

}


?>