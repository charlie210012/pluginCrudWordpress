<?php
require 'conexion.php';

$consulta1 = mysqli_query($conexion,"(SELECT * FROM `Gestion Casos`)");

$rawdata = array();
$i = 0;

 while ($Resultados = mysqli_fetch_array($consulta1)){
     
     $rawdata[$i] = $Resultados;
     //$data = $rawdata[$i]['Trabajador'];
     //$consulta2 = mysqli_query($conexion,"(SELECT `EPS`, `Pension` FROM `Trabajadores` WHERE `trabajador` = '$data')");
     //$Resultados2 = mysqli_fetch_array($consulta2);
     //$datos[$i] = $Resultados;
     //$datos[15] = $Resultados2['EPS'];
     //$datos[16] = $Resultados2['Pension'];
     $i++;
     
    
    }

echo json_encode($rawdata,JSON_UNESCAPED_UNICODE);

?>