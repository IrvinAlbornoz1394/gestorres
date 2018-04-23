
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
    </style>

</head>

<body>

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
                                                        <select class="chosen-select select_ocupacion"  tabindex="2" name="ocupacion" style="width: 100%;">
                                                            <option value="" disabled selected>Selecciona una opcion</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-6 col-md-offset-6">
                                                    <table class="table table-striped mb0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center" style="width: 25%;">PAN</th>
                                                                <th class="text-center" style="width: 25%;">PRI</th>
                                                                <th class="text-center" style="width: 25%;">PRD</th>
                                                                <th class="text-center" style="width: 25%;">Totales</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="hr-line-dashed mt0"></div>
                                                <div class="col-md-6">
                                                    <table class="table mt0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h3>Gobernador</h3>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="gobernador" class="input_pan" id="g_pan" value="pan"> 
                                                                    <label for="g_pan" class="label_radio label_pan">PAN</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="gobernador" class="input_pri" id="g_pri" value="pri">
                                                                    <label for="g_pri" class="label_radio label_pri">PRI</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="gobernador" class="input_prd" id="g_prd" value="prd">
                                                                    <label for="g_prd" class="label_radio label_prd">PRD</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h3>Presidente Mpal</h3>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="p_municipal" id="p_pan" class="input_pan"  value="pan"> 
                                                                    <label for="p_pan" class="label_radio label_pan">PAN</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="p_municipal" id="p_pri" class="input_pri" value="pri">
                                                                    <label for="p_pri" class="label_radio label_pri">PRI</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="p_municipal" id="p_prd" class="input_prd" value="prd">
                                                                    <label for="p_prd" class="label_radio label_prd">PRD</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h3>Diputado Local</h3>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="d_local" id="dl_pan" class="input_pan"  value="pan"> 
                                                                    <label for="dl_pan" class="label_radio label_pan">PAN</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="d_local" id="dl_pri" class="input_pri" value="pri">
                                                                    <label for="dl_pri" class="label_radio label_pri">PRI</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="d_local" id="dl_prd" class="input_prd" value="prd">
                                                                    <label for="dl_prd" class="label_radio label_prd">PRD</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h3>Diputado Federal</h3>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="d_federal" id="df_pan" class="input_pan"  value="pan"> 
                                                                    <label for="df_pan" class="label_radio label_pan">PAN</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="d_federal" id="df_pri" class="input_pri" value="pri">
                                                                    <label for="df_pri" class="label_radio label_pri">PRI</label></td>
                                                                <td>
                                                                    <input type="radio" name="d_federal" id="df_prd" class="input_prd" value="prd">
                                                                    <label for="df_prd" class="label_radio label_prd">PRD</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h3>Senador</h3>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="senador" id="s_pan" class="input_pan"  value="pan"> 
                                                                    <label for="s_pan" class="label_radio label_pan">PAN</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="senador" id="s_pri" class="input_pri" value="pri">
                                                                    <label for="s_pri" class="label_radio label_pri">PRI</label>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="senador" id="s_prd" class="input_prd" value="prd">
                                                                    <label for="s_prd" class="label_radio label_prd">PRD</label>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Gobernador</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="radio" name="gobernador" class="input_pan" id="g_pan" value="pan"> 
                                                            <label for="g_pan" class="label_radio label_pan">PAN</label>
                                                            
                                                            <input type="radio" name="gobernador" class="input_pri" id="g_pri" value="pri">
                                                            <label for="g_pri" class="label_radio label_pri">PRI</label>

                                                            <input type="radio" name="gobernador" class="input_prd" id="g_prd" value="prd">
                                                            <label for="g_prd" class="label_radio label_prd">PRD</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Presidente Mpal</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="radio" name="p_municipal" id="p_pan" class="input_pan"  value="pan"> 
                                                            <label for="p_pan" class="label_radio label_pan">PAN</label>
                                                            
                                                            <input type="radio" name="p_municipal" id="p_pri" class="input_pri" value="pri">
                                                            <label for="p_pri" class="label_radio label_pri">PRI</label>

                                                            <input type="radio" name="p_municipal" id="p_prd" class="input_prd" value="prd">
                                                            <label for="p_prd" class="label_radio label_prd">PRD</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Diputado Local</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="radio" name="d_local" id="dl_pan" class="input_pan"  value="pan"> 
                                                            <label for="dl_pan" class="label_radio label_pan">PAN</label>
                                                            
                                                            <input type="radio" name="d_local" id="dl_pri" class="input_pri" value="pri">
                                                            <label for="dl_pri" class="label_radio label_pri">PRI</label>

                                                            <input type="radio" name="d_local" id="dl_prd" class="input_prd" value="prd">
                                                            <label for="dl_prd" class="label_radio label_prd">PRD</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Diputado Federal</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="radio" name="d_federal" id="df_pan" class="input_pan"  value="pan"> 
                                                            <label for="df_pan" class="label_radio label_pan">PAN</label>
                                                            
                                                            <input type="radio" name="d_federal" id="df_pri" class="input_pri" value="pri">
                                                            <label for="df_pri" class="label_radio label_pri">PRI</label>

                                                            <input type="radio" name="d_federal" id="df_prd" class="input_prd" value="prd">
                                                            <label for="df_prd" class="label_radio label_prd">PRD</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Senador</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="radio" name="senador" id="s_pan" class="input_pan"  value="pan"> 
                                                            <label for="s_pan" class="label_radio label_pan">PAN</label>
                                                            
                                                            <input type="radio" name="senador" id="s_pri" class="input_pri" value="pri">
                                                            <label for="s_pri" class="label_radio label_pri">PRI</label>

                                                            <input type="radio" name="senador" id="s_prd" class="input_prd" value="prd">
                                                            <label for="s_prd" class="label_radio label_prd">PRD</label>
                                                        </div>
                                                    </div>  -->    
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-striped mt0">
                                                        <tbody>
                                                            <tr class="tr">
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="text" class="form-control"></td>
                                                            </tr>
                                                            <tr class="tr">
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="text" class="form-control"></td>
                                                            </tr>
                                                            <tr class="tr">
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="text" class="form-control"></td>
                                                            </tr>
                                                            <tr class="tr">
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="text" class="form-control"></td>
                                                            </tr>
                                                            <tr class="tr">
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="" name="" class="form-control"></td>
                                                                <td><input type="text" class="form-control"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="clearfix"></div>
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
    

</body>

</html>
