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
include '../vendor/autoload.php';
$a = new \App\Model\Aluno();
isset($_GET['nome']) ? $a->setNome($_GET['nome']) : $a->setNome("");
<<<<<<< HEAD
if ($_GET) {
    $aDAO = new \App\DAO\AlunoDAO();
    $alunos = $aDAO->pesquisaNome($a);
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
            echo "<td class='text-center'>" . \App\Helper\Data::get($aluno->getNascimento()) . "</td>";


            /*echo "<td><a class='btn btn-warning' href='aluno-alterar.php?id={$aluno->getId()}'>Alterar</a></td>";
            echo "<td><a class='btn btn-danger' href='aluno-excluir.php?id={$produto->getId()}'>Excluir</a></td>";
            echo "</tr>";
            */
        }
        ?>
    </table>
    <?php

} else {
    echo "<div class='alert alert-danger'>Resultados esperados não encontrados!</div>";
}
?>
=======
$aDAO = new \App\DAO\AlunoDAO();
$alunos = $aDAO->pesquisarNome($a);
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

    }
    ?>
</table>

>>>>>>> b41322b80fd961afd0c72c00dde237f54562a271
