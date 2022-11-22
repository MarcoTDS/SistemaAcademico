<?php

include_once("dao/turma_dao.php");

class TurmaController{
    
        private $turmaDAO;
    
        public function __construct(){
            $this->turmaDAO = new TurmaDAO();
        }
    
        public function listar(){
            return $this->turmaDAO->list();
        }
    
        public function buscarPorId($idTurma){
            return $this->turmaDAO->findById($idTurma);
        }
    
        public function salvar($turma){
            $this->turmaDAO->save($turma);
        }
        public function atualizar($turma){
            $this->turmaDAO->update($turma);
        }
    
        public function excluir($turma){
            $this->turmaDAO->delete($turma);
        }
}