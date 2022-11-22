<?php
#Página com o formulário para incluir um aluno

include_once("controller/curso_controller.php");
include_once("view/curso_html.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('bootstrap/head.php'); ?>
</head>
<body>
    <?php include_once('bootstrap/navbar.php'); ?>
    <h1 class="text-center mx-2 my-2" style="color: green;">INSERIR ALUNO</h1>

    <div style="max-width: 50% ">
        <form name="frmCadastroAlunos" method="POST" action="alunos_inc_exec.php">
            
                <div class="form-group mx-3 my-1">
                    <label for="nome">Nome:</label> 
                    <input class="form-control" placeholder="Informe o nome" type="text" id="nome" name="nome_aluno" size="45" maxlength="70" />
                </div>
                <div class="form-group mx-3 my-1">
                    <label for="idade">Idade:</span></label>
                    <input class="form-control" type="number" id="idade" name="idade_aluno" style="width: 100px;"/>
                </div>    

                <div class="form-group mx-3 my-1">
                    <label>Estrangeiro:</label>
                        <select class="form-control" name="estrangeiro_aluno">
                            <option value="N">Não</option>
                            <option value="S">Sim</option>
                        </select>
                </div>
                
                <div class="form-group mx-3 my-1">
                    <label for="somCurso">Curso:</label>
                    
                        <?php
                            $cursoCont = new CursoController();
                            $cursos = $cursoCont->listar();

                            CursoHTML::desenhaSelect($cursos, "curso_aluno", "somCurso");
                        ?>
                </div>
            

            <br> 
            <button class="btn btn-success mx-3 my-1" type="submit">Gravar</button>
            <button class="btn btn-danger my-1" type="reset">Limpar</button>
        </form>
    </div>

    <a class="btn btn-outline-secondary mx-2 my-2" href="alunos_listar.php">Voltar</a>

    <?php include_once('bootstrap/footer.php'); ?>
</body>
</html>