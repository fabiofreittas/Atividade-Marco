<?php
$titulo="SGA";

include '../vendor/autoload.php';
$u = new \App\DAO\UsuarioDAO();
$menu = $u->retornaCpf();

include 'cabecalho.php';
echo ("<h1>Sistema de Gerenciamento de Alunos</h1> <br>");
?>

<img class="imagem" src="Images/bg.png" height="100%">
