<?php
require 'conexion.php';


    $rawdata = array();
    $i = 0;
    
    $consulta1 = mysqli_query($conexion, "(SELECT * FROM `tblProyectos` ORDER BY `Proyecto` ASC)");
      while ($Resultados = mysqli_fetch_array($consulta1)) {
          $rawdata[$i] = $Resultados;
            $i++;
      }
      
     
     
?>