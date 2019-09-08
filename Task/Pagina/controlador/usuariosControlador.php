<?php
    require_once("../modelo/usuariosModelo.php");

    $usuario = new usuariosModelo();

    if (isset($_POST['ingreso'])) {        
        $matrizUsuario = $usuario->getUsuario();
        require_once("compruebaLoginControlador.php");   
    }

    if (isset($_POST['registro'])) {
        if ($_POST['contraseniaRegistro'] == $_POST['contraseniaRegistro2']) {
            if (strlen($_POST['contraseniaRegistro']) >= 4) {
                $usuario->setUsuario();
            } else {
                echo '<script language="javascript">alert("La contraseña es demasiado corta..."); window.location="../registro.html"</script>';
            }
        } else {
            echo '<script language="javascript">alert("Las contraseña no coinciden..."); window.location="../registro.html"</script>';
        }
    }
?>