<?php
    class tareasModelo{
        private $db;
        private $tarea;
        private $varsesion;

        public function __construct(){
            require_once("conectarModelo.php");
            session_start();
            error_reporting(0);
            $this->db = conectarModelo::conexion();
            $this->tarea = array();
            $this->varsesion = $_SESSION['usuario'];
        }

        public function getTarea(){
            $consulta = $this->db->query("SELECT * FROM tarea");

            while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->tarea[] = $filas;
            }

            return $this->tarea;
        }

        public function setTarea(){
            $consulta = $this->db->query('INSERT INTO tarea VALUES(null, "'. $_POST['nombreTarea']. '", "'. $_POST['estadoTarea']. '", "'. $_POST['prioridadTarea']. '", null, "'. $_POST['finalizacionTarea']. '", "'. $_POST['descripcionTarea']. '", null, "'. $this->varsesion.'" );');
            header("location: ../vista/verVista.php");
        }

        public function setTareaEspecifica(){
            $consulta = $this->db->query('UPDATE tarea SET '. $_POST['atributo']. ' = "'. $_POST['cambio']. '" WHERE nom_tar = "'. $_POST['nombreTarea'].'" AND cor_cre = "'. $this->varsesion.'";');
            header("location: ../vista/verVista.php");
        }

        public function eliminarTarea(){
            $consulta = $this->db->query('DELETE FROM tarea WHERE nom_tar = "'. $_POST['deleteTarea'].'" AND cor_cre = "'. $this->varsesion.'";');
            header("location: ../vista/verVista.php");
        }
    }
?>