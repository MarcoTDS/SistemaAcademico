<?php
include_once("util/conexao.php");
include_once("controller/turma_controller.php");
include_once("view/turma_html.php");

//Teste de conexão
//$connection = conectar_db();
//print_r($connection);
//?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('bootstrap/head.php'); ?>
</head>

<body>
   <?php include_once('bootstrap/navbar.php'); ?>
   <h3 class='text-center'>TURMAS</h3>
   
   <br><br>
   
   <div class="mx-2 my-2">

   
   <p class='text-center' style="font-weight : bold">RELAÇÃO DAS TURMAS CADASTRADAS</p>

    <?php
        $turmaCont = new TurmaController();
        $turmas = $turmaCont->listar(); 
        
        TurmaHTML::desenhaTabela($turmas);
    ?>
    </div>

    <a class="btn btn-outline-success mx-2"href="turmas_inc.php">Incluir Nova turma</a><br><br><br>
    <?php include_once('bootstrap/footer.php'); ?>
</body>

</html>
