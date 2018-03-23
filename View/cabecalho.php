<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title><?php echo $titulo; ?></title>
</head>
<body>

    <?php
        if ($menu == true){
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="aluno-cadastrar.php" class="nav-link">Cadastrar Aluno</a></li>
                    <li class="nav-item"><a href="aluno-pesquisar.php" class="nav-link">Pesquisar Aluno</a></li>
                    <li class="nav-item"><a href="gerenciar-usuario.php" class="nav-link">Gerenciar Usuário</a></li>
                </ul>
            </div>

        <a class="navbar-brand" href="logoff.php">Sair</a>
    <?php
        } else {
    ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Home</a>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            </ul>
            </div>
        </nav>
        <?php } ?>
        </nav>
    <div class="container">
