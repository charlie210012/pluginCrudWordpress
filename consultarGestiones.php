<?php
require 'conexion.php';

$id = $_POST['id'];

$consulta1 = mysqli_query($conexion,"(SELECT * FROM `tblGestionCasos` WHERE `Problema` = '$id')");

    $rawdata = array();
    $i = 0;
    $h = 0;
    
    

 while ($Resultados = mysqli_fetch_array($consulta1)){
     $rawdata[$i] = $Resultados;
     $i++;
     }
while ($h < count($rawdata)){
    $id = $rawdata[$h][0];
    $rawdata[$h][8] = '<a href="#"  onclick = "editGestion('.$id.');"   ><i class="fas fa-info-circle"></i></a>';
    $rawdata[$h][9] = '<a href="#"  id = "btnborragestion" onclick= "borrarGestion('.$id.');"><i class="fas fa-trash"></i></a>';
    $h++;
}
    

 
    echo json_encode($rawdata,JSON_UNESCAPED_UNICODE);

?>