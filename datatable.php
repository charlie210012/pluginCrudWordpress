<?php
/* 
Plugin Name: datatable
Plugin URI: https://sidevtech.com/
Description: Este es el plugin que se desarrollo de forma manual para la vista bitacoras
Version: 1.0 
Author: Carlos Arevalo
Author URI: https://sidevtech.com/
License: GPLv2 
*/
// require "proyectos.php";
// require "municipios.php";


// include("modals/modalAddCaso.php");




add_shortcode( 'datatable', 'cn_mostrar_datatable' );


function cn_mostrar_datatable( $atts ) {
    
    
    require "proyectos.php";
    require "municipios.php";
    require "entidades.php";
    
    include("modals/modalAddCaso.php");
    include("modals/EditmodalAddCaso.php");
    include("modals/modalAddGestion.php");
    include("modals/EditAddGestion.php");
    
    
    $output = '
   
    <div class="container-fluid">
    <!-- Page Heading -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">
            <a href="#" class="btn btn-success btn-icon-split" onclick="addCaso();">
                <span class="icon text-white-50">
                    <i class="fas fa-hand-holding-medical"></i>
                </span>
                <span class="icon text-white-50">Añadir nuevo caso</span>
            </a>
        </h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Seguimiento Casos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                            <th>Número de casos</th>
                            <th>Proyecto</th>
                            <th>Ciudad</th>
                            <th>Entidad</th>
                            <th>Problema</th>
                            <th>Solicitante</th>
                            <th>Responsable</th>
                            <th>Impacto HHPP</th>
                            <th>Estado</th>
                            <th>Agregar gestión</th>
                            <th>Ver gestión</th>
                            <th>Editar</th>
                            <th>Eliminar</th>

                            </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4" id="hisGestiones" style="display: none">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Historial de Gestiones</h6>
        
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="gestionesProceso" width="100%" cellspacing="0">
        
                <thead>
                  <tr>
        
                    <th>Id</th>
                    <th>Id caso</th>
                    <th>Porcentaje</th>
                    <th>Fecha avance</th>
                    <th>Descripcion de avance</th>
                    <th>Usuario</th>
                    <th>fecha de modificación</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
        
                  </tr>
                </thead>
                <tbody>
        
                </tbody>
              </table>
        
            </div>
          </div>
        </div>
    </div>
    
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="/wp-content/plugins/datatable-pruebas/js/datatable.js"></script>
        <script type="text/javascript" charset="utf8" src="/wp-content/plugins/datatable-pruebas/js/modals.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
    return $output;
    
}