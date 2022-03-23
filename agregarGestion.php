<?php
require 'conexion.php';

require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");

date_default_timezone_set('America/Bogota');

$porcentaje = $_POST['porcentaje'];
$fechavance = $_POST['fechavance'];
$dgestion = $_POST['dgestion'];
$idProblema = $_POST['idGestion'];
$user = wp_get_current_user();



$select = "SELECT * FROM `tblGestionCasos` WHERE `Problema` = '$idProblema' AND `porcentaje` = '$porcentaje' AND `fechaAvance` = '$fechavance' AND `descripcionGestion` = '$dgestion' AND `userModified` = '$user->display_name'";


$consult = mysqli_query($conexion,$select);

$Resultado = mysqli_fetch_array($consult);

    if (!empty($Resultado)){
        echo 'error';
    }else{
        
        $insert = "INSERT INTO `tblGestionCasos`(`id`, `Problema`, `porcentaje`, `fechaAvance`, `descripcionGestion`, `userModified`) VALUES (NULL,'$idProblema','$porcentaje','$fechavance','$dgestion','$user->display_name')";
    
    
    
        $consulta1 = mysqli_query($conexion,$insert);
        
        var_dump($user->display_name);
            
        // echo 'ok';
    }

?>