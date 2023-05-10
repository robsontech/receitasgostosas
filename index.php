<!DOCTYPE html>
<html>
  <head>
    <title>Minha página inicial</title>
    <link rel="stylesheet" href="personalizacao.css">
  </head>
  <body>
    <h1>Minha página inicial</h1>
    <p>Bem vindo(a) à minha página inicial! Aqui você encontrará
      informações sobre mim e meus interesses.</p>
    <p>Sou um(a) aluno(a) iniciante em programação e cloud computing!
      Gosto também de assistir filmes, jogar bola, fazer musculação,
      viajar e jogar vídeo-game.</p>
    <?php
    date_default_timezone_set
      ('America/Sao_Paulo');
    echo date('h:i:s A');
    ?>
    <br>
    <a href="#" class="button">Entre em contato</a>
  </body>   
</html>
