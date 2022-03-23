<?php
require 'conexion.php';

$ide = $_POST['id'];

$consulta2 = mysqli_query($conexion,"SELECT * FROM `tblGestionCasos` WHERE `id` = '$ide'");

$Resultado = mysqli_fetch_array($consulta2);

$consulta1 = mysqli_query($conexion,"DELETE FROM `tblGestionCasos` WHERE `id` ='$ide'");

if ($consulta1){
    echo  "ok";
}


?>