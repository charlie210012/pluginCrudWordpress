<?php
require 'conexion.php';


    $ciudades = array();
    $i = 0;
    
    $consulta1 = mysqli_query($conexion, "(SELECT * FROM `municipios` ORDER BY `municipio` ASC)");
      while ($Resultados = mysqli_fetch_array($consulta1)) {
          $ciudades[$i] = $Resultados;
            $i++;
      }
      

?>