<?php
require 'conexion.php';

$consulta1 = mysqli_query($conexion,"(SELECT * FROM `tblCasos`)");
                      
$rawdata = array();
$i = 0;
$x = 0;

 while ($Resultados = mysqli_fetch_array($consulta1)){
     
     $rawdata[$i] = $Resultados;
     $i++;
     
    
    }
    
while ($x < count($rawdata)){
    $id = $rawdata[$x][0];
    $rawdata[$x][16] = '<a href="#"  onclick = "editCaso('.$id.');" id="btneditar" rl = "'.$rawdata[$x][0].'" ><i class="fas fa-info-circle"></i></a>';
    $rawdata[$x][17] ='<a href="#"  rl= "'.$rawdata[$x][0].'" id = "btnborra" onclick= "borrardato('.$rawdata[$x][0].');"><i class="fas fa-trash"></i></a>';
    $rawdata[$x][19] ='<a href="#" rl= "'.$rawdata[$x][0].'" onclick = "openData('.$id.');" id = "btnHG"><i class="fa fa-eye" aria-hidden="true"></i></a>';
    $rawdata[$x][20] ='<a href="#" rl= "'.$rawdata[$x][0].'"  onclick = "addGestion('.$id.');" id = "btngestion"><i class="fa fa-plus" aria-hidden="true"></i></a>';
    
    $consulta2 = mysqli_query($conexion,"(SELECT * FROM `tblGestionCasos` WHERE `Problema` = '$id' ORDER by id LIMIT 1)");
    $Resultado = mysqli_fetch_array($consulta2);
    if($Resultado['porcentaje'] == 100){
        $rawdata[$x][18] = "Cerrado";
    }else if(empty($Resultado['porcentaje'])){
        $rawdata[$x][18] = "En gestión, el caso no tiene seguimiento";
    }else{
        $rawdata[$x][18] = "En gestión, ultimo porcentaje: ".$Resultado['porcentaje'].'%';
    }

    $x++;
}

echo json_encode($rawdata,JSON_UNESCAPED_UNICODE);

?>

