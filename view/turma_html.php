<?php

class TurmaHTML {

    public static function desenhaTabela($turmas) {
        echo "<table class='table table-striped table-bordered'>";
        
        echo "<thead>";
        echo "<th scope='col'>Código - Nome disciplina</th>";
        echo "<th scope='col'>Ano</th>";
        echo "<th scope='col'>Curso</th>";
        echo "<th scope='col'>Alterar</th>";
        echo "<th scope='col'>Excluir</th>";
        echo "</thead>";
        
        echo "<tbody>";
        foreach ($turmas as $turma):
            echo "<tr>";
            echo "<td>". $turma->getCodDisciplina() ." - ". $turma->getNomeDisciplina() ."</td>";
            echo "<td>". $turma->getAno() ."</td>";
            echo "<td>". $turma->getCurso()->getNome() ."</td>";
            
            //Editar
            echo "<td>". 
                "<a href='turmas_alt.php?id=". $turma->getIdTurma() . "'>".
                "<img src='img/btn_editar.png'>" . "</a>".
            "</td>";
            
            //Excluir
            echo "<td>". 
                "<a href='turmas_del_exec.php?id=". $turma->getIdTurma() . 
                "' onclick='return confirm(\"Confirma a exclusão da turma?\");'".
                ">".
                "<img src='img/btn_excluir.png'>" . "</a>".
            "</td>";
            
            echo "</tr>";
        endforeach;
        echo "</tbody>";

        echo "</table>";
    }

}