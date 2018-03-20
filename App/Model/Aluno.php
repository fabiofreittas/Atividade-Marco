<?php
namespace App\Model;

class Aluno
{
    private $id;
    private $nome;
    private $serie;
    private $telefone;
    private $endereco;
    private $email;
    private $nascimento;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getSerie()
    {
        return $this->serie;
    }


    public function setSerie($serie)
    {
        $this->serie = $serie;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

       public function getEmail()
    {
        return $this->email;
    }

      public function setEmail($email)
    {
        $this->email = $email;
    }


     public function getNascimento()
    {
        return $this->nascimento;
    }


    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }



}