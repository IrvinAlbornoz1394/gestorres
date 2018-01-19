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
        .buscar{
            width: 85% !important;
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
                    <li >
                        <a href="gestiones.php"><i class="fa fa-th-list"></i> <span class="nav-label">Gestiones</span></a>
                    </li>
                    <li class="active">
                        <a href="index.php">
                            <i class="fa fa-child"></i>
                            <span class="nav-label">Personas</span><span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li class="active"><a href="personas.php"><i class="fa fa-list"></i> Listas</a></li>
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
                    <h2>Ciudadanos dados de alta</h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12" style="padding:0">
                        <div class="ibox float-e-margins div_busqueda_personas">
                            <div class="ibox-title">
                                <h5>Listas de pesonas y militantes</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tabs-container">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#tab-1">Militantes</a></li>
                                                <li class=""><a data-toggle="tab" href="#tab-2">Personas</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="tab-1" class="tab-pane active">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                                <table class="table table-hover table_militantes tables_data">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Nombre Completo</th>
                                                                            <th>Direccion</th>
                                                                            <th>Cve Elector</th>
                                                                            <th>telefono</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="tbody_militantes">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab-2" class="tab-pane">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12 table-responsive">
                                                                <table class="table table-hover table_personas tables_data">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Nombre Completo</th>
                                                                            <th>Direccion</th>
                                                                            <th>Cve Elector</th>
                                                                            <th>telefono</th>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
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


    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <script>
        $(document).ready(function(){
            buscar_personas();
        });

        var lng = $("div#tab-1").find('div.col-sm-6');
        console.log(lng);
        lng.html("<h1>HOLA</h1>")
        function buscar_personas(){
            var datos = "opc=buscar_personas";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    console.log(json);
                    if(json.success){
                        var html_personas = "";
                        var html_militantes = "";
                        for (var i = 0; i < json.data.length; i++) {
                            if(json.data[i].militante == 1){
                                var num_int = "";
                                if(json.data[i].num_int !== ""){
                                    num_int = " Int. "+json.data[i].num_int;
                                }
                                html_militantes += "<tr>"
                                                +  "<td>"+json.data[i].nombres+" "+json.data[i].apellidopat+" "+json.data[i].apellidomat+"</td>"
                                                +  "<td> Calle "+json.data[i].calle+" No. "+json.data[i].num_ext+num_int+" X "+json.data[i].cruzamiento_1+" y "+json.data[i].cruzamiento_2+" "+json.data[i].colonia+"</td>"
                                                +  "<td>"+json.data[i].cve_elector+"</td>"
                                                +  "<td>"+json.data[i].celular+"</td>"
                                                +  "<td></td>"
                                                +  "</tr>"
                            }else{
                                html_personas += "<tr>"
                                                +  "<td>"+json.data[i].nombres+" "+json.data[i].apellidopat+" "+json.data[i].apellidomat+"</td>"
                                                +  "<td> Calle "+json.data[i].calle+" No. "+json.data[i].num_ext+num_int+" X "+json.data[i].cruzamiento_1+" y "+json.data[i].cruzamiento_2+" "+json.data[i].colonia+"</td>"
                                                +  "<td>"+json.data[i].cve_elector+"</td>"
                                                +  "<td>"+json.data[i].celular+"</td>"
                                                +  "<td></td>"
                                                +  "</tr>"
                            }
                        }
                        $(".tbody_militantes").html(html_militantes);
                        $(".tbody_personas").html(html_personas);
                        $(".tables_data").dataTable({
                                "bLengthChange": false,
                                "language": {
                                    "lengthMenu": "Display _MENU_ records per page",
                                    "zeroRecords": "Nothing found - sorry",
                                    "info": "Pagina  _PAGE_ de _PAGES_",
                                    "infoEmpty": "No records available",
                                    "search": "Buscar:  ",
                                    "paginate": {
                                        "first":      "Primero",
                                        "last":       "Ultimo",
                                        "next":       "Siguiente",
                                        "previous":   "Anterior"
                                    },
                                }
                            });
                        $('.dataTables_filter label').css({'width':'100%'}); 
                        $('.dataTables_filter input').addClass('buscar'); 
                    }
                },
                error:function(error){
                    console.log(error);
                    $(".btn_buscar").attr('disabled',false);
                    $(".gif_loading").hide();
                }
            });
        }
    </script>


</body>

</html>
