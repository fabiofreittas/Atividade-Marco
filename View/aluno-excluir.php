<?php
$titulo="Excluir Aluno";
include 'cabecalho.php';
include '../Vendor/autoload.php';
echo "<h1>Excluir Aluno</h1>";

/*
$aDAO = new \App\DAO\UsuarioDAO();
$aDAO->verificar();
if ($_POST){
    include '../vendor/autoload.php';
    $u = new \App\Model\Aluno();
    $u->setEmail($_POST['email']);
    $u->setSenha($_POST['senha']);
    $uDAO = new \App\DAO\UsuarioDAO();
    if ($uDAO->logar($u))
        header("Location: produto-pesquisar.php");
    else
        echo "<div class='alert-danger'>Email ou senha incorreta!</div>";
}
?>
*/

$a = new \App\Model\Aluno();
$a->setId($_GET['id']);
$aDAO = new \App\DAO\AlunoDAO();
if ($aDAO->excluir($a));
header("location: aluno-pesquisar.php");