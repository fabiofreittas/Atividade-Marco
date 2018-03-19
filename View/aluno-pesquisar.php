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
$a = new \App\Model\Aluno();
isset($_GET['nome']) ? $a->setNome($_GET['nome']) : $a->setNome("");
$aDAO = new \App\DAO\AlunoDAO();
$alunos = $aDAO->pesquisarNome($a);
/*if (count($alunos) > 0){*/
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
    <?php
    foreach ($alunos as $aluno) {
        echo "<tr>";
        echo "<td class='text-center'>{$aluno->getId()}</td>";
        echo "<td>{$aluno->getNome()}</td>";
        echo "<td>{$aluno->getSerie()}</td>";
        echo "<td>{$aluno->getTelefone()}</td>";
        echo "<td>{$aluno->getEndereco()}</td>";
        echo "<td>{$aluno->getEmail()}</td>";
        echo "<td class='text-center'>".\App\Helper\Data::get($aluno->getNascimento())."</td>";
        /*
        echo "<td class='text-center'>".\App\Helper\Moeda::get($produto->getQuantidade())."</td>";
        echo "<td class='text-center'>".\App\Helper\Moeda::get($produto->getValor())."</td>";
        echo "<td class='text-center'>".\App\Helper\Data::get($produto->getValidade())."</td>";

        echo "<td><a class='btn btn-warning' href='produto-alterar.php?id={$produto->getId()}'>Alterar</a></td>";
        echo "<td><a class='btn btn-danger' href='produto-excluir.php?id={$produto->getId()}'>Excluir</a></td>";
        echo "</tr>";*/
    }
    ?>
</table>
    <?php
/*} else {
    echo "<div class='alert alert-danger'>Resultados esperados não encontrados!</div>";
}
?>*/
