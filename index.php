<?php
require_once('functions.php'); // garante que o arquivo só foi incluido uma vez
include_once('header.php'); // inclui header na pagina
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>G2B Construtora</title>
    <link href="img/minilogo_g2b.png" rel="shortcut icon">
</head>

  <body>

    <main class="container-fluid">
        
      <section class="container-fluid ag2b">
        <div class="container flexbox">
          <div class="textos-ag2b">
            <h2>Especializados em Gerenciamento de Obras</h2>
            <p>Não importa o tamanho da obra, estamos aqui para atender você. Comercial, residencial ou corporativo, 
            faça seu orçamento com a gente e descubra que fazer obras, na verdade, é um prazer.</p>
            <br>
            <br>
            <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="#" role="button">A G2B</a></p>
            <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="#" role="button">Solicite o seu Orçamento</a></p>
          </div>
                
          <div>
            <img src="img/imagem_ag2b.jpg" alt=" Imagem A G2B" height= 500px>
          </div>
        </div>
      </section>
          
       
      <section class="container-fluid ns">
        <div class="container flexbox">
          <div class="textos-ns">
            <h2>Nossos Serviços</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus aspernatur optio esse, quisquam iure, voluptates alias architecto vitae commodi veniam doloremque nam voluptas maxime ratione, explicabo officiis est aut et?</p>
          </div>
          <div>
            <img src="#">
            <h3>Gestão de Serviços Pré-Obra</h3>
            <img src="#">
            <h3>Coordenação de Engenharia</h3>
          </div>

          <div>
            <img src="#">
            <h3>Acompanhamento de Garantias Pós-Obra</h3>
            <img src="#">
            <h3>Segurança e Meio Ambiente</h3>
          </div>
        </div>
      </section>
          
    
      <section class="container-fluid portfolio">
        <div class="container flexbox">
            <div>
              <h2>Residencias</h2>
              <img src="img/residencial.jpg" alt="Foto Residencial" height = 350px>
            </div>
            <div>
              <h2>Comerciais</h2>
              <img src="img/comercial.jpg " alt="Foto Residencial" height = 350px>
            </div>
            <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" href="#" role="button">Portfolio</a></p>
        </div>
      </section>
          
          
      <section class="container-fluid noticias">
        <h2>Notícias</h2>
        <div class="container flexbox">
          <div>
            <div class="card">
              <div class="text">
                <h2>Notícia 1</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <button type="button" name="button" class="btn btn-primary btn-lg" href="#">Ver Mais</button>
              </div>
            </div>
          </div>

          <div>
            <div class="card">
              <div class="text">
                <h2>Notícia 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button type="button" name="button" class="btn btn-primary btn-lg" href="#">Ver Mais</button>
              </div>
            </div>
          </div>

          <div>
            <div class="card">
              <div class="text">
                <h2>Notícia 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button type="button" name="button" class="btn btn-primary btn-lg" href="#">Ver Mais</button>
              </div>
            </div>
          </div>
        </div>
      </section>
         
      
      <section class="container-fluid sso">
        <div class="container">
          <h2>Solicite seu Orçamento</h2>
          <button type="button" name="button" class="btn btn-primary btn-lg" href="#">Formulário</button>
        </div>
      </section>
          
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>


<?php
include_once("footer.php");
?>