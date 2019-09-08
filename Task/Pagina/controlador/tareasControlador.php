<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];

    require_once("../modelo/tareasModelo.php");
    $tarea = new tareasModelo();

    if (isset($_POST['registroTarea'])) {
        $tarea->setTarea();
    } else {
        $matrizTarea = $tarea->getTarea();
        foreach ($matrizTarea as $registro) {
            echo "<tr>";
            if($registro['cor_cre'] == $varsesion){
                echo "<td>". $registro['nom_tar']. "</td>";
                echo "<td>". $registro['est_tar']. "</td>";
                if($registro['pri_tar'] == "Urgente"){
                    echo "<td bgcolor='#F9A090'><strong>". $registro['pri_tar']. "</strong></td>";
                } else if($registro['pri_tar'] == "Importante") {
                    echo "<td bgcolor='#FAF6AE'>". $registro['pri_tar']. "</td>";
                } else {
                    echo "<td>". $registro['pri_tar']. "</td>";
                }
                echo "<td>". $registro['fec_cre_tar']. "</td>";
                echo "<td>". $registro['fec_fin_tar']. "</td>";
                echo "<td>". $registro['des_tar']. "</td>";
            }
            echo "</tr>";
        }
    }
?>