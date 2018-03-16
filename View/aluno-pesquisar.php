<?php

$titulo="Pesquisar Alunos";
include 'cabecalho.php';?>
<h1>Pesquisar Cadastro de Alunos</h1>
<br>
<form class="form-inline" action="aluno-pesquisar.php" method="get">
    <div class="form-group">
        <label for="nome">Nome: </label>
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Fábio Freitas" autofocus>
    </div>
    <button type="submit" class="btn btn-primary mb-2">
        <img src="Images/ic_search_white_24px.svg" alt="Pesquisar">
        Pesquisar
    </button>
</form>

<?php

?>

<table class='table table-striped table-hover'>
    <tr class='text-center'>
        <th>ID</th>
        <th class='text-left'>Nome</th>
        <th>Série</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>E-mail</th>
        <th>Data de Nascimento</th>
        <th></th>
        <th></th>
    </tr>
