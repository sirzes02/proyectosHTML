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
  <title>Ver tareas</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
  <link rel="stylesheet" type="text/css" href="../css/tabla.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
    <div class="bg-color">
      <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="principalVista.php">Gestor de tareas</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li><a href="principalVista.php">Principal</a></li>
                <li class="active"><a href="#">Ver tareas</a></li>
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
                <h2><span><?php echo $_SESSION['usuario']; ?></span>,</h2>
                <p>Ver Tus Tareas</p>
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
          <h2 class="title text-center">Tus tareas <span class="deco">guardadas</span>.</h2>
          <div class="box">
          <table class="datos">
            <tr>
              <td><strong>Nombre</strong></td>
              <td><strong>Estado</strong></td>
              <td><strong>Prioridad</strong></td>
              <td><strong>Creación</strong></td>
              <td><strong>Finalización</strong></td>
              <td><strong>Descripción</strong></td>
            </tr>
            <?php
              require_once("../controlador/tareasControlador.php");
            ?>
          </table>
          </div>
          <br><br><br>
          <hr>
          <h2 class="title text-center"><span class="deco">Crea</span> tus tareas.</h2>
          <form class="box" action="../controlador/tareasControlador.php" method="POST">
            <input class="input" type="text" placeholder="Nombre" name="nombreTarea" autocomplete="off" required><br>
            <select name="estadoTarea" required>
              <option disable select hidden>Estado</option>
              <optgroup label="Estado"></optgroup>
              <option value="Por Hacer">Por hacer</option>
              <option value="En Curso">En curso</option>
            </select><br>
            <select name="prioridadTarea" required>
              <option disable select hidden>Prioridad</option>
              <optgroup label="Prioridad"></optgroup>
              <option value="Urgente" select>Urgente</option>
              <option value="Importante">Importante</option>
              <option value="Normal">Normal</option>
            </select><br>
            <input class="input" type="date" name="finalizacionTarea"><br>
            <textarea rows="10" cols="90" placeholder="Descripción" name="descripcionTarea"></textarea><br>
            <input class="btn__submit" type="submit" value="Registrar" name="registroTarea">
          </form>
          <br><br><br>
          <h2 class="title text-center"><span class="deco">Modifica</span> tus tareas.</h2>
          <form class="box" action="../controlador/modificarControlador.php" method="POST">
            <select name="nombreTarea" required>
              <option disable select hidden>Seleccione la tarea</option>
              <optgroup label="Seleccione la tarea"></optgroup>
              <?php
                require_once("../controlador/cambioControlador.php");
              ?>
            </select>
            <select name="atributo">
              <option disable select hidden>Seleccione el atributo</option>
              <optgroup label="Seleccione el atributo"></optgroup>
              <option value="nom_tar">Nombre</option>
              <option value="est_tar">Estado</option>
              <option value="pri_tar">Prioridad</option>
              <option value="fec_fin_tar">Finalización</option>
              <option value="des_tar">Descripción</option>
            </select>
            <input class="input" type="text" placeholder="Nuevo Dato" name="cambio" autocomplete="off" required>
            <input class="btn__submit" type="submit" value="Modificar" name="modificar">
          </form>
          <br><br><br>
          <h2 class="title text-center"><span class="deco">Elimina</span> tus tareas.</h2>
          <form class="box" action="../controlador/modificarControlador.php" method="POST">
            <select name="deleteTarea">
              <option disable select hidden>Seleccione la tarea</option>
              <optgroup label="Seleccione la tarea"></optgroup>
              <?php
                require("../controlador/cambioControlador.php");
              ?>
            </select>
            <input class="btn__submit" type="submit" value="Eliminar" name="eliminar">
          </form>
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