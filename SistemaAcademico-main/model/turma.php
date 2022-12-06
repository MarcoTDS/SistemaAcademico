<?php

class Turma{
    private $idTurma;
    private $cod_disciplina;
    private $nome_disciplina;
    private $ano;
    private $curso;

    public function getIdTurma(){
        return $this->idTurma;
    }
    public function setIdTurma($idTurma){
        $this->idTurma = $idTurma;
    }
    public function getCodDisciplina(){
        return $this->cod_disciplina;
    }
    public function setCodDisciplina($cod_disciplina){
        $this->cod_disciplina = $cod_disciplina;
    }
    public function getNomeDisciplina(){
        return $this->nome_disciplina;
    }
    public function setNomeDisciplina($nome_disciplina){
        $this->nome_disciplina = $nome_disciplina;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }


}