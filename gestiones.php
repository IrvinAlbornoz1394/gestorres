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
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=$_SESSION["nombre_completo"];?></strong>
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
                    <li>
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
                                            <a class="btn btn-primary pull-right" id="imprimir_gestiones">Imprimir<i class="fa fa-print"></i></a>
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
                                                    <th>Distrito</th>
                                                    <th>Seccion</th>
                                                    <th>Estatus</th>
                                                    <th>Indicador</th>
                                                    <th>Acción</th>
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
                                        <b><small>Solicitante :</small></b><br>
                                        <span class="txt_detalles_gestion txt_solicitante"></span></p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b><small>Beneficiaio :</small></b><br>
                                        <span class="txt_detalles_gestion txt_beneficiario"></span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b><small>Articulo :</small></b><br>
                                        <span class="txt_detalles_gestion txt_articulo"></span>
                                    </p>    
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b><small>Fecha de Alta :</small></b><br>
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
                                        <b><small>Fecha Real Entrega :</small></b><br>
                                        <span class="txt_detalles_gestion txt_fecha_real_entrega"></span>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b><small>Direccion de entrega :</small></b><br>
                                        <span class="txt_detalles_gestion txt_direccion_entrega"></span>
                                    </p>
                                </div>
                                <hr>
                                <div class="clearfix"></div>
                                <div class="col-md-6">
                                    <p>
                                        <b><small>Comentarios :</small></b><br>
                                        <span class="txt_detalles_gestion txt_comentarios">
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b><small>Detalles  Finaliza/Cancelar :</small></b><br>
                                        <span class="txt_detalles_gestion txt_detalles_fc">
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <b><small>Mapa</small></b><br>
                                    <div id="map" style="width: 100%;height: 200px;"></div>
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

            <div class="modal inmodal" id="modal_editar" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content animated bounceInRight">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Editar Gestion</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" class="form_gestion form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>
                                                Informacion del solicitante
                                            </h3>
                                            <input type="hidden" id="id_gestion" name="id_gestion">
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label class="font-noraml">Nombre completo</label>
                                                <input type="text" class="form-control nombre_solicitante" name="nombre_solicitante" readonly>
                                                <input type="hidden" name="id_solicitante" class="id_solicitante" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">Clave de elector</label>
                                                <input type="text" class="form-control clave_solicitante" name="clave_solicitante" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="font-noraml">La persona es beneficiario</label>
                                            <div class="switch" style="margin-left: 20%;">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" class="onoffswitch-checkbox es_beneficiario" id="es_beneficiario"  name="es_beneficiario">
                                                    <label class="onoffswitch-label" for="es_beneficiario">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row" id="beneficiario">
                                        <div class="col-md-12">
                                            <h3>
                                                Informacion del Beneficiario
                                            </h3>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">Nombre completo</label>
                                                <input type="text" class="form-control nombre_beneficiario" name="nombre_beneficiario" readonly>
                                                <input type="hidden" name="id_beneficiario" class="id_beneficiario" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">Clave de elector</label>
                                                <input type="text" class="form-control clave_beneficiario" name="clave_beneficiario" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="font-noraml">Buscar</label>
                                                <div class="">
                                                    <button class="btn btn-success open_modal_busqueda" type="button" style="bottom: 0px;">...</button>    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>
                                                Informacion de la gestión
                                            </h3>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" id="data_1">
                                                <label class="font-noraml">Fecha de Captura</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="99/99/9999"  class="form-control fecha_captura" name="fecha_captura" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" id="data_1">
                                                <label class="font-noraml">Fecha de entrega</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="99/99/9999"  class="form-control fecha_entrega" name="fecha_entrega" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="form-group">
                                                <label class="font-noraml">calle</label>
                                                <input type="text" class="form-control calle form_domicilio" name="calle" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-6">
                                            <div class="form-group">
                                                <label class="font-noraml">Num Ext.</label>
                                                <input type="text" class="form-control num_ext form_domicilio" name="num_ext" required>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-xs-6">
                                            <div class="form-group">
                                                <label class="font-noraml">N. Int.</label>
                                                <input type="text" class="form-control num_int" name="num_int">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-6">
                                            <div class="form-group">
                                                <label class="font-noraml">Cruzam. 1</label>
                                                <input type="text" class="form-control cruzamiento_1 form_domicilio" name="cruzamiento_1" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-6">
                                            <div class="form-group">
                                                <label class="font-noraml">Cruzam. 2</label>
                                                <input type="text" class="form-control cruzamiento_2 form_domicilio" name="cruzamiento_2" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <label class="font-noraml">Colonia/Fracc.</label>
                                                <select class="chosen-select select_colonia select_colonia_gestion" id="id_colonia_gestion" tabindex="2" name="id_colonia_gestion" style="width: 100%">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="font-noraml">Estatus</label>
                                                <select data-placeholder="Cargando" class="chosen-select" name="estatus"  tabindex="2" style="width: 100%" id="estatus_gestion">
                                                    <option value="1">Pediente</option>
                                                    <option value="2">Entregada</option>
                                                    <option value="3">Cancelada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">Categoria</label>
                                                <select data-placeholder="Choose a Country..." name="categoria" class="chosen-select select_categoria" id="cat_gestion" required style="width: 100%">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">SubCategoria</label>
                                                <select data-placeholder="Choose a Country..." class="chosen-select select_subCategoria" id="subCat_gestion" name="subcategoria" required style="width: 100%">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">Evento</label>
                                                <select data-placeholder="Choose a Country..." name="evento" class="chosen-select select_evento" required style="width: 100%">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Distrito</label>
                                                <select class="chosen-select select_distrito" style="width:100%;" tabindex="2" name="distrito"  required>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Seccion</label>
                                                <select class="chosen-select select_seccion" style="width:100%;" tabindex="2" name="seccion"  required>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-noraml">Comentarios</label>
                                                <textarea name="comentarios" id="comentarios_gestion"  rows="7" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-info btn-block" onclick="set_ubicacion();">Obtener ubicacion segun dirección</a>
                                            <div id="map_edit" style="width: 100%;height: 200px;"></div>
                                            <input type="hidden" name="lat" class="lat_map">
                                            <input type="hidden" name="lng" class="lng_map">
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary submit_gestion">Guardar Cambios</button>
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

    <!--funciones personales -->
    <script src="js/funciones.js"></script>    
    <script src="js/maps.js"></script>

    <script>
        var gestiones;
        var map;
        var marker;
        var item_gestion;
        $(document).ready(function(){
            var datos = "opc=get_gestiones";
            get_gestiones(datos);
            get_eventos();
            get_cat_subCat();
            get_colonias();
            get_ocupaciones();
            get_distritos_secciones();



            $('.fechas').datepicker({
                dateFormat: 'dd-mm-yy',
                date: new Date(1434544882775),
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#modal_editar').on('hidden.bs.modal', function () {
                console.log("cerrado");
                if ($('input.es_beneficiario').is(':checked')) {
                    console.log("era visible");
                    $(".es_beneficiario").click();
                }
            });

            $(".submit_gestion").click(function(){
                $(".form_gestion").submit();
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


            $("#imprimir_gestiones").click(function(){
                console.log(gestiones);
                var datos = JSON.stringify(gestiones);
                window.open('pdf.php?gestiones='+datos, '_blank');
                
            });


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
                        var label_estatus,color_td = "";
                        console.log(json);
                        if(json.success){
                        gestiones = json.data;
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
                                label_estatus = "Pendiente";
                                    break;
                                case '2':
                                    label_estatus = "Entregado";
                                    break;
                                case '3':
                                    label_estatus = "Cancelado";
                                    break;
                                default:
                                    label_estatus = "Desconocido";
                            }

                            html += "<tr>"
                                  + "<td>"+json.data[i].subcat+"</td>"
                                  + "<td>"+json.data[i].solicitante+"</td>"
                                  + "<td>"+fa+"</td>"
                                  + "<td> Calle "+json.data[i].calle+" No. "+json.data[i].num_int+num_int+" por "+json.data[i].cruzamiento_1+" y "+json.data[i].cruzamiento_2+" "+json.data[i].colonia+"</td>"
                                  + "<td>"+json.data[i].distrito+"</td>"
                                  + "<td>"+json.data[i].seccion+"</td>"
                                  + "<td><span class='label label-default'>"+label_estatus+"</span></td>"
                                  + "<td></td>"
                                  + '<td>'
                                        +'<div class="btn-group">'
                                            +'<button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" aria-expanded="false">Accion <span class="caret"></span></button>'
                                            +'<ul class="dropdown-menu">'
                                                +'<li><a href="#" onclick=\'detalles_gestion('+JSON.stringify(json.data[i])+');\'>Ver Detalles <i class="fa fa-eye"></i></a></li>'
                                                +'<li>'
                                                +'<li><a href="#" onclick=\'editar_gestion('+JSON.stringify(json.data[i])+');\'>Editar <i class="fa fa-pencil"></i></a>'
                                                +'</li>'
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
                deleteMarkers();
                $(".label-estatus").html("");
                $(".txt_solicitante").html("");
                $(".txt_beneficiario").html("");
                $(".txt_articulo").html("");
                $(".txt_fecha_alta").html("");
                $(".txt_fecha_entrega").html("");
                $(".txt_fecha_real_entrega").html("");
                $(".txt_direccion_entrega").html("");
                $(".txt_comentarios").html("");
                $(".txt_detalles_fc").html("");
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

        $(".es_beneficiario").click(function(){
            $("#beneficiario").slideToggle('slow');
        });
    
        function get_gestiones(datos){
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    var label_estatus = "";
                    var desact ="";
                    if(json.success){
                        var html = "";
                        gestiones = json.data;
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
                                label_estatus = "<span class='label label-warning'>Pendiente</span>";
                                color_td = "#f8ac59"
                                    break;
                                case '2':
                                    label_estatus = "<span class='label label-primary'>Entregado</span>";
                                    desact = "disabled";
                                    color_td = "#1ab394";
                                    break;
                                case '3':
                                    label_estatus = "<span class='label label-danger'>Cancelado</span>";
                                    desact = "disabled";
                                    color_td = "#ed5565";
                                    break;
                                default:
                                    label_estatus = "<span class='label label-default'>Desconocido</span>";
                            }

                            if(json.data[i].num_int !== ""){
                                num_int = " Interior "+json.data[i].num_int;
                            }

                            html += "<tr>"
                                  + "<td>"+json.data[i].subcat+"</td>"
                                  + "<td>"+json.data[i].solicitante+"</td>"
                                  + "<td>"+fa+"</td>"
                                  + "<td> Calle "+json.data[i].calle+" No. "+json.data[i].num_int+num_int+" por "+json.data[i].cruzamiento_1+" y "+json.data[i].cruzamiento_2+" "+json.data[i].colonia+"</td>"
                                  + "<td> Distrito "+json.data[i].distrito+"</td>"
                                  + "<td> Sección "+json.data[i].seccion+"</td>"
                                  + "<td>"+label_estatus+"</td>"
                                  + "<td style='background:"+color_td+"'></td>"
                                  + '<td>'
                                        +'<div class="btn-group">'
                                            +'<button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" aria-expanded="false">Accion <span class="caret"></span></button>'
                                            +'<ul class="dropdown-menu">'
                                                +'<li><a href="#" onclick=\'detalles_gestion('+JSON.stringify(json.data[i])+');\'>Ver Detalles <i class="fa fa-eye"></i></a></li>'
                                                +'<li>'
                                                +'<li><a href="#" onclick=\'editar_gestion('+JSON.stringify(json.data[i])+');\' '+desact+'>Editar <i class="fa fa-pencil"></i></a></li>'
                                                +'<li>'
                                                    +'<a href="#" onclick=\'finalizar_gestion('+JSON.stringify(json.data[i])+')\' '+desact+'>Finalizar <i class="fa fa-check"></i></a>'

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

        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }


        function detalles_gestion(json){
            initMap();
            item_gestion = json;
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
            $(".txt_direccion_entrega").html("Calle "+json.calle+" No. "+json.num_int+num_int+" por "+json.cruzamiento_1+" y "+json.cruzamiento_2+" "+json.colonia);
            $(".txt_comentarios").html(json.detalles);
            $(".txt_detalles_fc").html(json.comentarios);
            $("#modal_detalles").modal('show');
            if(marker){
                deleteMarkers();
            }
            set_marker_gestion(item_gestion,false);
        }

        function deleteMarkers(){
            console.log(marker);
            marker.setMap(null);
        }

        function editar_gestion(json){
            initMap_editar();
            set_marker_gestion(json,true);
            console.log(json);
            $(".chosen-container").css({'width':'100%'});
            $("#id_gestion").val(json.id);
            $(".nombre_solicitante").val(json.solicitante);
            $(".clave_solicitante").val(json.cve_elector_s);
            $(".id_solicitante").val(json.idSolicitante);
            $(".id_beneficiario").val(json.idBeneficiario);
            $(".nombre_beneficiario").val(json.beneficiario);
            $(".clave_beneficiario").val(json.cve_elector_b);

            if(json.idSolicitante == json.idBeneficiario){
                $(".es_beneficiario").click();
            }



            var fc = json.fCaptura.split("-");
            $(".fecha_captura").val(fc[2]+"/"+fc[1]+"/"+fc[0]);
            var fe = json.fEntrega.split("-");
            $(".fecha_entrega").val(fe[2]+"/"+fe[1]+"/"+fe[0]);
            $(".calle").val(json.calle);
            $(".num_ext").val(json.num_ext);
            $(".num_int").val(json.num_int);
            $(".cruzamiento_1").val(json.cruzamiento_1);
            $(".cruzamiento_2").val(json.cruzamiento_2);
            $('#id_colonia_gestion option[value='+json.id_col_entrega+']').attr("selected",true);
            $("#id_colonia_gestion").trigger("chosen:updated");

            $('#estatus_gestion option[value='+json.estatus+']').attr("selected",true);
            $("#estatus_gestion").trigger("chosen:updated");

            $('#cat_gestion option[value='+json.idCat+']').attr("selected",true);
            $("#cat_gestion").trigger("chosen:updated");

            set_subCat(json.idCat);
            $('#subCat_gestion option[value='+json.idSubCat+']').attr("selected",true);
            $("#subCat_gestion").trigger("chosen:updated");

            $('.select_evento option[value='+json.idEvento+']').attr("selected",true);
            $(".select_evento").trigger("chosen:updated");

            console.log(json.id_distrito);
            $('.select_distrito option[value='+json.id_distrito+']').attr("selected",true);
            $(".select_distrito").trigger("chosen:updated");

            set_seccion(json.id_distrito);
            console.log(json.id_seccion);
            $('.select_seccion option[value='+json.id_seccion+']').attr("selected",true);
            $(".select_seccion").trigger("chosen:updated");

            $("#comentarios_gestion").val(json.detalles);
            set_ubicacion();
            $("#modal_editar").modal('show');
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

        //$.when(deleteMarkers()).then(set_marker(item_gestion));

        function set_marker_gestion(json,drag){
            var lat = parseFloat(json.lat);
            var lng = parseFloat(json.lng);
            var location = {lat: lat, lng: lng};
            marker = new google.maps.Marker({
                title:"Arrastrame al punto deseado",
                position: location,
                map: map,
                draggable: drag,
            });
            if(drag){
                get_position(marker);
                google.maps.event.addListener(marker, 'dragend', function() {
                    get_position(marker);
                });    
            }
            map.setZoom(16);
            map.setCenter(location);
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
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn5leYbE_WFaLGF7yCiYXSBVNUZz02qZ4&callback=initMap">
    </script>

</body>

</html>
