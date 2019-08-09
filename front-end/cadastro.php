<?php
    require_once('functions.php'); //garante que o arquivo só foi incluido uma vez
    include_once('header.php'); //inculi header na pagina

    if (($_POST['nome'])==""){
        echo "Preencha o campo Nome <br>";
    }
    if (($_POST['preço'])==""){
        echo "Preencha o campo Preço <br>";
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h1>Cadastro de Produtos</h1>
        <br>
        <form action="cadastro.php" method="post">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" placeholder="Digite o nome do produto">
            <br>

            <label>Preço</label>
            <input class="form-control" type="int" name="preço" placeholder="Digite o preço do produto">
            <br>
    
            <label>Quantidade em Estoque</label>
            <input class="form-control" type="int" name="quantidadeEmEstoque" placeholder="Digite a quantidade em estoque do produto">
            <br>
        
            <label>Quantidade Mínima</label>
            <input class="form-control" type="int" name="quantidadeMinima" placeholder="Digite a quantidade minima do produto">
            <br>
    
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </main>


</body>
</html>