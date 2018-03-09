var secciones;

window.onload = function(){
            $("#contenedor_spinner").fadeOut('slow');
        }

var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
        }
for (var selector in config) {
    $(selector).chosen(config[selector]);
}
$(".form_info_persona").on('submit',function(e){
    e.preventDefault();
    swal({
        title: "¿La información capturada es correcta?",
        text: "Verifica que la clave de elector sea la correcta!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, es correcta!",
        closeOnConfirm: false
    }, function () {
        nva_persona();
    });
});

$("#modal_info_persona").on('hidden.bs.modal', function () {
    $(".form_info_persona")[0].reset();
});


$(".select_distrito").change(function(){
    $(".select_seccion").html('');
    var dis = $(this).val();
    console.log(dis);
    var select_seccion = "<option val='' disabled selected>Selecciona una sección</option>";
    if( dis !== null ){
        for (var i = 0; i < secciones.length; i++) {
            if (dis == secciones[i].id_distrito) {
                select_seccion += "<option value="+secciones[i].id+"> Sección "+secciones[i].seccion+"</option>";    
            }
        }
        $(".select_seccion").html(select_seccion).trigger("chosen:updated");
    }
});

function get_colonias(){
    $.ajax({
        url:'php/funciones.php',
        data: "opc=get_colonias",
        dataType:'json',
        type:'post',
        success:function(json){
            if(json.success){
                var opt = "<option val='' disabled selected>Selecciona una colonia</option>";
                for (var i = 0; i < json.data.length; i++) {
                    opt += "<option value="+json.data[i].id+">"+json.data[i].pref+" "+json.data[i].nombre+"</option>";
                }
                $(".select_colonia").html(opt).trigger("chosen:updated");

            }
        },
        error:function(error){
            console.log(error);
        }
    })

}

function get_ocupaciones(){
    $.ajax({
        url:'php/funciones.php',
        data: "opc=get_ocupaciones",
        dataType:'json',
        type:'post',
        success: function(json){
            if(json.success){
                var ocup = "<option val='' disabled selected>Selecciona una opcion</option>";
                for (var i = 0; i < json.data.length; i++) {
                    ocup += "<option value="+json.data[i].id+">"+json.data[i].nombre+"</option>";
                }
                $(".select_ocupacion").html(ocup).trigger("chosen:updated");
            }
        },
        error:function(error){
            console.log(error);
        }
    });
}

function get_distritos_secciones(){
    datos = "opc=get_distritos_secciones";
    $.ajax({
        url:'php/funciones.php',
        data: datos,
        dataType:'json',
        type:'post',
        success:function(json){
            if(json.success){
                var d = json.data.distritos;
                secciones = json.data.secciones;
                var select_d = "<option val='' disabled selected>Selecciona un distrito</option>";
                for (var i = 0; i < d.length; i++) {
                    select_d += "<option value='"+d[i].id+"'> Distrito "+d[i].distrito+"</option>";
                }
                $(".select_distrito").html(select_d).trigger("chosen:updated");
            }
        },
        error:function(error){
            console.log(error);
        }
    });
}


function nva_persona(){
    var datos = $(".form_info_persona").serialize();
    datos += "&opc=nva_persona";
    console.log(datos);
    $.ajax({
        url:'php/funciones.php',
        data: datos,
        dataType:'json',
        type:'post',
        success:function(json){
            if(json.success){
                swal("Correcto", "Informacion guardada", "success");
                $("#modal_info_persona").modal('hide');
                if(json.info.origen == 'personas'){
                    set_gestion(json.info);
                }
                if(json.info.origen == 'beneficiarios'){
                    set_beneficiario(json.info);    
                }
                if(json.info.origen == 'tablas'){
                    buscar_personas();
                }
                $(".form_info_persona")[0].reset();
            }else{
                swal ( "Oops" ,  json.message ,  "error" );
            }
            console.log(json);
            $(".form_info_persona")[0].reset();
        },
        error:function(error){
            swal ( "Oops" ,  "Ocurrio un error en la consulta" ,  "error" );
            console.log(error);
        }
    });
}