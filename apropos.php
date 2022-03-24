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

?>	<div class= "" style="height: 500px">
	<p><h1> Nous somme NANA'S Shop </h1></p> 
	<p><h2> Une entreprise populaire par ses prestations sans egales </h2></p> 
		
	
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