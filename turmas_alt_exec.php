<?php

include_once("model/turma.php");
include_once("model/curso.php");
include_once("controller/turma_controller.php");

//Capturar os valores orindos do formulário

$id = $_POST["id_turma"];
$cod_disciplina = $_POST["cod_disciplina"];
$nome_disciplina = $_POST['nome_disciplina'];
$ano = $_POST['ano'];
$id_curso = $_POST['curso_turma'];

//Criar o objeto Turma

$turma = new Turma();
$turma->setIdTurma($id);
$turma->setCodDisciplina($cod_disciplina);
$turma->setNomeDisciplina($nome_disciplina);
$turma->setAno($ano);
$curso = new Curso($id_curso);
$turma->setCurso($curso);

//Chamar o controler para salvar o aluno

$turmaCont = new TurmaController();
$turmaCont->atualizar($turma);

//Redireciona para o início

header("location: turmas_listar.php");
