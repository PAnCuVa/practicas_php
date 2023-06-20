<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Tienda de juegos Online</title>
  <?php
    $width="100%";
  ?>

  <style>
    table {
      border-collapse: collapse;
      width: <?php echo $width ?>;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <h2>Juegos para PC</h2>
  <?php

    // Definir el array de productos
    $productos = array(
      array("Assassins Creed Odyssey", 10.99, 5, "img/1.jpg"),
      array("CoD Infinite Warfare", 5.99, 8, "img/2.jpg"),
      array("DBZ Kakarot", 3.49, 12, "img/3.jpg"),
      array("GoW Ragnarok", 8.99, 3, "img/4.jpg"),
      array("Grand Theft Auto V", 12.99, 10, "img/5.jpg")
    );
  ?>   

  <div class="row">
    <?php
    foreach ($productos as $producto) {
  ?>
  <div class="col-12 col-sm-6 col-lg-3">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo $producto[3]?>" class="card-img-top img-fluid" alt="1.jpg">
        <div class="card-body">
          <h5 
            class="card-title"> <?php echo $producto[0]; ?> 
          </h5>
          <p class="card-text"> <h3>Precio:  <?php echo $producto[1]?></h3> </p>
          <p class="card-text"> <p>Unidades disponibles:  <?php echo $producto[2]?></p> </p>
          <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
  </div>
    <?php
      }
    ?>
    </div>
  
</body>
</html>