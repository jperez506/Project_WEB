<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tienda de computadoras</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
</head>
<body>

  <!--Menu principal head-->
  <?php include('navbar-inc.php');?>
  
    
	
<!--Inicio del contenedor-->
  <div class="container"> 
       <div class="row">
           <br><br>
        <div class="col-lg-12">
          <?php
    include 'conexion.php';
    $re=mysql_query("select * from productos where id=".$_GET['id'])or die(mysql_error());
    while ($f=mysql_fetch_array($re)) {
    ?>
      
      <center>
        <img src="./productos/<?php echo $f['imagen'];?>"><br>
        <span><?php echo $f['nombre'];?></span><br>
        <span>Precio: <?php echo $f['precio'];?></span><br>
        <a href="./carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carrito de compras</a>
      </center>
    
  <?php
    }
  ?>
          
          
          
        </div>
        
      </div><!-- /.row -->
      
      <!--Pie de pagina footer-->
      <?php include('footer-inc.php'); ?>
  </div>
<!--Fin del contenedor-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>

  <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  $(function () {

      $('[data-toggle="popover"]').popover()

  })
</script>
    
</body>
</html>