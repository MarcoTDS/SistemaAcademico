<?php
include_once("util/conexao.php");
include_once("controller/aluno_controller.php");
include_once("view/aluno_html.php");

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
   <h3 class='text-center'>ALUNOS</h3>
   
   <br><br>
   
   <div class="mx-2 my-2">

   
   <p class='text-center' style="font-weight : bold">RELAÇÃO DOS ALUNOS CADASTRADOS</p>

    <?php
        $alunoCont = new AlunoController();
        $alunos = $alunoCont->listar(); 
        
        AlunoHTML::desenhaTabela($alunos);
    ?>
    </div>

    <a class="btn btn-outline-success mx-2"href="alunos_inc.php">Incluir Novo Aluno</a><br><br><br>
    <?php include_once('bootstrap/footer.php'); ?>
</body>

</html>
