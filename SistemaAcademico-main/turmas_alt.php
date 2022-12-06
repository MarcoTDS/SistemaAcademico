<?php
#Página com o formulário para incluir uma turma

include_once("controller/curso_controller.php");
include_once("controller/turma_controller.php");
include_once("view/curso_html.php");

$id = $_GET['id'];

$turmaCont = new TurmaController();
$turma = $turmaCont->buscarPorId($id);

if($turma == null){
    echo "Turma não encontrada<br>";
    echo "<a href='turmas_listar.php'>Voltar</a>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('bootstrap/head.php'); ?>
</head>
<body>

    <?php include_once('bootstrap/navbar.php'); ?>

    <h1 class="text-center mx-2 my-2" style="color: green;">INSERIR TURMA</h1>

    <div style="max-width: 50% ">
        <form name="frmCadastroAlunos" method="POST" action="turmas_alt_exec.php">
            
                <div class="form-group mx-3 my-1">
                    <label for="sigla">Sigla da disciplina:</label> 
                    <input class="form-control" value="<?php echo $turma->getCodDisciplina(); ?>" placeholder="Informe a sigla" type="text" id="sigla" name="cod_disciplina" size="45" maxlength="3" />
                </div>
                <div class="form-group mx-3 my-1">
                    <label for="nome_disciplina">Nome da disciplina:</span></label>
                    <input class="form-control" value="<?php echo $turma->getNomeDisciplina(); ?>" placeholder="Informe o nome" type="text" id="nome_disciplina" name="nome_disciplina" />
                </div>    

                <div class="form-group mx-3 my-1">
                    <label for="ano">Ano:</label>
                    <input class="form-control" value="<?php echo $turma->getAno(); ?>" type="number" id="ano" name="ano" style="width: 100px;"/>
                </div>
                <div class="form-group mx-3 my-1">
                    <label for="somCurso">Curso:</label>
                    
                        <?php
                            $cursoCont = new CursoController();
                            $cursos = $cursoCont->listar();

                            CursoHTML::desenhaSelect($cursos, "curso_turma", "somCurso", $turma->getCurso()->getIdCurso());
                        ?>
                </div>
            

            <br> 
            <button class="btn btn-success mx-3 my-1" type="submit">Gravar</button>

            <input type="hidden" name="id_turma" value="<?php echo $turma->getIdTurma(); ?>" >
        </form>
    </div>

</body>
</html>