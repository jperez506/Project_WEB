<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tienda de computadoras</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">

</head>
<body>

  <!--Menu principal head-->
  <?php include('navbar-inc.php');?>
 
	
<!--Inicio del contenedor-->
  <div class="container"> 
       <div class="row">
           <br><br>
        <div class="col-lg-12">
        <img src="" id="logo">
    <a href="carritodecompras.php" title="ver carrito de compras">
      <img src="img/cart.png">
    </a>
  </header>
  <section>
    
  <?php
    include 'conexion.php';
    $row=mysql_query("select * from productos")or die(mysql_error());
    while ($f=mysql_fetch_array($row)) {
    ?>
      <div class="producto">
      <center>
        <img src="productos/<?php echo $f['imagen'];?>"><br>
        <span><?php echo $f['nombre'];?></span><br>
        <a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>  <!-- envia la variable id por url por metodo get -->
      </center>
    </div>
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