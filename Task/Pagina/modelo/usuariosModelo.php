<?php
    class usuariosModelo{
        private $db;
        private $usuario;

        public function __construct(){
            require_once("conectarModelo.php");

            $this->db = conectarModelo::conexion();
            $this->usuario = array();
        }

        public function getUsuario(){
            $consulta = $this->db->query("SELECT * FROM creador");

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->usuario[] = $filas;
            }

            return $this->usuario;
        }

        public function setUsuario(){
            $bandera = true;

            foreach ($this->getUsuario() as $registro) {
                if ($registro['cor_cre'] == $_POST['correoRegistro']) {
                        $bandera = false;
                        break;
                }
            }

            if ($bandera) {
                $consulta = $this->db->query('INSERT INTO creador VALUES(null, "'. $_POST['nombreRegistro']. '", "'. $_POST['apellidoRegistro']. '", "'. $_POST['correoRegistro']. '", "'. $_POST['contraseniaRegistro'].'" )');
                echo '<script language="javascript">alert("Cuenta creada con exito..."); window.location="../index.html"</script>';
            } else {
                echo '<script language="javascript">alert("Ya existe correo..."); window.location="../index.html"</script>';
            }
        }
    }
?>