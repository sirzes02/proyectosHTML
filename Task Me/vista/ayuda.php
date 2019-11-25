<?php
  session_start();
  error_reporting(0);
  $varsesion = $_SESSION['usuario'];  
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Me</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"> 
  <div class="header">
    <div class="bg-color">
      <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand">Task Me</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <?php
                  if (isset($_SESSION['usuario'])) {
                    echo "<li><a>", $varsesion, "</a></li>";
                    echo "<li><a href='./index.php'>Inicio</a></li>";
                    echo "<li><a href='../controlador/cerrarControlador.php'>Cerrar sesion</a></li>";
                  } else {
                    echo "<li><a href='#'>Ayuda</a></li>";
                    echo "<li><a href='../login.html'>Iniciar sesión</a></li>";
                  }
                ?>
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
                <h2><span><?php echo $_SESSION['usuario'];?></span></h2>
                <p>Bienvenido a tu gestor de tiempo</p>
                <p>toma el control del tiempo en tus estudios</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">¿Quién puede <span class="deco">ayudarte</span> con tus actividades?</h2>
          <center>
            <form class="box" action="../controlador/scrapingProfesores.php" method="POST">
              <b>Facultad:</b>
              <select name="facultad">
                <option value="2">Educación</option>
                <option value="1">Ingeniería</option>
                <option value="3">Comunicación</option>
              </select>
              <button type="submit" class="button button-block" name="buscar">Buscar</button>
            </form>
          <center>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="footer">
            Diseñado por: Santiago Varela, Jonathan Alban y Jhonnyer Sierra.
            <div class="credits">
              Universidad <a href="https://www.usc.edu.co/">Santiago de Cali</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-right">
          <ul class="social-list">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
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