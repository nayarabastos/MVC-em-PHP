<?php
    namespace src\Models\Entity;

    class Aluno{
        private $id;
        private $nome;
        private $genero;

        public function __construct($nome,$genero){
            $this->nome = $nome;
            $this->genero = $genero;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome($nome){
            return $this->nome;
        }
        
        public function setGenero($genero){
            $this->genero = $genero;
        }
        public function getGenero(){
            return $this->genero;
        }

        public function setid($id){
            $this->id = $id;
        }
        public function getid(){
            return $this->id;
        }
    }
?>