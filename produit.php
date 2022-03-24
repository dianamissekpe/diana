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
	<div class= "" style="height: auto">
	   <p> <h1> Nos Produits </h1>
	   </p> 
		<h2> Les produits cosmétiques </h2> 
		<hr style="border: 2px solid blue">
		<div style="height: 460px; margin-top: 10px "> <?php  require "slide_cosm.php" ?>
		
		</div>
		<hr>
		<h2> Les vêtements de luxe </h2> 
		<hr style="border: 2px solid blue">
		<div style="height: 460px; margin-top: 10px ; ">
		
		<?php  require "slide_vet.php" ?>
		</div >
		
		<hr><h2> Les chaussures haut de gammes </h2>
		<hr style="border: 2px solid blue">
		<div style="height: 460px; margin-top: 10px "> <?php  require "slide_chau.php" ?> </div >
		<hr>
		<h2> Les tissus  </h2>
		<hr>
		
		<div style="height: 460px; margin-top: 10px ">
		<?php  require "slide_tiss.php" ?>
		</div >
		<hr>
		<h2> Lingerie fine </h2>
		<hr style="border: 2px solid blue">
		
		<div style="height: 460px; margin-top: 10px " >
		<?php  require "slide_ling.php" ?>
		</div >
	
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