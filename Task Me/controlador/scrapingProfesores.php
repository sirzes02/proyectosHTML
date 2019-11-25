<?php  
    require_once("../apis/simple_html_dom.php");
    require_once("../modelo/profesorModelo.php");

    $facultad = isset($_POST['facultad']) ? $_POST['facultad'] : false;
    $enlace = '';
    $misProfesores = array();

    switch ($facultad) {
        case 1:
            $enlace = 'https://ingenieria.usc.edu.co/index.php/profesores-tiempo-completo-y-dedicacion-exclusiva';
            break;
        case 2:
            $enlace = "https://educacion.usc.edu.co/index.php/decanatura-de-educacion/cuerpo-directivo-y-administrativo";
            return;
            break;
        case 3:
            $enlace = "https://www.usc.edu.co/index.php/departamentos/comunicacion/docentes";
            return;
            break;
    }

    $html = file_get_html($enlace);

    $profesores = $html->find('h3');

    foreach ($profesores as $profesor) {
        array_push($misProfesores, new profesorModelo($profesor, "", "", ""));
    }

    echo $misProfesores;
?>