<?php
  session_start();
  error_reporting(0);

  $varsesion = $_SESSION['usuario'];

  if($varsesion == null || $varsesion =''){ 
      header("location: ../error.html");
      die();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina Principal</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
  <link rel="stylesheet" href="../css/calendar.css" media="screen">
  <style type="text/css">#wrapper{padding: 50px 0 0 325px;}#calendar{margin:25px auto; width: 370px;}</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="../js/jquery-ui-datepicker.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
    <div class="bg-color">
      <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Gestor de tareas</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="#">Principal</a></li>
                <li><a href="verVista.php">Ver tareas</a></li>
                <li><a href="../controlador/cerrarControlador.php">Cerrar la sesión</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2>Bienvenido <span><?php echo $_SESSION['usuario']; ?></span>,</h2>
                <p>Crea y Gestiona Tus Tareas <br>en un Solo Lugar</p>
              </div>
              <div class="overlay-detail text-center">
                <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="about" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-right">
          <h2 class="title-text">
            Bienvenido<br><span class="deco">Organiza</span> tus tareas
          </h2>
        </div>
        <div class="col-md-6 text-left">
          <div id="calendar"></div>
          <script>
            $('#calendar').datepicker({
              inline: true,
              firstDay: 1,
              showOtherMonths: true,
              dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
            });
          </script>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Tus fotos <span class="deco">Subidas</span> a las tareas.</h2>
        </div>
        <div class="col-md-12">
          <div id="myGrid" class="grid-padding">
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="../img/portfolio01.jpg" class="img-responsive">
              <img src="../img/port01.jpg" class="img-responsive">
              <img src="../img/port02.jpg" class="img-responsive">
              <img src="../img/portfolio01.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="../img/portfolio02.jpg" class="img-responsive">
              <img src="../img/port01.jpg" class="img-responsive">
              <img src="../img/port02.jpg" class="img-responsive">
              <img src="../img/portfolio01.jpg" class="img-responsive">
              <img src="../img/port03.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="../img/port01.jpg" class="img-responsive">
              <img src="../img/portfolio01.jpg" class="img-responsive">
              <img src="../img/portfolio02.jpg" class="img-responsive">
              <img src="../img/port03.jpg" class="img-responsive">
              <img src="../img/portfolio02.jpg" class="img-responsive">
              <img src="../img/port02.jpg" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="footer">
            Diseñado por: Santiago Varela.
            <div class="credits">
              Universidad <a href="https://www.usc.edu.co/">Santiago de Cali</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-right">
          <ul class="social-list">
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-dribbble"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-vimeo"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.bxslider.min.js"></script>
  <script src="../js/wow.js"></script>
  <script src="../js/custom.js"></script>
</body>
</html>