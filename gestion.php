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

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

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
                <li class="active">
                    <a href="gestion.php"><i class="fa fa-laptop"></i> <span class="nav-label">Nva Gestion</span></a>
                </li>
                <li>
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
                    <h2>Captura de Gestion</h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins div_busqueda_personas">
                            <div class="ibox-title">
                                <h5>Busqueda de personas</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <form action="" class="form_persona form">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" placeholder="" class="form-control nombre_sol" name="nombres">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Ap. Paterno</label>
                                                <input type="text" placeholder="" class="form-control ap_sol" name="ap_paterno">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Clave Elector</label>
                                                <input type="text" placeholder="" class="form-control cve_sol" name="cve_elector">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <br>
                                                <button class="btn btn-primary btn_buscar">Buscar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="alert alert-warning alert_sin_info" style="display: none;">
                                            <b>Debes ingresar datos de busqueda <i class="fa fa-exclamation-triangle"></i></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox float-e-margins lista_personas">
                            <div class="ibox-title">
                                <h5>Lista de personas</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="pull-left btn btn-success denuevo_persona"><i class="fa fa-arrow-circle-o-left"></i> Buscar de Nuevo</button>
                                        <button class="pull-right btn btn-primary btn_nva_persona">Nuevo <i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="col-md-12 table-responsive">
                                        <div class="alert alert-warning alert_table_empty" style="display: none;margin-bottom: 0;margin-top: 15px;">
                                            <b>No se encontraron resultados <i class="fa fa-exclamation-triangle"></i></b>
                                        </div>
                                        <table class="table table-striped table-hover table-personas table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nombre Completo</th>
                                                    <th>Direccion</th>
                                                    <th>Colonia</th>
                                                    <th>Cve Elector</th>
                                                    <th width="10%">Militante</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody_personas">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox float-e-margins div_gestion">
                            <div class="ibox-title">
                                <div class="row">
                                <div class="col-md-12">
                                    <h3 class="hidden-xs" style="float: left;">Formulario</h3>    
                                    <button class="pull-right btn btn-default denuevo_tabla"><i class="fa fa-arrow-circle-o-left"></i> Seleccionar de Nuevo</button>    
                                </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <form action="" class="form_gestion form">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <h3>
                                                Informacion del solicitante
                                            </h3>
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
                                            <div class="form-group">
                                                <label class="font-noraml">Fecha de Captura</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="99/99/9999"  class="form-control fecha_entrega" name="fecha_captura">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">Fecha de entrega</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="99/99/9999"  class="form-control fecha_entrega" name="fecha_entrega">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="font-noraml">calle</label>
                                                <input type="text" class="form-control calle form_domicilio" name="calle" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="font-noraml">Num Ext.</label>
                                                <input type="text" class="form-control num_ext form_domicilio" name="num_ext" required>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label class="font-noraml">Num Int.</label>
                                                <input type="text" class="form-control num_int" name="num_int">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="font-noraml">Cruzam. 1</label>
                                                <input type="text" class="form-control cruzamiento_1" name="cruzamiento_1" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="font-noraml">Cruzam. 2</label>
                                                <input type="text" class="form-control cruzamiento_2" name="cruzamiento_2" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="font-noraml">Colonia/Fracc.</label>
                                                <select class="chosen-select select_colonia select_colonia_gestion" id="id_colonia_gestion" style="width:200px;" tabindex="2" name="id_colonia_gestion">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="font-noraml">Estatus</label>
                                                <div class="input-group">
                                                <select data-placeholder="Cargando" class="chosen-select" name="estatus" style="width:200px;" tabindex="2">
                                                    <option value="1">Pediente</option>
                                                    <option value="2">Entregada</option>
                                                    <option value="3">Cancelada</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">Categoria</label>
                                                <div class="input-group">
                                                <select data-placeholder="Choose a Country..." name="categoria" class="chosen-select select_categoria" style="width: 300px;" required>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="font-noraml">SubCategoria</label>
                                                <div class="input-group">
                                                <select data-placeholder="Choose a Country..." class="chosen-select select_subCategoria" name="subcategoria" style="width: 300px;" required>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="font-noraml">Evento</label>
                                                <div class="input-group">
                                                <select data-placeholder="Choose a Country..." name="evento" class="chosen-select select_evento" style="width: 350px;" required>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-noraml">Comentarios</label>
                                                <textarea name="comentarios" id=""  rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="map" style="width: 100%;height: 200px;"></div>
                                            <input type="hidden" name="lat" class="lat_map">
                                            <input type="hidden" name="lng" class="lng_map">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary dim" type="submit">
                                                Guardar <i class="fa fa-save"></i></button>
                                            <button type="button" class="btn btn-outline btn-default">
                                                Cancelar 
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <img src="img/loading.gif" class="img-fluid center-block gif_loading" alt="" style="height: 150px;display: none;">
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


    <div class="modal inmodal fade" id="modal_busqueda" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Buscar Persona</h4>
                    <small class="font-bold">Beneficiario.</small>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="alert alert-warning alert_beneficiario" style="display: none;">
                            <b>Debes ingresar datos de busqueda <i class="fa fa-exclamation-triangle"></i></b>
                        </div>
                        <form action="" class="form_beneficiario form">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" placeholder="" class="form-control nombres_ben" name="nombres">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Ap. Paterno</label>
                                    <input type="text" placeholder="" class="form-control ap_ben" name="ap_paterno">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Clave Elector</label>
                                    <input type="text" placeholder="" class="form-control cve_ben" name="cve_elector">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <br>
                                    <button class="btn btn-primary btn_buscar">Buscar</button>
                                    <button class="pull-right btn btn-success btn_nvo_beneficiario" style="display: none;">Nuevo <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <img src="img/loading.gif" class="img-fluid center-block gif_loading_ben" alt="" style="height: 100px;display: none;">
                    <div class="row">
                        <div class="col-md-12 table-responsive lista_benefciarios" style="display: none;">
                            <table class="table table-striped table-hover table-beneficiarios table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre Completo</th>
                                        <th>Direccion</th>
                                        <th>Colonia</th>
                                        <th>Cve Elector</th>
                                        <th width="10%">Militante</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="tbody_beneficiario">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal inmodal fade" id="modal_nva_persona" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Alta de nueva persona</h4>
                    <small class="font-bold">Llena la informacion correctamente.</small>
                </div>
                <div class="modal-body">
                    <form class="form_nueva_persona form">
                        <div class="row">
                        <div class="col-md-3">
                            <input type="hidden" name="origen" class="origen">
                            <div class="form-group">
                                <label>Nombres</label>
                                <input type="text" placeholder="" class="form-control" name="nombres">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Primer Apellido</label>
                                <input type="text" placeholder="" class="form-control" name="apellidopat">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Segundo Apellido</label>
                                <input type="text" placeholder="" class="form-control" name="apellidomat">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Cve Elector</label>
                                <input type="text" class="form-control" name="cve_elector">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-xs-9">
                                <div class="form-group">
                                    <label >Fecha de Nacimiento</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="99/99/9999"  class="form-control fecha_nacimiento" name="fecha_nacimiento">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-3">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select name="sexo" id="" class="form-control">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" placeholder="" class="form-control" name="telefono">
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input type="text" placeholder="" class="form-control" name="celular">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="font-noraml">calle</label>
                                    <input type="text" class="form-control calle_persona" name="calle" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="font-noraml">Num Ext.</label>
                                    <input type="text" class="form-control num_ext_persona" name="num_ext" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="font-noraml">N. Int.</label>
                                    <input type="text" class="form-control num_int_persona" name="num_int">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="font-noraml">Cruzam. 1</label>
                                    <input type="text" class="form-control cruzamiento_1_persona" name="cruzamiento_1">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="font-noraml">Cruzam. 2</label>
                                    <input type="text" class="form-control cruzamiento_2_persona" name="cruzamiento_2" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group group_col">
                                    <label class="font-noraml">Colonia</label>
                                    <div class="input-group">
                                        <select class="chosen-select select_colonia select_colonia_persona" style="width:100%;" tabindex="2" name="colonia">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-9">
                                <div class="form-group">
                                    <label>Ocupacion</label>
                                    <select class="chosen-select select_ocupacion" id="id_ocupacion" tabindex="2" name="ocupacion" style="width: 100%;">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="font-noraml center-block text-center">Militante</label>
                                <div class="switch" style="margin-left: 20%;">
                                    <div class="onoffswitch">
                                        <input type="checkbox" class="onoffswitch-checkbox" id="es_militante" class="es_militante" name="es_militante">
                                        <label class="onoffswitch-label" for="es_militante">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary btn_form_nueva_persona">Guardar</button>
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

        var map;
        var categorias;
        var subcategorias;  
        var marker;

        $(document).ready(function(){
            $(".lista_personas").hide();
            $(".div_gestion").hide();
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            get_eventos();
            get_cat_subCat();
            get_colonias();
            get_ocupaciones();
            


            $(".form_beneficiario").on('submit',function(e){
                $(".alert_beneficiario").hide();
                $(".table-beneficiarios").DataTable().clear().draw().destroy();
                    e.preventDefault();
                    var nombre = $(".nombres_ben").val();
                    var apellido = $(".ap_ben").val();
                    var cve = $(".cve_ben").val();
                    if(nombre == "" && apellido == "" && cve == ""){
                        $(".alert_beneficiario").show();
                    }else{
                        $(".btn_buscar").attr('disabled',true);
                        var datos = $(".form_beneficiario").serialize();
                        datos += "&opc=buscar_personas";
                        $(".gif_loading_ben").show();
                        buscar_personas(datos,'beneficiarios');
                    }
            });


            $(".form_persona").on('submit',function(e){
                $(".alert_sin_info").hide();
                $(".alert_table_empty").hide();
                var nombre = $(".nombre_sol").val();
                var apellido = $(".ap_sol").val();
                var cve = $(".cve_sol").val();
                $(".table-personas").DataTable().clear().draw().destroy();
                if(nombre == "" && apellido == "" && cve == ""){
                    $(".alert_sin_info").show();
                }else{
                    $(".btn_buscar").attr('disabled',true);
                    var datos = $(".form_persona").serialize();
                    datos += "&opc=buscar_personas";
                    $(".gif_loading").show();
                    buscar_personas(datos,'personas'); 
                }

                
                e.preventDefault();
            });

            $(".form_gestion").on('submit',function(e){
                e.preventDefault();
                var datos = $(this).serialize();
                swal({
                    title: "La informacion es correcta?",
                    text: "Verifivar información",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Si, es correcta!",
                    closeOnConfirm: false
                }, function () {
                    nva_gestion(datos);
                });
            })

            $(".btn_form_nueva_persona").click(function(){
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
            })

            $(".open_modal_busqueda").click(function(){
                $(".alert_beneficiario").hide();
                $(".lista_benefciarios").hide();
                $(".table-beneficiarios").DataTable().clear().draw().destroy();
                $("#modal_busqueda").modal('show');
                $(".btn_nvo_beneficiario").hide();
            })


            $(".denuevo_persona").click(function(){
                $(".div_busqueda_personas").slideToggle('slow');
                $(".lista_personas").slideToggle('slow');
            });

            $(".denuevo_tabla").click(function(){
                $(".lista_personas").slideToggle('slow');
                $(".div_gestion").slideToggle('slow');
                deleteMarkers();
            });

            $(".es_beneficiario").click(function(){
                $("#beneficiario").slideToggle('slow');
            });

            $(".btn_nva_persona").click(function(){
                $(".origen").val("personas");
                $(".seleccionado").iCheck('update');
                $("#modal_nva_persona").modal('show');

            });
            $(".btn_nvo_beneficiario").click(function(){
                $(".origen").val("beneficiarios");
                $("#modal_busqueda").modal('hide');
                $(".seleccionado").iCheck('update')
                $("#modal_nva_persona").modal('show');
            });

            $('#modal_nva_persona').on('shown.bs.modal', function () {
              $('.select_colonia_persona', this).chosen('destroy').chosen();
              $('.select_ocupacion', this).chosen('destroy').chosen();
            });

            $(".form_domicilio").keyup(function(){
                deleteMarkers();
                set_marker();
            })

            $(".select_categoria").change(function(){
                var id = $(".select_categoria").val();
                var subcat = "<option val='' disabled selected>Selecciona una SubCategoria</option>";
                $(".select_subCategoria").html('');
                for (var i = 0; i < subcategorias.length; i++) {
                    if(subcategorias[i].idCat == id){
                        subcat += "<option value="+subcategorias[i].id+">"+subcategorias[i].nombre+"</option>";    
                    }
                }
                $(".select_subCategoria").html(subcat).trigger("chosen:updated");
            });

            $("#id_colonia_gestion").change(function(){
                set_marker();                
            });

        });

        function set_gestion(json){
            var dt = new Date();
            var month = dt.getMonth()+1;
            var month = "0"+month;
            month = month.substr(-2);

            var day = dt.getDate();
            day = "0"+day;
            day = day.substr(-2);
            var year = dt.getFullYear();

            var today = month+"/"+day+"/"+year;

            $(".fecha_captura").datepicker('setDate', today);
            $(".id_solicitante").val(json.id);
            $(".id_beneficiario").val(json.id);
            $(".nombre_solicitante").val(json.nombres+" "+json.apellidopat+" "+json.apellidomat);
            $(".clave_solicitante").val(json.cve_elector);
            $(".calle").val(json.calle);
            $(".num_int").val(json.num_int);
            $(".num_ext").val(json.num_ext);
            $(".cruzamiento_1").val(json.cruzamiento_1);
            $(".cruzamiento_2").val(json.cruzamiento_2);
            $('#id_colonia_gestion option[value='+json.id_colonia+']').attr("selected",true);
            $("#id_colonia_gestion").trigger("chosen:updated");
            $(".lista_personas").slideToggle('slow');
            $(".div_gestion").slideToggle('slow');
            google.maps.event.trigger(map, 'resize');
            set_marker();
        };

        function nva_gestion(datos){
            console.log(datos);
            datos += "&opc=nva_gestion";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", "Informacion guardada", "success");
                        $('.form')[0].reset();
                        deleteMarkers();

                    }else{
                        swal ( "Oops" ,  success.message ,  "error" );
                    }
                    $('.form_gestion')[0].reset();
                    $('.form')[0].reset();

                    if($(".div_gestion").is(":visible")){
                        $(".div_gestion").slideToggle("slow");
                    }

                    if($(".div_busqueda_personas").is(":hidden")){
                        $(".div_busqueda_personas").slideToggle("slow");
                    }
                    $(".table-personas").DataTable().clear().draw().destroy();
                    $(".table-beneficiarios").DataTable().clear().draw().destroy();
                    if($("#beneficiario").is(":visible")){
                        $("#beneficiario").slideToggle("slow");
                    }
                },
                error:function(error){
                    swal ( "Oops" ,  "Ocurrio un error en la consulta" ,  "error" );
                    console.log(error);
                }
            });   
        }


        function nva_persona(){
            var datos = $(".form_nueva_persona").serialize();
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
                        $("#modal_nva_persona").modal('hide');
                        if(json.info.origen == 'personas'){
                            set_gestion(json.info);
                        }
                        if(json.info.origen == 'beneficiarios'){
                            set_beneficiario(json.info);    
                        }
                        $(".form_nueva_persona")[0].reset();
                    }else{
                        swal ( "Oops" ,  success.message ,  "error" );
                    }
                    console.log(json);
                    $(".form_nueva_persona")[0].reset();
                },
                error:function(error){
                    swal ( "Oops" ,  "Ocurrio un error en la consulta" ,  "error" );
                    console.log(error);
                }
            });
        }

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

        function get_eventos(){
            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_eventos",
                dataType:'json',
                type:'post',
                success: function(json){
                    if(json.success){
                        var ocup = "<option val='' disabled selected>Selecciona una opcion</option>";
                        for (var i = 0; i < json.data.length; i++) {
                            ocup += "<option value="+json.data[i].id+">"+json.data[i].nombre+"</option>";
                        }
                        $(".select_evento").html(ocup).trigger("chosen:updated");
                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
        }

        function deleteMarkers(){
            marker.setMap(null);
        }

        function get_cat_subCat(){
            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_cat_subCat",
                dataType:'json',
                type:'post',
                success:function(json){
                    console.log(json);
                    if(json.success){
                        subcategorias = json.subcategorias;
                        var cat = "<option val='' disabled selected>Selecciona una categoria</option>";
                        for (var i = 0; i < json.categorias.length; i++) {
                            cat += "<option value="+json.categorias[i].id+">"+json.categorias[i].nombre+"</option>";
                        }
                        $(".select_categoria").html(cat).trigger("chosen:updated");
                    }
                },
                error:function(error){
                    console.log(error);
                }
            })
        }

        function set_beneficiario(json){
            $(".id_beneficiario").val(json.id);
            $(".nombre_beneficiario").val(json.nombres+" "+json.apellidopat+" "+json.apellidomat);
            $(".clave_beneficiario").val(json.cve_elector);
            $(".calle").val(json.calle);
            $(".num_int").val(json.num_int);
            $(".num_ext").val(json.num_ext);
            $(".cruzamiento_1").val(json.cruzamiento_1);
            $(".cruzamiento_2").val(json.cruzamiento_2);
            //$(".colonia_frac").val(json.colonia);
            $("#modal_busqueda").modal('hide');
            $('#id_colonia_gestion option[value='+json.id_colonia+']').attr("selected",true);
            $("#id_colonia_gestion").trigger("chosen:updated");
        }

        function buscar_personas(datos,tabla){
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        if(json.data.length <= 0){
                            console.log(json.data.length);
                            $(".alert_table_empty").show();
                        }
                        $('.form_persona')[0].reset();
                        $('.form_beneficiario')[0].reset();
                        var html = "";
                        for (var i = 0; i < json.data.length; i++) {
                            var num_int = "";
                            if(json.data[i].num_int !== ""){
                                num_int = " Interior "+json.data[i].num_int;
                            }
                            html += "<tr>"
                                  + "<td>"+json.data[i].nombres+" "+json.data[i].apellidopat+" "+json.data[i].apellidomat+"</td>"
                                  + "<td> Calle "+json.data[i].calle+" No. "+json.data[i].num_ext+num_int+" por "+json.data[i].cruzamiento_1+" y "+json.data[i].cruzamiento_2+"</td>"
                                  + "<td>"+json.data[i].colonia+"</td>"
                                  + "<td>"+json.data[i].cve_elector+"</td>"
                                  +"<td>";
                                    if(json.data[i].militante == 1){
                                        html+="<i class='fa fa-check-square'></i></td>";
                                    }
                                  html+= "<td>"
                                    +"<button class='btn center-block btn-xs  btn-bitbucket btn-success'";
                                    if(tabla == 'personas'){
                                        html +=" onclick='set_gestion("+JSON .stringify(json.data[i])+");'>"
                                        +"<i class='fa fa-file-text-o'></i>"
                                    }else{
                                        html +=" onclick='set_beneficiario("+JSON .stringify(json.data[i])+");'>"
                                        +"<i class='fa fa-check'></i>";    
                                    }
                                    html+="</button>"
                                  +"</td>"
                                  + "</tr>";
                        }
                        if(tabla == 'personas'){
                            $(".table-personas").DataTable().clear().draw().destroy();
                            $(".tbody_personas").html(html);
                            $(".table-personas").dataTable({
                                "searching": false,
                                "bLengthChange": false
                            });
                            $(".gif_loading").hide();

                            if($(".div_busqueda_personas").is(":visible")){
                                $(".div_busqueda_personas").slideToggle("slow");
                            }

                            if($(".lista_personas").is(":hidden")){
                                $(".lista_personas").slideToggle("slow");
                            }
                            //$(".lista_personas").slideToggle('slow');
                        }
                        if(tabla == 'beneficiarios'){
                            $(".btn_nvo_beneficiario").show();
                            $(".table-beneficiarios").DataTable().clear().draw().destroy();
                            $(".tbody_beneficiario").html(html);
                            $(".table-beneficiarios").dataTable({
                                "searching": false,
                                "bLengthChange": false
                            });
                            if($(".lista_benefciarios").is(":visible")){
                                
                            }else{
                                $(".lista_benefciarios").slideToggle("slow");
                            }
                            $(".gif_loading_ben").hide();
                        }
                        
                    }
                    $(".btn_buscar").attr('disabled',false);
                },
                error:function(error){
                    console.log(error);
                    $(".btn_buscar").attr('disabled',false);
                    $(".gif_loading").hide();
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
    </script>
    <script>
      function initMap() {
        var uluru = {lat: 21.0127021, lng: -89.692326};
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });
      }

    function set_marker(){
        var col = $('#id_colonia_gestion option:selected').text();
        var calle = $('.calle').val();
        var num = $('.num_ext').val();
        var url = 'https://maps.googleapis.com/maps/api/geocode/json?address=calle'+calle+','+num+'+'+col+',yucatan&key=AIzaSyBn5leYbE_WFaLGF7yCiYXSBVNUZz02qZ4';
        console.log(url);
        $.ajax({
            url: url,
            dataType:'json',
            success:function(json){
                console.log(json);
                var location = json.results[0].geometry.location;
                marker = new google.maps.Marker({
                    draggable: true,
                    title:"Arrastrame al punto deseado",
                    position: location,
                    map: map
                });
                get_position(marker);
                google.maps.event.addListener(marker, 'dragend', function() {
                    get_position(marker);
                });
                map.setZoom(16);
                map.setCenter(location);
            },
            error:function(error){
                console.log(error);
            }
        });
    }

    function get_position(marker){
        var markerLatLng = marker.getPosition();
        $(".lat_map").val(markerLatLng.lat());
        $(".lng_map").val(markerLatLng.lng());
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn5leYbE_WFaLGF7yCiYXSBVNUZz02qZ4&callback=initMap">
    </script>
    <!--<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBBzYyqUP5RqA_CKw3nceyYZ2PTgvlQcII&callback=initMap"></script>-->

</body>

</html>
