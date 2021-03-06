<?php
$titulo="Cadastrar Aluno";
$menu = true;
include 'cabecalho.php';?>
<h1>Cadastrar Novos Alunos</h1>
<?php
include '../vendor/autoload.php';
$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();
if ($_POST){
    $p = new \App\Model\Aluno();
    !empty($_POST['nome']) ? $p->setNome($_POST{'nome'}) : $p->setNome(null);
    $p->setSerie($_POST['serie']);
    $p->setTelefone($_POST['telefone']);
    !empty($_POST['endereco']) ? $p->setEndereco($_POST{'endereco'}) : $p->setEndereco(null);
    $p->setEmail($_POST['email']);
    $p->setNascimento (\App\Helper\Data::set($_POST {'datanasc'}));

    $pDAO = new \App\DAO\AlunoDAO();
    if ($pDAO->cadastrar($p))
        echo "<div class='alert alert-success'>Aluno cadastrado com sucesso!</div>";
}
?>
<form action="aluno-cadastrar.php" method="post">
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
        <img src="Images/ic_done_white_24px.svg" alt="Cadastrar Aluno"> Cadastrar
    </button>

</form>
<?php
include 'rodape.php';
?>
