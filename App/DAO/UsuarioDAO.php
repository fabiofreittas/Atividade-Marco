<?php
/**
 * Created by PhpStorm.
 * User: 00120911205
 * Date: 08/03/2018
 * Time: 19:45
 */

namespace App\DAO;


class UsuarioDAO extends Conexao {
    public function logar($usuario){
        $sql="select * from usuarios where cpf=:cpf and senha=:senha";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue(":cpf", $usuario->getCpf());
            $c->bindValue(":senha", \App\Helper\Senha::gerar($usuario->getSenha()));
            $c->execute();
            $resultado=$c->fetch();
            session_start();
            $_SESSION["cpf"]=$resultado["cpf"];
            return $resultado;
        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }

    public function verificar(){
        session_start();
        if(empty($_SESSION['cpf']))header("Location: login.php");
    }

    public function deslogar(){
        session_start();
        unset($_SESSION ['cpf']); session_destroy();
        header("Location: login.php");
    }

    public function alterarUsuario($usuario){
        $sql="update usuarios set cpf=:cpf, senha=:senha where cpf=:cpf";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue(":cpf", $usuario->getcpf());
            $c->bindValue(":senha",\App\Helper\Senha::gerar($usuario->getSenha()));
            $c->execute();
            return true;
        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }

    /*public function pesquisar($usuario){
        $sql="select * from usuarios where cpf=:cpf";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue("cpf", $usuario->getCpf());
            $c->execute();
            return $c->fetch(\PDO::FETCH_ASSOC);

        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }*/
}