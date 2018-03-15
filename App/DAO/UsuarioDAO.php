<?php
/**
 * Created by PhpStorm.
 * User: 00120911205
 * Date: 08/03/2018
 * Time: 19:45
 */

namespace App\DAO;


class UsuarioDAO extends Conexao
{
    public function logar($usuario){

        $sql="select * from usuarios where cpf=:cpf and senha=:senha";
        try{
            $c=$this->conexao->prepare($sql);
            $c->bindValue(":cpf", $usuario->getCpf());
            $c->bindValue(":senha", \App\Helper\Senha::gerar($usuario->getSenha()));
            $c->execute();
            $resultado=$c->fetch();
            session_start();
            $_SESSION["id"]=$resultado["id"];
            return $resultado;


        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";

        }


    }

    public function verificar(){

        session_start();
        if(empty($_SESSION['id']))header("Location: login.php");
    }

    public function deslogar(){
        session_start();
        unset($_SESSION ['id']); session_destroy();
        header("Location: login.php");
    }

}