<?php
/**
 * Created by PhpStorm.
 * User: 00120911205
 * Date: 08/03/2018
 * Time: 19:46
 */

namespace App\Model;


class Usuario
{
    private $id;
    private $cpf;
    private $senha;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    public function getSenha()
    {
        return $this->senha;
    }


     public function setSenha($senha)
    {
        $this->senha = $senha;
    }



}