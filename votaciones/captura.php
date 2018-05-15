
<!DOCTYPE html>
<html lang="ES">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BOONWAYAK</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="../css/plugins/chosen/chosen.css" rel="stylesheet">

    <link href="../css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../css/plugins/cropper/cropper.min.css" rel="stylesheet">

    <link href="../css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="../css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

    <link href="../css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

    <link href="../css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="../css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <link href="../css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="../css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

    <link href="../css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    
    <!-- Data Tables -->
    <link href="../css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="../css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    
    

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="../css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style>
        .chosen-container .chosen-results {
            max-height:90px;
        }

       input[type="radio"]{
            display: none;
        }

        input[type="radio"].input_pan:checked + label{
            padding: 5px 15px;
            background: #294986;
            border-radius: 2px;
            color: #fff;
        }

        input[type="radio"].input_pri:checked + label{
            padding: 5px 15px;
            background: #009232;
            border-radius: 2px;
            color: #fff;
        }        

        input[type="radio"].input_prd:checked + label{
            padding: 5px 15px;
            background: #ffcc00;
            border-radius: 2px;
            color: #fff;
        }        

       /*input[type="radio"]:checked + label{
            padding: 5px 15px;
            background: #0074D9;
            border-radius: 2px;
            color: #fff;
        }*/

       input[type="radio"]:checked + label:before {
            display: none;
        }
        
        label.label_pan{
            color: #294986;
        }

        label.label_pri{
            color: #009232;
        }

        label.label_prd{
            color: #ffcc00;
        }

        
    
       label.label_radio{
            background: rgba(0,0,0,.1);
            padding: 5px 15px 5px 40px;
            display: inline-block;
            position: relative;
            font-size: 1em;
            border-radius: 6px;
            cursor: pointer;
            -webkit-transition: all  0.3s ease;
            -o-transition: all  0.3s ease;
            transition: all  0.3s ease;
        }

        label.label_radio:hover{
            background: rgba(0,116,217,0.3);
        }

       /*label.label_radio:before{
            content: "";
            width: 17px;
            height: 17px;
            display: inline-block;
            background: none;
            border: 3px solid #0074D9;
            border-radius: 50%;
            position: absolute;
            left: 15px;
        }*/

        label.label_pan:before{
            content: "";
            width: 17px;
            height: 17px;
            display: inline-block;
            background: none;
            border: 3px solid #294986;
            border-radius: 50%;
            position: absolute;
            left: 15px;
        }

        label.label_pri:before{
            content: "";
            width: 17px;
            height: 17px;
            display: inline-block;
            background: none;
            border: 3px solid #009232;
            border-radius: 50%;
            position: absolute;
            left: 15px;
        }

        label.label_prd:before{
            content: "";
            width: 17px;
            height: 17px;
            display: inline-block;
            background: none;
            border: 3px solid #ffcc00;
            border-radius: 50%;
            position: absolute;
            left: 15px;
        }
        .mb0{
            margin-bottom: 0;
        }
        .mt0{
            margin-top: 0;
        }

        .input_partido{
            font-size: 20px;
            width: 100%;
            min-width: 80px;
        }
        th.text_center{
            font-size: 20px;
        }
    </style>

</head>

<body class="pace-done mini-navbar">

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="../img/profile_small.jpg" />
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
                        <a href="captura.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Captura</span></a>
                    </li>
                    <li>
                        <a href="usuarios.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Usuarios</span></a>
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
                        <div class="ibox float-e-margins ">
                            <div class="ibox-title">
                                <h5>Captura de resultados</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form_info_persona formulario">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Casilla</label>
                                                        <select class="chosen-select select_casilla"  tabindex="2" name="casilla" style="width: 100%;">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="hr-line-dashed mt0"></div>
                                                <div class="get_content table-responsive">
                                                    <!-- <table class="table table-striped inverse text-center">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Candidato</th>
                                                                <th class="text-center">PAN</th>
                                                                <th class="text-center">PRI</th>
                                                                <th class="text-center">PRD</th>
                                                                <th class="text-center">NVA. ALIANZA</th>
                                                                <th class="text-center">PARTIDO NUEVO</th>
                                                            </tr>    
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <h2><b>Gobernador</b></h2>
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="text" class=" input_partido">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="text" class=" input_partido">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="text" class=" input_partido">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="text" class=" input_partido">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="text" class=" input_partido">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        
                                                    </table> -->
                                                </div>
                                                <div class="hr-line-dashed"></div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary dim btn_form_nueva_persona" type="submit">Guardar <i class="fa fa-save"></i></button>
                                                </div>
                                            </div>
                                        </form>
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
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="../js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="../js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="../js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="../js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="../js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="../js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="../js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="../js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="../js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="../js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="../js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="../js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="../js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Input Mask-->
    <script src="../js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- Sweet alert -->
    <script src="../js/plugins/sweetalert/sweetalert.min.js"></script>


    <!-- Data Tables -->
    <script src="../js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="../js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!--funciones personales -->
    <script src="../js/funciones.js"></script> 
    
    <script>
        $.ajax({
            url:'php/funciones.php',
            data: "opc=get_casillas",
            dataType:'json',
            type:'post',
            success: function(json){
                if(json.success){
                    var casilla = "<option val='' disabled selected>Selecciona una casilla</option>";
                    for (var i = 0; i < json.casillas.length; i++) {
                        casilla += "<option value="+json.casillas[i].id+">"+json.casillas[i].nombre+"</option>";
                    }
                    $(".select_casilla").html(casilla).trigger("chosen:updated");
                }
            },
            error:function(){

            }
        });

        $(".select_casilla").change(function(){
            var casilla = $(this).val();
            get_content(casilla);
            // if($(this).val() !== null ){
            //     $(".chosen-container-single").removeClass('border_error')
            //     $(".form_select").removeClass('color_error');
            // }        
        });


        function get_content(casilla){
            $.ajax({
                url:'php/funciones.php',
                data: "opc=get_content&casilla="+casilla,
                dataType:'json',
                type:'post',
                success: function(json){
                    if(json.success){
                        console.log(json);

                        var html = '<table class="table table-striped inverse text-center">'+
                                    '<thead>'+
                                        '<tr>'+
                                            '<th>CANDIDATO</th>';

                                for (var i = 0; i < json.data[0].partidos.length; i++) {
                                    html += '<th class="text-center">'+json.data[0].partidos[i].nombre_partido+'</th>';
                                }

                                html += '</tr>'+
                                    '</thead>'+
                                    '<tbody>';

                                for (var i = 0; i < json.data.length; i++) {
                                    var lop = json.data[i];
                                    html+= "<tr>"+
                                            "<td><h3 class='text-left'>"+json.data[i]['candidato']+"</h3></td>";

                                    for (var x = 0; x < lop.partidos.length; x++) {
                                        html += '<td class="text-center"><input type="text" class=" input_partido" name="'+json.data[i]['candidato']+'_'+lop.partidos[x].nombre_partido+'"></td>';
                                    }

                                           html += "</tr>";
                                }

                                html += '</tbody>'+
                                    '</table>';
                        $(".get_content").html(html);
                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
        }
    </script>

</body>

</html>
