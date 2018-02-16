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

    <title>BoonWayak</title>
        
    <link href="css/plugins/chartist/chartist.min.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">


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

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <style>
        .border_error{
            border: 1px solid red;
        }
        .border_focus{
            border: 1px solid #5471fb;
        }
        .color_error{
            color: red;
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
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
                    <li>
                        <a href="gestion.php"><i class="fa fa-laptop"></i> <span class="nav-label">Gestion</span></a>
                    </li>
                    <li>
                        <a href="gestiones.php"><i class="fa fa-th-list"></i> <span class="nav-label">Gestiones</span></a>
                    </li>
                    <li>
                        <a href="index.php">
                            <i class="fa fa-child"></i>
                            <span class="nav-label">Personas</span><span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="personas.php"><i class="fa fa-list"></i> Listas</a></li>
                            <li><a href="nva_persona.php"><i class="fa fa-plus"></i> Nuevo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="usuarios.php"><i class="fa fa-users"></i><span class="nav-label">Usuarios</span></a>
                    </li>
                    <li class="active">
                        <a href="index.php">
                            <i class="fa fa-wrench"></i>
                            <span class="nav-label">Configucacioón</span> <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="categorias.php">Categorias</a></li>
                            <li><a href="roles.php">Roles/permiso</a></li>
                            <li><a href="roles.php">Ocupaciones</a></li>
                            <li class="active"><a href="eventos.php">Eventos</a></li>
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
                    <h2>Eventos</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Captura de eventos</h5>
                            </div>
                            <div class="ibox-content">
                                <p>
                                    Escribe el nombre del evento
                                </p>
                                <form action="#" class="form_evento">
                                    <input type="hidden" name="id" id="id_evento">
                                    <div class="form-group">
                                        <label for="" class="">Nombre</label>
                                        <input type="text" class="form-control disabled-evento" name="nombre" id="nombre_evento" disabled required>
                                        <small class="small-evento"></small>
                                    </div>
                                    <button class="btn btn-sm btn-primary disabled-evento" disabled>Guardar <i class="fa fa-save"></i></button>
                                    <button type="button" class="btn btn-sm btn-white disabled-evento" onclick="form_reset_evento();" disabled>Cancelar</button>
                                    <button type="button" class="btn btn-sm btn-white pull-right nvo-evento">Nuevo <i class="fa fa-plus"></i></button>
                                    <hr>
                                    <table class="table table-hover table-eventos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody_eventos">
                                        </tbody>
                                    </table>
                                </form>
                            </div>
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


    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <script>
        var tableOcup = $('.table-eventos');

        $(document).ready(function(){
            get_eventos();
        });


        function get_eventos() {
            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_eventos",
                dataType:'json',
                type:'post',
                success:function(json){
                    console.log(json);
                    if(json.success){
                        var html_eventos = "";
                        for (var i = 0; i < json.data.length; i++) {
                            html_eventos += "<tr>"
                                      + "<td>"+json.data[i].id+"</td>"
                                      + "<td>"+json.data[i].nombre+"</td>"
                                      + "<td><a title='Editar' class='tr-active' onclick='editEvento("+JSON.stringify(json.data[i])+")'><i class='fa fa-pencil'></i></a>&nbsp&nbsp&nbsp"
                                      +"<a onclick='borrarEvento("+json.data[i].id+")' title='Borrar'><i class='fa fa-trash'></i></td>"
                                      + "</tr>";
                        }
                        tableOcup.DataTable().clear().draw().destroy();
                        $(".tbody_eventos").html(html_eventos);
                        tableOcup.dataTable(
                            {"searching": false,
                            "bLengthChange": false
                            }
                        );
                    }
                },
                error: function(){
                    console.log(error);
                }
            });
        }



        function editEvento(json){
            console.log(json);
            $(".disabled-evento").attr('disabled',false);
            $(".small-evento").html("editando").show();
            $("#id_evento").val(json.id);
            $("#nombre_evento").val(json.nombre).addClass('border_focus');
        }


        function borrarEvento(id){
            swal({
                title: "Borrar Categoria",
                text: "¿Estas seguro?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f93a4c",
                confirmButtonText: "Si, Eliminar!",
                closeOnConfirm: false
            }, function () {
                eliminarEvento(id);
            });
        }

        function eliminarEvento(id){
            var datos = "opc=borrarEvento&id="+id;
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        get_eventos();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", json.error, "error");
                }
            })
        }


        function form_reset_evento(){
            $(".disabled-evento").attr('disabled',true);
            $(".small-evento").hide();
            $("#id_evento").val("");
            $("#nombre_evento").val("").removeClass("border_focus");
        }


        $(".form_evento").on('submit',function(e){
            e.preventDefault();
            var datos = $(this).serialize();
            datos += "&opc=insert_evento";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        form_reset_evento();
                        get_eventos();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", error, "error");
                }
            });
        });


        $(".nvo-evento").click(function(){
            $(".disabled-evento").attr('disabled',false);
            $("#id_evento").val("");
            $("#nombre_evento").val("");
            $(".small-evento").hide();
        });


        

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



    </script>




</body>

</html>
