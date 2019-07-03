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

  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
        <li class="" data-target="#myCarousel" data-slide-to="3"></li>
        <li class="" data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <center><img src="img/samsung.jpg" alt="First slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Samsung Announces </h1>
              <p id="nav-tex">Samsung Series 9 laptop measures just 11.8mm thick and sports a fanless design</p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <center><img src="img/hp.jpg" alt="Second slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>HP Pavilion</h1>
              <p>Extremadamente fino con una enorme pantalla</p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <center><img src="img/acer1.jpg" alt="Second slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Alcatel One Touch Idol</h1>
              <p>Con un diseño elegante y acabado premium.</p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
        
        <div class="item">
          <center><img src="img/toshiba.jpg" alt="Second slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Toshiba Satellite </h1>
              <p>La pantalla 4K Ultra-HD que está disponible para la Satellite P50t</p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <center><img src="img/alien.jpg" alt="Third slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Alienware M18x</h1>
              <p></p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	
<!--Inicio del contenedor-->
  <div class="container"> 
       <div class="row">
           <br><br>
        <div class="col-lg-4">
        
          
          <h2>Articulo1</h2>
          
        </div>
        <div class="col-lg-4">
          
          <h2>articulo2</h2>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2>Articulo3</h2>
          
         
        </div><!-- /.col-lg-4 -->
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