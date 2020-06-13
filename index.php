<?php

//requerimento para linkar a classe PDO de conexão do banco
require("classes/conexao_bd.php");

//conexao com a classe de contato
require("classes/contato.class.php");

//a variavel abaixo define a pagina selecionada ao clicar nos menus
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de pessoas</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="./css/css.css">

</head>
<body>
      <!-- campo simples de menu -->
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav">
            <li class="nav-item <?= ($pagina == 'inicio')?'active':'' ?>">
              <a class="nav-link" href="?pagina=inicio">Início</a>
            </li>
            <li class="nav-item <?= ($pagina == 'sobre')?'active':'' ?>">
              <a class="nav-link" href="?pagina=sobre">Sobre</a>
            </li>
            <li class="nav-item <?= ($pagina == 'contato')?'active':'' ?>">
              <a class="nav-link" href="?pagina=contato">Contato</a>
            </li>
          </ul>
        </div>
      </nav>
      
      
      <?php
        //esse include ira colocar na tela a pagina selecionada e que foi atribuida a variavel $pagina
        include("./paginas/$pagina.php");
      ?>

</body>
</html>