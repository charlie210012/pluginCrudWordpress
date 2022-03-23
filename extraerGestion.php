<?php
require 'conexion.php';

$ide = $_POST['id'];



$consulta1 = mysqli_query($conexion,"(SELECT * FROM `tblGestionCasos` WHERE `id` = '$ide')");


    $Resultado = mysqli_fetch_array($consulta1);
    
    echo json_encode($Resultado,JSON_UNESCAPED_UNICODE);

?>