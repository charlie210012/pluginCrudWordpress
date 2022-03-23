<?php
require 'conexion.php';


    $entidad = array();
    $i = 0;
    
    $consulta1 = mysqli_query($conexion, "(SELECT * FROM `tblEntidades` ORDER BY `entidad` ASC)");
      while ($Resultados = mysqli_fetch_array($consulta1)) {
          $entidad[$i] = $Resultados;
            $i++;
      }
      

?>