function addCaso(){
    jQuery('#addcaso').modal('show');
}

function addGestion(id){
    jQuery('#addgestion').modal('show');
    document.getElementById("idGestion").value = id;
    
}
    
function editCaso(id){
    jQuery('#editcaso').modal('show');
        var datos  = {
             "id": id,
         };
         jQuery.ajax({
            type: "POST",
            url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/extraerCasos.php",
            data: datos,
            success: function(r){
                var datoss = JSON.parse(r);
                document.getElementById("id").value = datoss["id"];
                document.getElementById("Esolicitud").value = datoss['solicitudCaso'];
                document.getElementById("Epro").value = datoss['proyecto'];
                document.getElementById("Eciudad").value = datoss['ciudad'];
                document.getElementById("Efechacomite").value = datoss['fechaComite'];
                document.getElementById("Eentidad").value = datoss['entidad']
                document.getElementById("Eproblema").value = datoss['problema'];
                document.getElementById("EDproblema").value = datoss['descripcionProblema'];
                document.getElementById("Esolicitante").value = datoss['nombreSolicitante'];
                document.getElementById("ECsolicitante").value = datoss['correoSolicitante'];
                document.getElementById("Eresponsable").value = datoss['nombreResponsable'];
                document.getElementById("ECresponsable").value = datoss['correoResponsable'];
                document.getElementById("Eprioridad").value = datoss['prioridad'];
                document.getElementById("Ehhpp").value = datoss['impactoHHPP'];
                document.getElementById("EfechaC").value = datoss['fechaComite'];
                
                return false;
                
            }
            
        });
}

function editGestion(id){
    jQuery('#editGestion').modal('show');
        var datos  = {
             "id": id,
         };
         jQuery.ajax({
            type: "POST",
            url:  "https://sgip.tech/wp-content/plugins/datatable-pruebas/extraerGestion.php",
            data: datos,
            success: function(r){
                var datoss = JSON.parse(r);
                document.getElementById("EidGestion").value = datoss["id"];
                document.getElementById("Eporcentaje").value = datoss['porcentaje'];
                document.getElementById("Efechavance").value = datoss['fechaAvance'];
                document.getElementById("Edgestion").value = datoss['descripcionGestion'];
                
                
                return false;
                
            }
            
        });
}