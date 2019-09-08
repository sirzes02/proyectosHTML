<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];

    require_once("../modelo/tareasModelo.php");
    $tarea = new tareasModelo();

    $matrizTarea = $tarea->getTarea();
    foreach ($matrizTarea as $registro) {
        if($registro['cor_cre'] == $varsesion){
            echo "<option value='". $registro['nom_tar']. "'>". $registro['nom_tar']. "</option>";
        }
    }
?>