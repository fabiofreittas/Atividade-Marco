<?php
/**
 * Created by PhpStorm.
 * User: 00120911205
 * Date: 08/03/2018
 * Time: 20:00
 */

namespace App\DAO;


class AlunoDAO extends Conexao
{

    public function cadastrar($aluno) {
        $sql="insert into alunos(nome, serie, telefone, endereco, email, nascimento) values (:nome, :serie, :telefone, :endereco, :email, :nascimento)";
        try{
            $c = $this->conexao->prepare($sql);
            $c->bindValue(":nome", $aluno->getNome());
            $c->bindValue(":serie", $aluno->getSerie());
            $c->bindValue(":telefone", $aluno->getTelefone());
            $c->bindValue(":endereco", $aluno->getEndereco());
            $c->bindValue(":email", $aluno->getEmail());
            $c->bindValue(":nascimento", $aluno->getNascimento());
            $c->execute();
            return true;


        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";

        }

    }

    public function alterar($aluno){
        $sql="update alunos set nome=:nome, serie=:serie, endereco=:endereco, email=:email, nascimento=:nascimento where id=:id";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue(":nome", $aluno->getNome());
            $c->bindValue(":serie",$aluno->getSerie());
            $c->bindValue(":telefone", $aluno->getTelefone());
            $c->bindValue(":endereco", $aluno->getEndereco());
            $c->bindValue(":email", $aluno->getEmail());
            $c->bindValue(":nascimento", $aluno->getNascimento());
            $c->bindValue(":id", $aluno->getId());
            $c->execute();
            return true;


        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";

        }
    }

    public function excluir($aluno){
        $sql="delete from alunos where id=:id";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue(":id", $aluno->getId());
            $c->execute();
            return true;


        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";


        }
    }

    public function pesquisar($aluno){
        $sql="select * from alunos where id=:id";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue("id", $aluno->getId());
            $c->execute();
            return $c->fetch(\PDO::FETCH_CLASS);


        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";

        }

    }

    public function pesquisaNome ($aluno=null){

        $sql= "select * from alunos where nome = :nome";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue(":nome", "%" .$aluno->getDescricao()."%");
            $c->execute();
            return $c->fetchAll(\PDO::FETCH_CLASS, "\APP\Model\Produto");
        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";

        }


    }



}