<?php

$titulo="Alteração de Aluno";
include 'cabecalho.php';
include '../vendor/autoload.php';

echo "<h1>Alterar Cadastro de Aluno</h1>";

/*
$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();*/

if ($_POST) {
    $a = new \App\Model\Aluno();
    $a->setId($_POST['id']);
    $a->setNome($_POST['nome']);
    $a->setSerie($_POST['serie']);
    $a->setTelefone($_POST['telefone']);
    $a->setEndereco($_POST['endereco']);
    $a->setEmail($_POST['email']);
    !empty($_POST{'datanasc'}) ? $a->setNascimento(\App\Helper\Data::set($_POST{'datanasc'})) : $a->setNascimento(null);

    $aDAO = new \App\DAO\AlunoDAO();
    if ($aDAO->alterar($a))
        header("Location: aluno-pesquisar.php");
}

$alu = new \App\Model\Aluno();
isset($_GET) ? $alu->setId($_GET['id']) : $alu->setId($_POST['id']) ;

$aluDAO = new \App\DAO\AlunoDAO();
$resultado = $aluDAO->pesquisar($alu);

?>
<form action="aluno-alterar.php" method="post">
    <div class="form-group">
        <label for="nome"><span class="text-danger">*</span> Nome </label>
        <input type="text" id="nome" name="nome" class="form-control" autofocus required>
    </div>
    <div class="form-group">
        <label for="serie"> Série </label>
        <input type="text" id="serie" name="serie" class="form-control" >
    </div>
    <div class="form-group">
        <label for="telefone"> Telefone </label>
        <input type="text" id="telefone" name="telefone" class="form-control">
    </div>
    <div class="form-group">
        <label for="endereco"><span class="text-danger">*</span> Endereço </label>
        <input type="text" id="endereco" name="endereco" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email"> E-mail </label>
        <input type="text" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="datanasc"> Data de Nascimento </label>
        <input type="text" id="datanasc" name="datanasc" class="form-control">
    </div>
    <div class="form-group">
        Os campos com <span class="text-danger">*</span> não podem estar em branco.
    </div>
    <button type="submit" class="btn btn-success">
        <img src="Images/ic_done_white_24px.svg" alt="Cadastrar Aluno"> Alterar
    </button>
</form>
<?php include 'rodape.php';?>
