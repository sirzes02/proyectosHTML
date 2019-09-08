<?php
    $bandera = false;

    foreach ($matrizUsuario as $registro) {
        if (strtolower($registro['cor_cre']) == strtolower($_POST['correoIngreso']) && $registro['con_cre'] == $_POST['contraseniaIngreso']) {
                $bandera = true;
                break;
        }
    }

    if ($bandera) {
        session_start();
        $_SESSION['usuario'] = $_POST['correoIngreso'];
        header("Location: ../vista/principalVista.php");
    } else {
    header("location: ../index.html");  
    }
?>