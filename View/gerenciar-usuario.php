<?php
$titulo="Alteração de Usuário";
$menu = true;
include 'cabecalho.php';
include '../vendor/autoload.php';
$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();
echo "<h1>Alterar Dados de Usuário</h1>";
if ($_POST) {
    $a = new \App\Model\Usuario();
    $a->setCpf($_POST['cpf']);
    !empty($_POST{'senha'}) ? $a->setSenha(\App\Helper\Senha::gerar($_POST{'senha'})) : $a->setSenha(null);
    $aDAO = new \App\DAO\UsuarioDAO();
    if ($aDAO->alterarUsuario($a))
        header("Location:index.php");
}
?>
<form action="gerenciar-usuario.php" method="post">
    <div class="form-group">
        <label for="cpf"><span class="text-danger">*</span> CPF </label>
        <input type="text" id="cpf" name="cpf" class="form-control" autofocus required placeholder="Informe o CPF desejado">
    </div>
    <div class="form-group">
        <label for="senha"><span class="text-danger">*</span> Senha </label>
        <input type="password" id="senha" name="senha" class="form-control" required placeholder="Nova senha">
    </div>
    <div class="form-group">
        Os campos com <span class="text-danger">*</span> não podem estar em branco.
    </div>
    <button type="submit" class="btn btn-success">
        <img src="Images/ic_done_white_24px.svg" alt="Alterar Usuário"> Alterar Usuário
    </button>
</form>
<?php include 'rodape.php';?>
