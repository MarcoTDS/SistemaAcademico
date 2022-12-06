<?php
#Arquivo para executar a exclusão de uma Turma

include_once("controller/turma_controller.php");

$idTurma = $_GET["id"];

$turmaCont = new TurmaController();
$turma = $turmaCont->buscarPorId($idTurma);

if($turma != null) {
    //Deletar a turma
    $turmaCont->excluir($turma);

    //Retornar para a página inicial
    header("location: turmas_listar.php");

} else { 
    echo "A Turma de ID ".$idTurma." não existe.";
    echo "<br>";
    echo "<a href='index.php'>Voltar</a>";
}



?>