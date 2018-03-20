<?php

$titulo="Excluir Aluno";
include 'cabecalho.php';

echo "<h1>Excluir Aluno</h1>";


/*$aDAO = new \App\DAO\UsuarioDAO();
$aDAO->verificar();*/

$a = new \App\Model\Aluno();
$a->setId($_GET['id']);

$aDAO = new \App\DAO\AlunoDAO();
if ($aDAO->excluir($a));
header("location: aluno-pesquisar.php? msg=1");


?>