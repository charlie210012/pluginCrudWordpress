<?php
require 'conexion.php';

date_default_timezone_set('America/Bogota');

$ide = $_POST['id'];
$proyecto = "'".$_POST['Epro']."'";
$ciudad = "'".$_POST['Eciudad']."'";
$entidad = "'".$_POST['Eentidad']."'";
$problema = "'".$_POST['Eproblema']."'";
$solicitante = "'".$_POST['Esolicitante']."'";
$responsable = "'".$_POST['Eresponsable']."'";
$solicitud = "'".$_POST['Esolicitud']."'";
$fechacomite = "'".$_POST['Efechacomite']."'";
$Dproblema = "'".$_POST['EDproblema']."'";
$Csolicitante= "'".$_POST['ECsolicitante']."'";
$Cresponsable = "'".$_POST['ECresponsable']."'";
$prioridad = "'".$_POST['Eprioridad']."'";
$hhpp = $_POST['Ehhpp'];
$fechaC = "'".$_POST['EfechaC']."'";


$update = "UPDATE `tblCasos` SET `fechaComite`=$fechacomite,`entidad`=$entidad,`ciudad`=$ciudad,`problema`=$problema,`descripcionProblema`=$Dproblema,`proyecto`=$proyecto,`nombreSolicitante`=$solicitante,`correoSolicitante`=$Csolicitante,`impactoHHPP`=$hhpp,`solicitudCaso`=$solicitud,`nombreResponsable`=$responsable,`correoResponsable`=$Cresponsable,`prioridad`=$prioridad,`fechaCompromiso`=$fechaC  WHERE `id` = '$ide'";

$consulta1 = mysqli_query($conexion,$update);

    if($consulta1){
      echo "OK";  
    }else{
        echo "Error al ingresar datos";
    }