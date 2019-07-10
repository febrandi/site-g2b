<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="img/minilogo_g2b.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default fhmm navbar-collapse container" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a href="index.php" class="navbar-brand">
                        <img href="index.php" src="img/logo_g2b.png" alt="G2B">
                    </a> </div>
                <div class="collapse navbar-collapse navbar-center" id="bs-example-navbar-collapse-8">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">A G2B</a></li>
                        <li><a href="nossos_servicos.php">Nossos Serviços</a></li>
                        <li><a href="portfolio.php">Portfólio</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="solicite_orcamento.php">Solicite Seu Orçamento</a></li>
                    </ul>

                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-8">
                    <ul class="nav navbar-nav">
                        <li><a href="contato.php">Contato</a></li>
                        <?php
                        if (isset($_SESSION['logado']) && isset($_SESSION['nomeUsuario'])) {
                            echo "<li><a> $_SESSION[nomeUsuario] </a></li>";
                            echo "<li><a href='login.php?logout=true'>Sair</a></li>";
                        } else {
                            echo "<li><a href='login.php'>Login</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div></div>
            </div>
        </nav>
    </header>
<body>