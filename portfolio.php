<?php

require_once('functions.php'); // garante que o arquivo só foi incluido uma vez
include_once('header.php'); // inclui header na pagina

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - G2B </title>

    <link href="img/minilogo_g2b.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <main class="container">
        <section class="col-sm-12">
            <div class="comerciais">
                <h2>Comerciais</h2>
                <div>
                    <a href="comerciais.php">
                    <img  src="img/comercial.jpg " alt="Foto Residencial" height = 573px>
                </div>
            </div>
            
            <div class="residenciais">
                <h2>Residencias</h2>
                <div>
                    <a href="residenciais.php">
                    <img src="img/residencial.jpg" alt="Foto Residencial">
                </div>
            </div>
        </section>
    </main>

</body>

<?php
include_once("footer.php");
?>