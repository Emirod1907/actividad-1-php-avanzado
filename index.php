<?php
require_once ('controlador/plantilla.controlador.php');


//instanciar objeto

$plantilla = new ControladorPlantilla();

//ejecutar el metodo

$plantilla -> ctrGetPlantilla();

if (file_exists('C:/xampp/htdocs/curso php avanzado/clase 2/vista/plantilla.php')) {
    echo "Archivo encontrado";
} else {
    echo "Archivo NO encontrado";
}
echo realpath('../vista/plantilla.php');


?>

