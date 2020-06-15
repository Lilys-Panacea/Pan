<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Интернет-магазин</title>
  </head>

  <body>
    <?php
      require_once("header.php")
          ?>

    <section class="hero-image">
     <div class="container">
       <h1 class="heading">Lily's Panacea</h1>
       <p>Велосипеды</p>
        <figure>
        <a href="shos.html">
         <figcaption>Шоссейные</figcaption>
         <img src="img/shos.jpg" width="50%" alt="Foto-1" class = "user-image">
        </a>
        <a href="hardtail.html">
         <figcaption>Hardtail</figcaption>
         <img src="img/hardtail.jpg" width="50%" alt="Foto-1" class = "user-image">
        </a>
        <a href="downhill.html">
         <figcaption>Downhill</figcaption>
         <img src="img/downhill2.jpg" width="50%" alt="Foto-1" class = "user-image">
        </a>
        </figure>
     </div>
    </section>

    <?php
          require_once("footer.php");
      ?>
  </body>
</html>