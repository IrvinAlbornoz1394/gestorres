<?php 
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header('location: login.php');
    }
 ?>
<!DOCTYPE html>
<html lang="ES">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BOONWAYAK</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/chosen/chosen.css" rel="stylesheet">

    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">

    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

    <link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    
    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    
    

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <style>
        .txt_detalles_gestion{
            font-size: 15px;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                                 </a>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
                    <li>
                        <a href="gestion.php"><i class="fa fa-laptop"></i> <span class="nav-label">Nva Gestion</span></a>
                    </li>
                    <li  class="active">
                        <a href="gestiones.php"><i class="fa fa-th-list"></i> <span class="nav-label">Gestiones</span></a>
                    </li>
                    <li>
                        <a href="militantes.php"><i class="fa fa-child"></i><span class="nav-label">Militantes</span></a>
                    </li>
                    <li>
                        <a href="usuarios.php"><i class="fa fa-users"></i><span class="nav-label">Usuarios</span></a>
                    </li>
                    <li>
                        <a href="index.php">
                            <i class="fa fa-wrench"></i>
                            <span class="nav-label">Configucacioón</span> <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="categorias.php">Categorias</a></li>
                            <li><a href="roles.php">Roles/permiso</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="pull-right">
                        <a href="php/funciones.php?opc=logout">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </li>
                </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Lista de Gestiones</h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12" style="padding:0">
                        <div class="ibox float-e-margins div_busqueda_personas">
                            <div class="ibox-title">
                                <div class="row">
                                    <form class="form_filtro_gestiones">
                                        <div class="col-md-3">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control fecha_inicial fechas" placeholder="Fecha Inicial" name="fecha_inicial">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" placeholder="Fecha Final" class="form-control fecha_final fechas" name="fecha_final" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input_group">
                                                <select name="colonia" id="" class="chosen-select form-control select_colonia">
                                                    <option value="" >Selecciona una colonia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-success">Buscar</button>
                                        </div>
                                    </form>  
                                </div>
                            </div>
                            <div class="ibox-content table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table_gestiones table table-stripped toggle-arrow-tiny" data-page-size="8">
                                        <thead>
                                            <tr>

                                                <th>Articulo</th>
                                                <th>Solicitante</th>
                                                <th>Fecha alta</th>
                                                <th>Direccion entrega</th>
                                                <th>Estatus</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody_gestiones">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal Detalles Gestion-->
            <div class="modal inmodal" id="modal_detalles" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Detalles de la gestion</h4>
                            <small class="font-bold">La gestion seleccionada contiene la siguiente informacion.</small>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="label pull-right label-estatus"></span>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <small>Solicitante :</small><br>
                                        <span class="txt_detalles_gestion txt_solicitante"></span></p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <small>Beneficiaio :</small><br>
                                        <span class="txt_detalles_gestion txt_beneficiario"></span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <small>Articulo :</small><br>
                                        <span class="txt_detalles_gestion txt_articulo"></span>
                                    </p>    
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <small>Fecha de Alta :</small><br>
                                        <span class="txt_detalles_gestion txt_fecha_alta"></span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <small>Fecha Estimada Entrega :</small><br>
                                        <span class="txt_detalles_gestion txt_fecha_entrega"></span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <small>Fecha Real Entrega :</small><br>
                                        <span class="txt_detalles_gestion txt_fecha_real_entrega"></span>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <small>Direccion de entrega :</small><br>
                                        <span class="txt_detalles_gestion txt_direccion_entrega"></span>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <small>Comentarios :</small><br>
                                        <span class="txt_detalles_gestion txt_comentarios">
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--MODAL Agregar comentarios para finalizar o cancelar-->
            <div class="modal inmodal fade" id="modal_comentarios" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title titulo_modal_sm"></h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Antes de seguir agrega un comentarios de referencia a esta gestion.</p>
                            <div class="form-group">
                                <textarea id="" rows="3" class="form-control comentarios">
                                
                            </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn_elminar_gestion">Eliminar <i class='fa fa-trash'></i></button>
                            <button type="button" class="btn btn-primary btn_finalizar_gestion">Finalizar <i class='fa fa-check'></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- Sweet alert -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>


    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <script>
        $(document).ready(function(){
            var datos = "opc=get_gestiones";
            get_gestiones(datos);


            $('.fechas').datepicker({
                dateFormat: 'dd-mm-yy',
                date: new Date(1434544882775),
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_colonias",
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        var opt = "<option value='' selected>Selecciona una colonia</option>";
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


            $(".form_filtro_gestiones").on('submit',function(e){
                e.preventDefault();
                var fi = $(".fecha_inicial").val();
                var ff = $(".fecha_final").val();
                var col = $(".select_colonia").val();
                if(fi == "" && ff == "" && col == ""){
                    alert("debes llenar los campos");
                    return;
                }
                var datos = $(".form_filtro_gestiones").serialize();
                datos += "&opc=get_gestiones";
                $.ajax({
                    url:'php/funciones.php',
                    data: datos,
                    dataType:'json',
                    type:'post',
                    success:function(json){
                        var label_estatus = "";
                        console.log(json);
                        if(json.success){
                        var html = "";
                        for (var i = 0; i < json.data.length; i++) {
                            var aux = json.data[i].fCaptura.split("-");
                            var fa = aux[2]+"/"+aux[1]+"/"+aux[0];

                            var aux1 = json.data[i].fEntrega.split("-");
                            var fe = aux1[2]+"/"+aux1[1]+"/"+aux1[0];

                            var fre = "";
                            if(json.data[i].fRealEntrega !== null){
                                var aux2 = json.data[i].fRealEntrega.split("-");
                                fre = aux2[2]+"/"+aux2[1]+"/"+aux2[0];
                            }

                            switch(json.data[i].estatus) {
                                case '1':
                                label_estatus = "<span class='label label-success'>Pendiente</span>"
                                    break;
                                case '2':
                                    label_estatus = "<span class='label label-primary'>Entregado</span>"
                                    break;
                                case '3':
                                    label_estatus = "<span class='label label-danger'>Cancelado</span>"
                                    break;
                                default:
                                    label_estatus = "<span class='label label-default'>Desconocido</span>"
                            }

                            html += "<tr>"
                                  + "<td>"+json.data[i].subcat+"</td>"
                                  + "<td>"+json.data[i].solicitante+"</td>"
                                  + "<td>"+fa+"</td>"
                                  + "<td>"+json.data[i].direccion_entrega+" "+json.data[i].colonia+"</td>"
                                  + "<td>"+label_estatus+"</td>"
                                  + '<td>'
                                        +'<div class="btn-group">'
                                            +'<button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" aria-expanded="false">Accion <span class="caret"></span></button>'
                                            +'<ul class="dropdown-menu">'
                                                +'<li><a href="#" onclick=\'detalles_gestion('+JSON.stringify(json.data[i])+');\'>Ver Detalles <i class="fa fa-eye"></i></a></li>'
                                                +'<li>'
                                                +'<li><a href="#" onclick=\'editar_gestion('+JSON.stringify(json.data[i])+');\'>Editar <i class="fa fa-pencil"></i></a></li>'
                                                +'<li>'
                                                    +'<a href="#" onclick=\'finalizar_gestion('+JSON.stringify(json.data[i])+')\'>Finalizar <i class="fa fa-check"></i></a>'

                                                +'</li>'
                                                +'<li>'
                                                    +'<a href="#" onclick=\'eliminar_gestion('+JSON.stringify(json.data[i])+')\'>Eliminar <i class="fa fa-trash"></i></a>'
                                                +'</li>'
                                            +'</ul>'
                                        +'</div>'
                                    +'</td>'
                                  + "</tr>";
                        }
                        $('.table_gestiones').DataTable().clear().draw().destroy();
                        $(".tbody_gestiones").html(html);
                        $('.table_gestiones').DataTable();
                    }
                    },
                    error:function(error){
                        console.log(error);
                    }
                });
            });

            $('#modal_detalles').on('hidden.bs.modal', function () {
                $(".label-estatus").html("");
                $(".txt_solicitante").html("");
                $(".txt_beneficiario").html("");
                $(".txt_articulo").html("");
                $(".txt_fecha_alta").html("");
                $(".txt_fecha_entrega").html("");
                $(".txt_fecha_real_entrega").html("");
                $(".txt_direccion_entrega").html("");
                $(".txt_comentarios").html("");
            });

            $(".btn_elminar_gestion").click(function(){
                var id = $(this).attr('id');
                var comentarios = $("textarea.comentarios").val();
                cambiar_estatus(id,3,comentarios);
            });

            $(".btn_finalizar_gestion").click(function(){
                var id = $(this).attr('id');
                var comentarios = $("textarea.comentarios").val();
                cambiar_estatus(id,2,comentarios);
            });

        })
        function get_gestiones(datos){
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    var label_estatus = "";
                    if(json.success){
                        var html = "";
                        for (var i = 0; i < json.data.length; i++) {
                            var aux = json.data[i].fCaptura.split("-");
                            var fa = aux[2]+"/"+aux[1]+"/"+aux[0];

                            var aux1 = json.data[i].fEntrega.split("-");
                            var fe = aux1[2]+"/"+aux1[1]+"/"+aux1[0];

                            var fre = "";
                            if(json.data[i].fRealEntrega !== null){
                                var aux2 = json.data[i].fRealEntrega.split("-");
                                fre = aux2[2]+"/"+aux2[1]+"/"+aux2[0];
                            }


                            switch(json.data[i].estatus) {
                                case '1':
                                label_estatus = "<span class='label label-success'>Pendiente</span>"
                                    break;
                                case '2':
                                    label_estatus = "<span class='label label-primary'>Entregado</span>"
                                    break;
                                case '3':
                                    label_estatus = "<span class='label label-danger'>Cancelado</span>"
                                    break;
                                default:
                                    label_estatus = "<span class='label label-default'>Desconocido</span>"
                            }


                            html += "<tr>"
                                  + "<td>"+json.data[i].subcat+"</td>"
                                  + "<td>"+json.data[i].solicitante+"</td>"
                                  + "<td>"+fa+"</td>"
                                  + "<td>"+json.data[i].direccion_entrega+" "+json.data[i].colonia+"</td>"
                                  + "<td>"+label_estatus+"</td>"
                                  + '<td>'
                                        +'<div class="btn-group">'
                                            +'<button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" aria-expanded="false">Accion <span class="caret"></span></button>'
                                            +'<ul class="dropdown-menu">'
                                                +'<li><a href="#" onclick=\'detalles_gestion('+JSON.stringify(json.data[i])+');\'>Ver Detalles <i class="fa fa-eye"></i></a></li>'
                                                +'<li>'
                                                +'<li><a href="#" onclick=\'editar_gestion('+JSON.stringify(json.data[i])+');\'>Editar <i class="fa fa-pencil"></i></a></li>'
                                                +'<li>'
                                                    +'<a href="#" onclick=\'finalizar_gestion('+JSON.stringify(json.data[i])+')\'>Finalizar <i class="fa fa-check"></i></a>'

                                                +'</li>'
                                                +'<li>'
                                                    +'<a href="#" onclick=\'eliminar_gestion('+JSON.stringify(json.data[i])+')\'>Eliminar <i class="fa fa-trash"></i></a>'
                                                +'</li>'
                                            +'</ul>'
                                        +'</div>'
                                    +'</td>'
                                  + "</tr>";
                        }
                        $('.table_gestiones').DataTable().clear().draw().destroy();
                        $(".tbody_gestiones").html(html);
                        $('.table_gestiones').dataTable(
                            {"searching": false,
                            "order": [[ 2, "desc" ]],
                            "iDisplayLength": 14,
                            "bLengthChange": false
                            }
                        );

                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
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


        function detalles_gestion(json){
            console.log(json);
            var estatus = "";
            switch(json.estatus) {
                case '1':
                    estatus = "Pendiente";
                    $(".label-estatus").removeClass('label-danger').removeClass('label-success').removeClass('label-default').removeClass('label-primary');
                    $(".label-estatus").addClass('label-success');
                    break;
                case '2':
                    estatus = "Entregado";
                    $(".label-estatus").removeClass('label-danger').removeClass('label-success').removeClass('label-default').removeClass('label-default');
                    $(".label-estatus").addClass('label-primary');
                    break;
                case '3':
                    estatus = "Cancelado";
                    $(".label-estatus").removeClass('label-danger').removeClass('label-success').removeClass('label-default').removeClass('label-default');
                    $(".label-estatus").addClass('label-danger');
                    break;
                default:
                    estatus = "Desconocido";
                    $(".label-estatus").removeClass('label-danger').removeClass('label-success').removeClass('label-default').removeClass('label-default');
                    $(".label-estatus").addClass('label-default');
            }

            $(".label-estatus").html(estatus);
            $(".txt_solicitante").html(json.solicitante);
            $(".txt_beneficiario").html(json.beneficiario);
            $(".txt_articulo").html(json.subcat);
            $(".txt_fecha_alta").html(json.fCaptura);
            $(".txt_fecha_entrega").html(json.fEntrega);
            $(".txt_fecha_real_entrega").html(json.fRealEntrega);
            $(".txt_direccion_entrega").html(json.direccion_entrega+" "+json.colonia);
            $(".txt_comentarios").html(json.detalles);
            $("#modal_detalles").modal('show');
        }

        function editar_gestion(json){
            console.log(json);
        }

        function finalizar_gestion(json){
            swal({
                title: "Finalizar Gestion",
                text: "¿Marcar como termninada esta gestion?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#39cc81",
                confirmButtonText: "Si, Finalizar!",
                closeOnConfirm: false
            }, function () {
                swal.close();
                $(".btn_elminar_gestion").hide();
                $(".btn_finalizar_gestion").attr('id',json.id).show();
                $(".titulo_modal_sm").html("Finalizar Gestion");
                $("#modal_comentarios").modal('show');
            });
        }
        function eliminar_gestion(json){
            console.log(json);
            swal({
                title: "Cancelar Gestion",
                text: "¿Deseas que esta gestion sea eliminada?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si, eliminar!",
                closeOnConfirm: false
            }, function () {
                 swal.close();
                 $(".btn_finalizar_gestion").hide();
                 $(".btn_elminar_gestion").attr('id',json.id).show();
                 $(".titulo_modal_sm").html("Eliminar Gestion");
                $("#modal_comentarios").modal('show');
            });
        }

        function cambiar_estatus(id,estatus,comentarios){
            var datos = "opc=estatus&estatus="+estatus+"&id="+id+"&comentarios="+comentarios;
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        $("#modal_comentarios").modal('hide');
                        $("textarea.comentarios").val("");
                        var datos = "opc=get_gestiones";
                        get_gestiones(datos);
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Error!", "Error en el sistema", "error");
                }
            })
        }
    </script>

</body>

</html>
