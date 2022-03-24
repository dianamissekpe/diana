<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/customStyle.css" />
    <title>Accueil</title>
  </head>
  <body>
    <main>
     <?php
require "header.php";

?>
	<div class= "" style="height: 500px">
	<hr>
	<p><h1> Voici les services qu'offre NANA'S Sarl </h1></p> <hr>
	<p><h2> NANA'S Sarl  comporte NANA'S Shop et NANA'S Computing</h2></p><hr>
	<p><h2> NANA'S Shop s'occupe de l'habillement et de l'événementiel</h2></p><hr> 
	<p><h2> NANA'S Computing  gère les sesvices de maintenance informatique et reseau, et développemnet web et desktop</h2></p> <hr>
	
	</div>
    <div class="pub" style="width:1200px">
      <div class="card">
        <img src="fonts/svgs/solid/gift.svg" alt="">
        <p>message1</p>
      </div>
      <div class="card">
        <img src="fonts/svgs/solid/car.svg" alt="">
        <p>message 2</p>
      </div>
      <div class="card">
        <img src="fonts/svgs/solid/globe.svg" alt="">
        <p>message 3</p>
      </div>
      <div class="card">
        <img src="fonts/svgs/solid/bus.svg" alt="">
        <p> message 4</p>
      </div>
	</div>
    </main>
    <?php

          require_once("footer.php");
    ?>
    
  </body>
</html>