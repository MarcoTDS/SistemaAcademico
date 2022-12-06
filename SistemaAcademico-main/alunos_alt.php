<?php
#Página com o formulário para alterar um aluno

include_once("controller/curso_controller.php");
include_once("controller/aluno_controller.php");
include_once("view/curso_html.php");

$id = $_GET['id'];

$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);

if($aluno == null){
    echo "Aluno não encontrado<br>";
    echo "<a href='alunos_listar.php'>Voltar</a>";
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
    <h1 class="text-center mx-2 my-2" style="color: green;">ALTERAR ALUNO</h1>

    <div style="max-width: 50% ">
        <form name="frmCadastroAlunos" method="POST" action="alunos_alt_exec.php">
            
                <div class="form-group mx-3 my-1">
                    <label for="nome">Nome:</label> 
                    <input class="form-control" value="<?php echo $aluno->getNome();?>" placeholder="Informe o nome" type="text" id="nome" name="nome_aluno" size="45" maxlength="70" />
                </div>
                <div class="form-group mx-3 my-1">
                    <label for="idade">Idade:</span></label>
                    <input class="form-control" value="<?php echo $aluno->getIdade();?>" type="number" id="idade" name="idade_aluno" style="width: 100px;"/>
                </div>    

                <div class="form-group mx-3 my-1">
                    <label>Estrangeiro:</label>
                        <select class="form-control" name="estrangeiro_aluno">
                            <option value="N" <?php if($aluno->getEstrangeiro()== 'N') echo "selected" ?> >Não</option>
                            <option value="S" <?php if($aluno->getEstrangeiro()== 'S') echo "selected" ?> >Sim</option>
                        </select>
                </div>
                
                <div class="form-group mx-3 my-1">
                    <label for="somCurso">Curso:</label>
                    
                        <?php
                            $cursoCont = new CursoController();
                            $cursos = $cursoCont->listar();

                            CursoHTML::desenhaSelect($cursos, "curso_aluno", "somCurso", $aluno->getCurso()->getIdCurso());
                        ?>
                </div>

                <input type="hidden" name="id_aluno" value="<?php echo $aluno->getIdAluno(); ?>" >

            <br> 
            <button class="btn btn-success mx-3 my-1" type="submit">Gravar</button>
        </form>
    </div>

    <a class="btn btn-outline-secondary mx-2 my-2" href="alunos_listar.php">Voltar</a>

    <?php include_once('bootstrap/footer.php'); ?>
</body>
</html>