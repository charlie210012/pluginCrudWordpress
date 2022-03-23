<?php
require 'conexion.php';

require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");

date_default_timezone_set('America/Bogota');

$porcentaje = $_POST['Eporcentaje'];
$fechavance = $_POST['Efechavance'];
$dgestion = $_POST['Edgestion'];
$id = $_POST['EidGestion'];
$user = wp_get_current_user();



$update = "UPDATE `tblGestionCasos` SET `porcentaje`='$porcentaje',`fechaAvance`='$fechavance',`descripcionGestion`='$dgestion' WHERE `id` = '$id ' ";


$consulta1 = mysqli_query($conexion,$update);

    if($consulta1){
      echo "OK";  
    }else{
        echo "Error al ingresar datos";
    }
?>