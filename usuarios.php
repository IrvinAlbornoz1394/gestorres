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
        @media only screen and (min-width : 900px) {
            #select_rol{
                width: 500px;
            }
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
                    <li class="active">
                        <a  href="usuarios.php"><i class="fa fa-users"></i><span class="nav-label">Usuarios</span></a>
                    </li>
                    <li >
                        <a href="index.php">
                            <i class="fa fa-wrench"></i>
                            <span class="nav-label">Configucacioón</span> <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="categorias.php">Categorias</a></li>
                            <li><a href="roles.php">Roles/permiso</a></li>
                            <li><a href="ocupaciones.php">Ocupaciones</a></li>
                            <li><a href="eventos.php">Eventos</a></li>
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
                    <h2>Gestion de Usuarios</h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Creacion de usuario</h5>
                            </div>
                            <div class="ibox-content">
                                <p>
                                    Información del usuario
                                </p>
                                <form action="#" class="form_usuario col-md-8">
                                    <input type="hidden" name="id" id="id_usuario">
                                    <div class="form-group">
                                        <label for="" class="">Nombre Completo</label>
                                        <input type="text" class="form-control disabled-usuario" name="nombre_completo" id="nombre_completo" disabled required>
                                        <small class="small-usuario"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="">Nombre de usuario</label>
                                        <input type="text" class="form-control disabled-usuario" name="nombre_usuario" id="nombre_usuario" disabled required>
                                        <small class="small-usuario"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="">Contraseña</label>
                                        <input type="password" class="form-control disabled-usuario" name="password" id="password" disabled required>
                                        <small class="small-usuario"></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-noraml">Rol asignado</label>
                                        <div class="input-group">
                                            <select name="rol" class="chosen-select form-control disabled-usuario" id="select_rol" data-placeholder="Seleccionar un rol" tabindex="4" disabled>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-primary disabled-usuario" disabled>Guardar <i class="fa fa-save"></i></button>
                                    <button type="button" class="btn btn-sm btn-white disabled-usuario" onclick="form_reset_usuario();" disabled>Cancelar</button>
                                    <button type="button" class="btn btn-sm btn-white pull-right nvo_usuario">Nuevo <i class="fa fa-plus"></i></button>
                                    <hr>
                                </form>
                                <table class="table table-hover table-usuarios">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre Completo</th>
                                            <th>Nombre de usuario</th>
                                            <th>Rol</th>
                                            <th>Estatus</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-usuarios">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal inmodal fade" id="modal_reset_password" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title n_u_p"></h4>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form_reset_password">
                                <input type="hidden" name="id" id="id_usuario_password">
                                <div class="form-group">
                                    <label for="" class="">nueva Contraseña</label>
                                    <input type="password" class="form-control" id="nvo_password" name="nvo_password" required>
                                    <small class="small-usuario"></small>
                                </div>
                                <div class="form-group">
                                    <label for="" class="">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                    <small class="small-usuario"></small>
                                    <p class="text-danger" id="error_password"></p>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary pull-right">Guardar <i class="fa fa-save"></i></button>
                                </div>
                            </form>
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
        var tableOcup = $('.table-usuarios');

        $(document).ready(function(){
            get_usuarios();
            get_roles();
        });

        $("#modal_reset_password").on('hidden.bs.modal', function () {
           form_password_reset(); 
        });

        function form_password_reset(){
            $("#nvo_password").val("");
            $("#confirm_password").val("");
        }

        function get_usuarios() {
            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_usuarios",
                dataType:'json',
                type:'post',
                success:function(json){
                    console.log(json);
                    if(json.success){
                        var html_usuarios = "";
                        for (var i = 0; i < json.data.length; i++) {
                            html_usuarios += "<tr>"
                                      + "<td width='10%'>"+json.data[i].id+"</td>"
                                      + "<td width='20%'>"+json.data[i].nombre_completo+"</td>"
                                      + "<td width='20%'>"+json.data[i].nombre_usuario+"</td>"
                                      + "<td>"+json.data[i].rol+"</td>";
                                      if(json.data[i].estatus == 1){
                                        html_usuarios += "<td width='15%'><label class='label label-success'>Activo<label></td>"
                                      }else{
                                        html_usuarios += "<td width='15%'><label class='label label-danger'>Desactivado<label></td>"
                                      }
                                      html_usuarios += "<td width='13%'>"
                                        +"<a title='Cambiar Contraseña' class='btn btn-sm btn-info' onclick='reset_password("+JSON.stringify(json.data[i])+");'><i class='fa fa-key'></i></a>&nbsp"
                                        +"<a title='Editar' class='btn btn-sm btn-success' onclick='editUsuario("+JSON.stringify(json.data[i])+")'><i class='fa fa-pencil'></i></a>&nbsp";
                                        if(json.data[i].estatus == 1){
                                            html_usuarios +="<a class='btn btn-sm btn-danger' onclick='desactivarU("+json.data[i].id+")' title='Desactivar'><i class='fa fa-times-circle'></i></td>";
                                        }else{
                                            html_usuarios +="<a class='btn btn-sm btn-primary' onclick='activarU("+json.data[i].id+")' title='Activar'><i class='fa fa-check-circle'></i></td>";
                                        }
                                      html_usuarios+= "</tr>";
                        }
                        tableOcup.DataTable().clear().draw().destroy();
                        $(".tbody-usuarios").html(html_usuarios);
                        tableOcup.dataTable(
                            {
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

        function reset_password(json){
            $("#id_usuario_password").val(json.id);
            $(".n_u_p").html(json.nombre_completo);
            $("#modal_reset_password").modal('show');
            //$("#id_usuario").val(json.id);
        }



        function editUsuario(json){
            $('body,html').animate({scrollTop : 0}, 500);
            console.log(json);
            $("#select_rol").val([]).trigger("chosen:updated");
            $(".disabled-usuario").attr('disabled',false).trigger("chosen:updated");
            $(".small-usuario").html("editando").show();
            $("#id_usuario").val(json.id);
            $('#select_rol option[value='+json.idRol+']').prop("selected",true);
            $("#select_rol").trigger("chosen:updated");
            $("#nombre_completo").val(json.nombre_completo);
            $("#nombre_usuario").val(json.nombre_usuario);
            $("#password").val("password").attr('disabled',true);


        }

        function desactivarU(id){
            console.log(id);
            swal({
                title: "Desactivar este usuario",
                text: "¿Estas seguro?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f93a4c",
                confirmButtonText: "Si, Desactivar!",
                closeOnConfirm: false
            }, function () {
                ActDesUsuario(id,0);
            });
        }
        function activarU(id){
            console.log(id);
            swal({
                title: "Activar este usuario",
                text: "¿Estas seguro?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#83a053",
                confirmButtonText: "Si, Activar!",
                closeOnConfirm: false
            }, function () {
                ActDesUsuario(id,1);
            });
        }

        function ActDesUsuario(id,estatus){
            var datos = "opc=estatusUsuario&id="+id+"&estatus="+estatus;
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        get_usuarios();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", error, "error");
                }
            })
        }

        function get_roles(){
            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_roles",
                dataType:'json',
                type:'post',
                success: function(json){
                    if(json.success){
                        var roles = "";
                        for (var i = 0; i < json.data.length; i++) {
                            roles += "<option value="+json.data[i].idRol+">"+json.data[i].nombre+"</option>";
                        }
                        $("#select_rol").html(roles).trigger("chosen:updated").chosen('destroy').chosen();
                        var wdt = $("").width();
                        $("#select_rol").css('width',wdt);

                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
        }

        function form_reset_usuario(){
            $("#select_rol").val([]);
            $(".disabled-usuario").attr('disabled',true).trigger("chosen:updated");
            $(".small-usuario").hide();
            $("#id_usuario").val("");
            $("#nombre_completo").val("");
            $("#nombre_usuario").val("");
            $("#password").val("");

        }

        
        $(".form_reset_password").on('submit',function(e){
            $("#error_password").html("");
            $("#error_password").hide();
            var np 
            if($("#nvo_password").val() !== $("#confirm_password").val()){
                $("#error_password").html("Las contraseñas no coinciden");
                $("#error_password").show();
                return false;
            }
            e.preventDefault();
            var datos = $(this).serialize();
            datos += "&opc=cambiar_password";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        $("#modal_reset_password").modal('hide');
                        swal("Correcto", "Contraseña modificada correctamente", "success");
                        form_reset_();
                        get_usuarios();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", error, "error");
                }
            });
        });

        $(".form_usuario").on('submit',function(e){
            e.preventDefault();
            var datos = $(this).serialize();
            datos += "&opc=insert_usuario";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        form_reset_usuario();
                        get_usuarios();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", error, "error");
                }
            });
        });


        $(".nvo_usuario").click(function(){
            $(".disabled-usuario").attr('disabled',false).trigger("chosen:updated");
            $("#id_usuario").val("");
            $("#nombre_completo").val("");
            $(".small-usuario").hide();
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
