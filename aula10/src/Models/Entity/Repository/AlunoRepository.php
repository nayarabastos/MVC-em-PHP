<?php

namespace src\Models\Repository;

use src\Config\connection;
use src\Models\Entity\Aluno;
use PDO;

    class AlunoRepository{
        public $conn;
        public function __construct(){
            //instância da classe connection
            $database = new connectio();
            
            //método: estabelecer conexão com o bd
            $this->conn = $database->getConnection();
        }

        //injeção SQL
        public function save(Aluno $aluno){
            $query = "INSERT INTO aluno(nome,genero) VALUES(:nome, :genero)";

            $nome = $aluno->getNome();
            $genero = $genero->getGenero();
            
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":genero", $genero);

            $stmt->execute();
        }

        public function findAll(){
            $query = "SELECT * FROM ALUNO";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function findByID($id){
            $query = "SELECT * FROM ALUNO WHERE id=:id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id,$id");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        }

        public function update(){
            $query = "UPDATE aluno SET nome = :nome,genero=:genero WHERE id=:id";
            
            $stmt = $this->conn->prepare($query);

            //atribuição de variáveis
            $nome = $aluno->getNome();
            $genero = $aluno->getGenero();
            $id = $aluno->getId();

            //atribuir os valores nos parametros
            $stmt->bindParam("nome",$nome);
            $stmt->bindParam("genero",$genero);
            $stmt->bindParam("id",$id);

            $stmt->execute();
        }
        public function delete($id){
            $stmt="DELETE FROM Aluno WHERE id = :id";
            $stmt=$this->function->conn->prepare($query);
            $stmt=bindParam(":id",$id);
            $stmt->execute();
        }
    }
?>