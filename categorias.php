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
                        <a href="militantes.php"><i class="fa fa-child"></i><span class="nav-label">Militantes</span></a>
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
                            <li class="active"><a href="categorias.php">Categorias</a></li>
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
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Categorias</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Crear Categorias</h5>
                            </div>
                            <div class="ibox-content">
                                <p>
                                    Escribe el nombre de la nueva categoria
                                </p>
                                <form action="#" class="form_cat">
                                    <input type="hidden" name="id" id="id_cat">
                                    <div class="form-group">
                                        <label for="" class="">Nombre</label>
                                        <input type="text" class="form-control disabled-cat" name="nombre" id="nombre_cat" disabled required>
                                        <small class="small-cat"></small>
                                    </div>
                                    <button class="btn btn-sm btn-primary disabled-cat" disabled>Guardar <i class="fa fa-save"></i></button>
                                    <button type="button" class="btn btn-sm btn-white disabled-cat" onclick="form_reset_cat();" disabled>Cancelar</button>
                                    <button type="button" class="btn btn-sm btn-white pull-right nvo-cat">Nuevo <i class="fa fa-plus"></i></button>
                                    <hr>
                                    <table class="table table-hover table-cat">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody_cat">
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Crear SubCategorias</h5>
                            </div>
                            <div class="ibox-content">
                                <button type="button" class="btn btn-sm btn-white pull-right nvo-subCat">Nuevo <i class="fa fa-plus"></i></button><br>
                                <form action="#" class="form_subCat">
                                    <input type="hidden" name="id" id="id_subCat">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" class="form-control disabled-subCat" name="nombre" id="nombre_subCat" required disabled>
                                        <small class="small-subCat" style="display: none;">Editando</small>
                                    </div>
                                    <div class="form-group form_select">
                                        <label for="">Categoria</label>
                                        <select data-placeholder="Choose a Country..." name="categoria" class="chosen-select select_categoria" style="width: 100%;" required disabled>
                                        </select>
                                    </div>
                                    <button class="btn btn-sm btn-primary disabled-subCat" disabled>Guardar <i class="fa fa-save"></i></button>
                                    <button class="btn btn-sm btn-white disabled-subCat" onclick="form_reset_subCat();" disabled>Cancelar</button>
                                    <hr>
                                    <table class="table table-hover table-subCat">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Categoria</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody_subCat">
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
        var tableCat = $('.table-cat');
        var tableSubCat = $('.table-subCat');

        $(document).ready(function(){
            get_cat();
        });


        function get_cat() {
            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_cat_subCat",
                dataType:'json',
                type:'post',
                success:function(json){
                    console.log(json);
                    if(json.success){
                        subcategorias = json.subcategorias;
                        set_subCat(subcategorias);
                        var cat = "<option val='' disabled selected>Selecciona una categoria</option>";
                        var html_cat = "";
                        for (var i = 0; i < json.categorias.length; i++) {
                            cat += "<option value="+json.categorias[i].id+">"+json.categorias[i].nombre+"</option>";
                            html_cat += "<tr>"
                                      + "<td>"+json.categorias[i].id+"</td>"
                                      + "<td>"+json.categorias[i].nombre+"</td>"
                                      + "<td><a title='Editar' class='tr-active' onclick='editCat("+JSON.stringify(json.categorias[i])+")'><i class='fa fa-pencil'></i></a></td>"
                                      +"<td><a onclick='borrar_cat("+json.categorias[i].id+")' title='Borrar'><i class='fa fa-trash'></i></td>"
                                      + "</tr>";
                        }
                        $(".select_categoria").html(cat).trigger("chosen:updated");

                        tableCat.DataTable().clear().draw().destroy();
                        $(".tbody_cat").html(html_cat);
                        tableCat.dataTable(
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


        function set_subCat(json){
            var html = "";
            for (var i = 0; i < json.length; i++) {
                html += "<tr>"
                      + "<td>"+json[i].id+"</td>"
                      + "<td>"+json[i].nombre+"</td>"
                      + "<td>"+json[i].cat+"</td>"
                      + "<td><a title='Editar' onclick='editSubCat("+JSON.stringify(json[i])+")'><i class='fa fa-pencil'></i></a></td>"
                      + "<td><a onclick='borrar_subCat("+json[i].id+")' title='Borrar'><i class='fa fa-trash'></i></td>"
                      + "</tr>";
            }
            tableSubCat.DataTable().clear().draw().destroy();
            $(".tbody_subCat").html(html);
            tableSubCat.dataTable(
                {"searching": false,
                "bLengthChange": false
                }
            );
        }

        function editCat(json){
            console.log(json);
            $(".disabled-cat").attr('disabled',false);
            $(".small-cat").html("editando").show();
            $("#id_cat").val(json.id);
            $("#nombre_cat").val(json.nombre).addClass('border_focus');
        }


        function editSubCat(json){
            console.log(json);
            $(".select_categoria").find('option:first-child').prop('selected', true).end().trigger('chosen:updated');
            $('.select_categoria option[value='+json.idCat+']').attr("selected",true);
            $(".chosen-container-single").removeClass('border_error')
            $(".form_select").removeClass('color_error');
            $(".disabled-subCat").attr('disabled',false);
            $(".select_categoria").prop('disabled',false).trigger("chosen:updated");
            $(".small-subCat").show();
            $("#id_subCat").val(json.id);
            $("#nombre_subCat").val(json.nombre);

            $(".disabled-subCat").attr('disabled',false);
            $(".small-subCat").html("editando").show();
            $("#id_subCat").val(json.id);
            $("#nombre_subCat").val(json.nombre).addClass('border_focus');
        }

        function borrar_cat(id){
            swal({
                title: "Borrar Categoria",
                text: "¿Estas seguro?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f93a4c",
                confirmButtonText: "Si, Eliminar!",
                closeOnConfirm: false
            }, function () {
                estatus_cat(id,0);
            });
        }

        function borrar_subCat(id){
            swal({
                title: "Borrar SubCategoria",
                text: "¿Estas seguro?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f93a4c",
                confirmButtonText: "Si, Eliminar!",
                closeOnConfirm: false
            }, function () {
                estatus_subCat(id,0);
            });
        }

        function estatus_cat(id,estatus){
            var datos = "opc=estatus_cat&id="+id+"&estatus="+estatus;
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        get_cat();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", json.error, "error");
                }
            })
        }

        function estatus_subCat(id,estatus){
            var datos = "opc=estatus_subCat&id="+id+"&estatus="+estatus;
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        get_cat();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", json.error, "error");
                }
            })
        }

        function form_reset_cat(){
            $(".disabled-cat").attr('disabled',true);
            $(".small-cat").hide();
            $("#id_cat").val("");
            $("#nombre_cat").val("").removeClass("border_focus");
        }

        function form_reset_subCat(){
            $(".select_categoria").find('option:first-child').prop('selected', true).end().trigger('chosen:updated');
            $(".chosen-container-single").removeClass('border_error')
            $(".form_select").removeClass('color_error');
            $(".disabled-subCat").attr('disabled',true);
            $(".select_categoria").prop('disabled',true).trigger("chosen:updated");
            $(".small-subCat").hide();
            $("#id_subCat").val("");
            $("#nombre_subCat").val("").removeClass('border_focus');
        }

        $(".form_cat").on('submit',function(e){
            e.preventDefault();
            var datos = $(this).serialize();
            datos += "&opc=insert_cat";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        form_reset_cat();
                        get_cat();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", error, "error");
                }
            });
        });

        $(".form_subCat").on('submit',function(e){
            var cat = $(".select_categoria").val();
            if(cat == null){
                $(".chosen-container-single").addClass('border_error')
                $(".form_select").addClass('color_error');
                return false;
            }
            e.preventDefault();
            var datos = $(this).serialize();
            datos += "&opc=insert_subCat";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.success){
                        swal("Correcto", json.message, "success");
                        form_reset_subCat();
                        get_cat();
                    }else{
                        swal("Ups!", json.message, "error");
                    }
                },
                error:function(error){
                    swal("Ups!", error, "error");
                }
            })
        })


        $(".select_categoria").change(function(){
            if($(this).val() !== null ){
                $(".chosen-container-single").removeClass('border_error')
                $(".form_select").removeClass('color_error');
            }        
        })

        $(".nvo-cat").click(function(){
            $(".disabled-cat").attr('disabled',false);
            $("#id_cat").val("");
            $("#nombre_cat").val("");
            $(".small-cat").hide();
        });

        $(".nvo-subCat").click(function(){
            $(".disabled-subCat").attr('disabled',false);
            $(".select_categoria").prop('disabled',false).trigger("chosen:updated");
            $("#id_subCat").val("");
            $("#nombre_subCat").val("");
            $(".small-subCat").hide();
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
