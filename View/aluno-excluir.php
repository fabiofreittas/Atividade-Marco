<?php
$titulo="Excluir Aluno";
include 'cabecalho.php';
include '../Vendor/autoload.php';
$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();
echo "<h1>Excluir Aluno</h1>";
try{
    $a = new \App\Model\Aluno();
    $a->setId($_GET['id']);
    $aDAO = new \App\DAO\AlunoDAO();
    if ($aDAO->excluir($a));
    header("location: aluno-pesquisar.php?msg=2");

} catch(\PDOException $e) {
    echo "<div class='alert-danger'>Os dados não foram excluídos!</div>";
}