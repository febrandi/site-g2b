<?php

require_once('functions.php'); // garante que o arquivo só foi incluido uma vez
include_once('header.php'); // inclui header na pagina

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento - G2B </title>

    <link href="img/minilogo_g2b.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<main class="container">
    <h1>Solicite seu Orçamento</h1>
    <h3>Preencha as informações de sua obra ou reforma e entraremos em contato com você para os próximos passos!</h3>


    <form action="solicite_orcamento.php" method="POST" autocomplete="off">
      <div class="form-group">
          <label for="pessoa">Pessoa</label>
          <br>
          <select name="pessoa" id="pessoa" required>
            <option selected disabled>Selecione</option>
            <option value="PF">Física</option>
            <option value="PJ">Jurídica</option>
          </select>
      </div>

        <div class="form-group">
            <label for="nome">Nome ou Empresa</label>
            <input type="text" name="nome" class="form-control" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : '' ?>">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : '' ?>">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo</label>
            <br>
            <select name="tipo" id="tipo" required>
              <option selected disabled>Selecione</option>
              <option value="OB">Obra</option>
              <option value="REF">Reforma</option>
            </select>
        </div>

        <div class="form-group">
            <label for="classificacao">Classificação</label>
            <br>
            <select name="classificacao" id="classificacao" required>
              <option selected disabled>Selecione</option>
              <option value="RES">Residencial</option>
              <option value="COM">Comercial</option>
              <option value="CORP">Corporativo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="endereco" name="endereco" class="form-control" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : '' ?>">
        </div>

        <div class="form-group">
            <fieldset>
          <legend>Escopo de serviços</legend>
          <!-- <label for="servicos">Serviços</label> -->
          <!-- <br> -->
          <label for="demolicao">Demolição</label>
          <input type="checkbox" name="servicos" id="demolicao" value="demolicao"></label>
          <br>
          <label for="terraplenagem">Terraplenagem</label>
          <input type="checkbox" name="servicos" id="terraplenagem" value="terraplenagem"></label>
          <br>
          <label for="contencao">Contenção</label>
          <input type="checkbox" name="servicos" id="contencao" value="contencao"></label>
          <br>
          <label for="fundacao">Fundação</label>
          <input type="checkbox" name="servicos" id="fundacao" value="fundacao"></label>
          <br>
          <label for="estrutura">Estrutura</label>
          <input type="checkbox" name="servicos" id="estrutura" value="estrutura"></label>
          <br>
          <label for="civil">Serviços Civis</label>
          <input type="checkbox" name="servicos" id="civil" value="civil"></label>
          <br>
          <label for="cobertura">Cobertura</label>
          <input type="checkbox" name="servicos" id="cobertura" value="cobertura"></label>
          <br>
          <label for="impermeabilizacao">Impermeabilização</label>
          <input type="checkbox" name="servicos" id="impermeabilizacao" value="impermeabilizacao"></label>
          <br>
          <label for="pisos">Pisos</label>
          <input type="checkbox" name="servicos" id="pisos" value="pisos"></label>
          <br>
          <label for="revestimentos">Revestimentos de Parede</label>
          <input type="checkbox" name="servicos" id="revestimentos" value="revestimentos"></label>
          <br>
          <label for="eletrica">Elétrica</label>
          <input type="checkbox" name="servicos" id="eletrica" value="eletrica"></label>
          <br>
          <label for="hidraulica">Hidráulica e Gás</label>
          <input type="checkbox" name="servicos" id="hidraulica" value="hidraulica"></label>
          <br>
          <label for="incendio">Incêndio</label>
          <input type="checkbox" name="servicos" id="incendio" value="incendio"></label>
          <br>
          <label for="ar">Ar-Condicionado e Exaustão</label>
          <input type="checkbox" name="servicos" id="ar" value="ar"></label>
          <br>
          <label for="madeira">Esquadrias de Madeira</label>
          <input type="checkbox" name="servicos" id="madeira" value="madeira"></label>
          <br>
          <label for="metalica">Esquadrias Metálicas</label>
          <input type="checkbox" name="servicos" id="metalica" value="metalica"></label>
          <br>
          <label for="marcenaria">Marcenaria</label>
          <input type="checkbox" name="servicos" id="marcenaria" value="marcenaria"></label>
          <br>
          <label for="vidros">Vidros</label>
          <input type="checkbox" name="servicos" id="vidros" value="vidros"></label>
          <br>
          <label for="especiais">Instalações Especiais</label>
          <input type="checkbox" name="servicos" id="especiais" value="especiais"></label>
          <br>
          <label for="pintura">Pintura</label>
          <input type="checkbox" name="servicos" id="pintura" value="pintura"></label>
          <br>
          <label for="limpeza">Limpeza Final</label>
          <input type="checkbox" name="servicos" id="limpeza" value="limpeza"></label>
        </fieldset>
        </div>

        <div class="form-group">
            <label for="upload">Upload de projetos</label>
            <input type="upload" name="upload" class="form-control" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : '' ?>">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="solicite_orcamento">Upload</button>
        </div>

    <div class="form-group">
        <label for="comentarios">Comentários</label>
        <br>
        <textarea name="comentarios" id="comentarios" placeholder="Escreva aqui ...." maxlength="200"></textarea>
      </div>


        <!-- ADICIONAR INPUT FILE AQUI -->

        <div class="form-group">
            <button class="btn btn-primary" name="solicite_orcamento">Enviar</button>
        </div>


<?php
include_once("footer.php");
?>
