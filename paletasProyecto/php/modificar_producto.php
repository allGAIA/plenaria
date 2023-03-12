<?php

include "conexion.php";

$id=$_GET["id"];

$sql = $conexion->query( " select * from paletas where ID_Paleta=$id" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style_tabla.css">
    <script src="https://kit.fontawesome.com/46f8b2561d.js" crossorigin="anonymous"></script>

    <title>Modificacion</title>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
         <h3 class="text-center text-secondary">Modificar Productos</h3>
         <input type="hidden" name="id" value="<?= $_GET["id"]?>">
         <?php
         include "modificar_producto_c.php";
         while ($datos=$sql->fetch_object()) {?>
         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Sabor</label>
             <input type="text" class="form-control" id="sabor" name="sabor" value="<?= $datos->sabor ?>">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Costo</label>
             <input type="number" class="form-control" id="Costo" name="Costo" value="<?= $datos->Costo ?>">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Precio</label>
             <input type="number" class="form-control" id="Precio" name="Precio" value="<?= $datos->Precio ?>">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Precio al Mayoreo</label>
             <input type="number" class="form-control" id="Precio_m" name="Precio_m" value="<?= $datos->Precio_m ?>">
         </div>
         <?php }
         ?>
         

         <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
     </form>
</body>
</html>