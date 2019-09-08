<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];

    require_once("../modelo/tareasModelo.php");
    $tarea = new tareasModelo();
    
    if(isset($_POST['modificar'])){
        if ($_POST['nombreTarea'] != "Seleccione la tarea" && $_POST['atributo'] != "Seleccione el atributo") {
            $tarea->setTareaEspecifica();
        } else {
            echo '<script language="javascript">alert("Seleccione algun dato."); window.location="../vista/verVista.php"</script>';
        } 
    } else {
        if ($_POST['deleteTarea'] != "Seleccione la tarea"){
            $tarea->eliminarTarea();
        } else {
            echo '<script language="javascript">alert("Seleccione algun dato."); window.location="../vista/verVista.php"</script>';
        }
    }
?>