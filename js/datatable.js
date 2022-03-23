let debugs;

let gestion;

jQuery(document).ready(function () {
        debugs = jQuery("#dataTable").DataTable({
        "serveSide": true,
        "language":{
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
        },
        "processing": true,
        "responsive": true,
        "ajax": {
        "url": "https://sgip.tech/wp-content/plugins/datatable-pruebas/casosDatos.php",
        "dataSrc":""
        },
        "columns": [
            {"data": "id"},
            {"data": "proyecto"},
            {"data": "ciudad"},
            {"data": "entidad"},
            {"data": "problema"},
            {"data": "nombreSolicitante"},
            {"data": "nombreResponsable"},
            {"data": "impactoHHPP"},
            {"data": "18"},
            {"data": "20"},
            {"data": "19"},
            {"data": "16"},
            {"data": "17"}
            
        ],
    });
});

jQuery(document).on("click","#btnEditarCaso",function(){
    var datos1 = jQuery('#casoEdit').serialize();
    jQuery.ajax({
        type: "POST",
        url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/actualizarCasos.php",
        data: datos1,
        success: function(r){
            if(r=="error"){
                Swal.fire({        
                title: '¡Atención!',
                text: 'Los datos no fueron actualizados', 
                icon: 'error',
                 });
            }else{
                Swal.fire({        
                title: '¡Felicidades!',
                text: 'Los datos fueron actualizados con exito',
                icon: 'success',
                 });
                 jQuery('#editcaso').modal('hide');
                 debugs.ajax.reload();
            }
            
            
        }
        
    })
    return false;
});
jQuery(document).on("click","#btnCaso",function(){
    var datos = jQuery('#casoCreate').serialize();
    jQuery.ajax({
        type: "POST",
        url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/agregarCaso.php",
        data: datos,
        success: function(r){
            if(r=="error"){
                Swal.fire({        
                title: '¡Atención!',
                text: 'El registro ya existe', 
                icon: 'error',
                 });
            }else{
                Swal.fire({        
                title: '¡Felicidades!',
                text: 'Los datos fueron agregados con exito',
                icon: 'success',
                 });
                 jQuery('#addcaso').modal('hide');
                 debugs.ajax.reload();
            }
            
        }
        
    })
    return false;
});



function borrardato(id){
     
    Swal.fire({
    title: 'Esta seguro?',
    text: "Se borrara el dato con id: " + id,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si,borrar!',
    cancelButtonText: 'No, cancelar!',
    }).then((result) => {
        if (result.isConfirmed){
                var datos  = {
                "id": id,
            };
            jQuery.ajax({
                type: "POST",
                url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/eliminarCaso.php",
                data: datos,
                success: function(r){
                    if (r=="ok"){
                    Swal.fire({
                    title: 'Felicidades!',
                    text:'Se ha borrado el dato con exito',
                    icon: 'success',
                    confirmButtonText: 'OK!',
                    }).then((res)=> {
                        if (res.isConfirmed){
                            debugs.ajax.reload();
                        }
                    })
                    }
                }
            });   
        }else {
            Swal.fire({
            title: 'Procesado!',
            text:'No se ha borrado el dato',
            icon: 'warning',
            });
        }
    
    });
}

function openData(id){
     document.getElementById('hisGestiones').style.display = "block";
     var datos  = {
             "id": id,
         };
     jQuery.ajax({
         
            type: "POST",
            url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/consultarGestiones.php",
            data: datos,
            success: function(r){
                var datoss = JSON.parse(r);
                
                    gestion = jQuery('#gestionesProceso').dataTable({
                     "language":{
                     "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                     },
                     "bAutoWidth" : false,
                     destroy: true,
                     "aaData" : datoss,
                     "columns" : [ 
                         { "data": "0" },
                         { "data": "1" },
                         { "data": "2" },
                         { "data": "3" },
                         { "data": "4" },
                         { "data": "5" },
                         { "data": "6" },
                         { "data": "8" },
                         { "data": "9" }
                         
                    ],
                    
              });
                
            }
     });
            
}

jQuery(document).on("click","#btnGestionadd",function(){
    var datos = jQuery('#gestionCreate').serialize();
    jQuery.ajax({
        type: "POST",
        url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/agregarGestion.php",
        data: datos,
        success: function(r){
            
            if(r=="error"){
                Swal.fire({        
                title: '¡Atención!',
                text: 'El registro ya existe', 
                icon: 'error',
                 });
            }else{
                Swal.fire({        
                title: '¡Felicidades!',
                text: 'Los datos fueron agregados con exito',
                icon: 'success',
                 });
                 jQuery('#addgestion').modal('hide');
                 debugs.ajax.reload();
            }
            
        }
        
    })
    return false;
});

function borrarGestion(id){
     
    Swal.fire({
    title: 'Esta seguro?',
    text: "Se borrara el dato con id: " + id,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si,borrar!',
    cancelButtonText: 'No, cancelar!',
    }).then((result) => {
        if (result.isConfirmed){
                var datos  = {
                "id": id,
            };
            jQuery.ajax({
                type: "POST",
                url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/eliminarGestion.php",
                data: datos,
                success: function(r){
                    if (r=="ok"){
                    Swal.fire({
                    title: 'Felicidades!',
                    text:'Se ha borrado el dato con exito',
                    icon: 'success',
                    confirmButtonText: 'OK!',
                    }).then((res)=> {
                        if (res.isConfirmed){
                            location.reload();
                        }
                    })
                    }
                }
            });   
        }else {
            Swal.fire({
            title: 'Procesado!',
            text:'No se ha borrado el dato',
            icon: 'warning',
            });
        }
    
    });
}

jQuery(document).on("click","#btnGestionEdit",function(){
    var datos1 = jQuery('#gestionEdit').serialize();
    jQuery.ajax({
        type: "POST",
        url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/actualizarGestion.php",
        data: datos1,
        success: function(r){
            if(r=="error"){
                Swal.fire({        
                title: '¡Atención!',
                text: 'Los datos no fueron actualizados', 
                icon: 'error',
                 });
            }else{
                Swal.fire({        
                title: '¡Felicidades!',
                text: 'Los datos fueron actualizados con exito',
                icon: 'success',
                 });
                 jQuery('#editGestion').modal('hide');
                 location.reload();
            }
            
            
        }
        
    })
    return false;
});
