<?php
session_start();
include 'modelo/ObtProducto.php';
 ?>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Boutique Allen :. Categoria hombres</title>
    <link rel="icon" href="/img/allen.png"/>
    <link rel="stylesheet" href="/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/css/menu.css" type="text/css"/>
    <link rel="stylesheet" href="/css/fuentes.css" type="text/css"/>
    <link rel="stylesheet" href="/css/icons.css" type="text/css"/>
    <link rel="stylesheet" href="/css/Animate.css" type="text/css"/>
    <style>
    .main{
      width: 68%;
    }
    </style>
</head>
  <body>
    <header>
      <?php
         include 'header.php';
         include 'menu.php';
       ?>
    </header>

  <section class="main">
    <?php
    $ObtPro=new ObtProductos();
     if($ObtPro->ObtenerTodos()){
       $input=$_SESSION["producto"];
       $productos = array_reverse($input);
       for ($i=1; $i <=20 ; $i++) {
         ?>
         <article class="categoria1">
           <div class="articulo">
             <a href="DetalleProdu.php?id=<?php echo $productos[$i]['id']; ?>"><img src="<?php echo $productos[$i]['img'];?>" /></a>
           </div>
           <h3><a href="DetalleProdu.php?id=<?php echo $productos[$i]['id']; ?>"><?php echo $productos[$i]['producto'];?></a></h3>
           <p>Sexo: <?php echo $productos[$i]['sexo'];?></p>
           <p>Color: <?php echo $productos[$i]['color'];?></p>
           <p>Precio: $<?php echo $productos[$i]['precio'];?> MX</p>
         </article>
         <?php
       }
     }
     ?>
  </section>
  <?php
  include 'pie.php';
   ?>
  </body>
</html>
