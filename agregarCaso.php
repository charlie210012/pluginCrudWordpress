<?php
require 'conexion.php';

date_default_timezone_set('America/Bogota');

$proyecto = "'".$_POST['pro']."'";
$ciudad = "'".$_POST['ciudad']."'";
$entidad = "'".$_POST['entidad']."'";
$problema = "'".$_POST['problema']."'";
$solicitante = "'".$_POST['solicitante']."'";
$responsable = "'".$_POST['responsable']."'";
$solicitud = "'".$_POST['solicitud']."'";
$fechacomite = "'".$_POST['fechacomite']."'";
$Dproblema = "'".$_POST['Dproblema']."'";
$Csolicitante= "'".$_POST['Csolicitante']."'";
$Cresponsable = "'".$_POST['Cresponsable']."'";
$prioridad = "'".$_POST['prioridad']."'";
$hhpp = $_POST['hhpp'];
$fechaC = "'".$_POST['fechaC']."'";
$fechaA ="'".date("Y-m-d")."'";

$select = "SELECT * FROM `tblCasos` WHERE `fechaComite` = $fechacomite AND `entidad` = $entidad AND `ciudad` = $ciudad AND `problema` = $problema AND `descripcionProblema` = $Dproblema AND `proyecto` = $proyecto AND `nombreSolicitante` = $solicitante AND `correoSolicitante` = $Csolicitante AND `impactoHHPP` = $hhpp AND `solicitudCaso`  = $solicitud AND `nombreResponsable` = $responsable AND `correoResponsable` = $Cresponsable AND `prioridad` = $prioridad AND `fechaCompromiso` = $fechaC";


$consult = mysqli_query($conexion,$select);

$Resultado = mysqli_fetch_array($consult);

    if (!empty($Resultado)){
        echo 'error';
    }else{
        
        $insert = "INSERT INTO `tblCasos` (`id`, `fechaComite`, `entidad`, `ciudad`, `problema`, `descripcionProblema`, `proyecto`, `nombreSolicitante`, `correoSolicitante`, `fechaAperturaCaso`, `impactoHHPP`, `solicitudCaso`, `nombreResponsable`, `correoResponsable`, `prioridad`, `fechaCompromiso`) VALUES (NULL, $fechacomite, $entidad, $ciudad, $problema, $Dproblema,$proyecto,$solicitante,$Csolicitante,$fechaA,$hhpp,$solicitud,$responsable,$Cresponsable,$prioridad,$fechaC)";
    
    
    
        $consulta1 = mysqli_query($conexion,$insert);
        
            
        echo 'ok';
    }

?>