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
            $consulta = $this->db->query("SELECT * FROM usuario");
            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->usuario[] = $filas;
            }
            return $this->usuario;
        }

        public function setUsuario(){
            foreach ($this->getUsuario() as $registro) {
                if ($registro['cor_usu'] == $_POST['correoRegistro']) {
                    echo '<script language="javascript">alert("Ya existe correo..."); window.location="../index.html"</script>';
                }
            }
            if ($bandera) {
                $consulta = $this->db->query('INSERT INTO usuario VALUES("'. $_POST['correoRegistro']. '", "'. $_POST['nombreRegistro']. '", "'. $_POST['apellidoRegistro']. '", "'. $_POST['contraseniaRegistro'].'" )');
                echo '<script language="javascript">alert("Cuenta creada con exito..."); window.location="../vista/index.php"</script>';
            }
        }
    }
?>