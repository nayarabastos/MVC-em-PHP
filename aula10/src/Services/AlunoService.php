<?php

namespace src\Services;

use src\Models\Repository\AllunoRepositery;
use src\Models\Entity\Aluno;

    class AlunoService{
        private $aluno;

        public function __construct(){
            $this->aluno = new AlunoRepositary();
        }

        public function criar($nome,$genero){
            $aluno = new Aluno($nome,$genero);
            $this->aluno->save($aluno);        
        }
    }
?>