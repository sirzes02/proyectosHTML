<?php
    $bandera = false;
    foreach ($matrizUsuario as $registro) {
        if (strtolower($registro['cor_usu']) == strtolower($_POST['correoIngreso']) && $registro['con_usu'] == $_POST['contraseniaIngreso']) {
            $bandera = true;
            break;
        }
    }
    if ($bandera) {
        session_start();
        $_SESSION['usuario'] = $_POST['correoIngreso'];
        header("Location: ../vista/index.php");
    } else {
        header("location: ../login.html");  
    }
?>