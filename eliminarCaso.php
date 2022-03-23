<?php
require 'conexion.php';

$ide = $_POST['id'];

$consulta1 = mysqli_query($conexion,"DELETE FROM `tblCasos` WHERE `id` ='$ide'");

if ($consulta1){
    echo "ok";
}


?>