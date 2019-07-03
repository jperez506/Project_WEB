<?php
  session_start();
  include './conexion.php';
  if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
          $arreglo=$_SESSION['carrito'];
          $encontro=false;
          $numero=0;
          for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]['Id']==$_GET['id']){
              $encontro=true;
              $numero=$i;
            }
          }
          if($encontro==true){
            $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
            $_SESSION['carrito']=$arreglo;
          }else{
            $nombre="";
            $precio=0;
            $imagen="";
            $re=mysql_query("select * from productos where id=".$_GET['id']);
            while ($f=mysql_fetch_array($re)) {
              $nombre=$f['nombre']; //minusucula cuando se accede de bd
              $precio=$f['precio'];
              $imagen=$f['imagen'];
            }
            $datosNuevos=array('Id'=>$_GET['id'],
                    'Nombre'=>$nombre, //mayusculas cuando se accede del arreglo
                    'Precio'=>$precio,
                    'Imagen'=>$imagen,
                    'Cantidad'=>1);

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito']=$arreglo;

          }
    }




  }else{
    if(isset($_GET['id'])){
      $nombre="";
      $precio=0;
      $imagen="";
      $re=mysql_query("select * from productos where id=".$_GET['id']);
      while ($row=mysql_fetch_array($re)) {
        $nombre=$row['nombre'];
        $precio=$row['precio'];
        $imagen=$row['imagen'];
      }
      $arreglo[]=array('Id'=>$_GET['id'],
              'Nombre'=>$nombre,
              'Precio'=>$precio,
              'Imagen'=>$imagen,
              'Cantidad'=>1);
      $_SESSION['carrito']=$arreglo;
    }
  }
?>
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
      $total=0;
      if(isset($_SESSION['carrito'])){//verifica si existe la sesion
      $datos=$_SESSION['carrito']; //si existe
      
      $total=0;   //variable para el total de todos los productos
      for($i=0;$i<count($datos);$i++){  //recorre el arreglo
        
  ?>
        <div class="producto">   
          <center>
            <img src="productos/<?php echo $datos[$i]['Imagen'];?>"><br> <!-- imprime la imagen que este en i en imagen -->
            <span ><?php echo $datos[$i]['Nombre'];?></span><br> <!-- imprime la imagen que este en i en dato nombre -->
            <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br> <!-- imprime la imagen que este en i en dato precio -->
            <!-- EN mayuscula porque esta sacando la info de el arreglo y no de la base de datos?? -->
            <span>Cantidad: 
              <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>" 
            
              
              class="cantidad">
            </span><br>
            <span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
            <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
          </center>
        </div>
      <?php
        $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
      }
        
      }else{
        echo '<center><h2>No has añadido ningun producto</h2></center>';
      }
      echo '<center><h2 id="total">Total: '.$total.'</h2></center>';  //termina el ciclo for e imprime el total
      if($total!=0){
          echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>;';
      }
      
    ?>
    <center><a href="./">Ver catalogo</a></center>
          
         
          
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