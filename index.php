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

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        
    <link href="css/plugins/chartist/chartist.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= $_SESSION["usuario"] ?></strong>
                        </a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
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
                <h2>DASHBOARD</h2>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Street View</h5>
                        </div>
                        <div class="ibox-content">
                            <p>
                                You can also initial turn on Street View in Google maps.
                            </p>
                            <div class="google-map" id="map" style="height: 500px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Bar Chart Example <small>With custom colors.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <div class="flot-chart">
                                 <div id="columnchart_material"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Horizontal bar chart </h5>
                        </div>
                        <div class="ibox-content">
                            <div id="ct-chart4" class="ct-perfect-fourth"></div>
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
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>
        
    <script src="js/plugins/chartist/chartist.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script>
        var map;
        var infoWindows = [];
        function initMap() {
          // Create the map.
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {lat: 20.9760828, lng: -89.6292097},
            mapTypeId: 'terrain'
          });
          var datos = "";
          set_markers(datos,map);
            /*var citymap = {
              chicago: {        
                center: {lat: 20.9639106, lng: -89.6029777},
                population: 100
              },
              newyork: {
                center: {lat: 20.973282, lng: -89.6370882},
                population: 45
              },
              losangeles: {
                center: {lat: 21.0038491, lng: -89.6260009},
                population: 38
              }
            };*/
        
            /*for (var city in citymap) {
                // Add the circle for this city to the map.
                var cityCircle = new google.maps.Circle({
                  strokeColor: '#FF0000',
                  strokeOpacity: 0.8,
                  strokeWeight: 2,
                  fillColor: '#FF0000',
                  fillOpacity: 0.35,
                  map: map,
                  center: citymap[city].center,
                  radius: Math.sqrt(citymap[city].population) * 100
                });
              }
            }*/
        }

        function set_markers(datos,map){
            datos+="opc=get_gestiones";
            $.ajax({
                url:'php/funciones.php',
                data: datos,
                dataType:'json',
                type:'post',
                success:function(json){
                    if(json.data.length > 0){
                        var infowindow = new google.maps.InfoWindow();
                        for (var i = 0; i < json.data.length; i++) {
                            var row = json.data[i]; 
                            console.log(row);
                            var est,colorPin = "";

                            if(row.estatus == 1){
                                est = "<span class='badge badge-warning'>Pendiente</span>";
                                colorPin = "f8ac59"; 
                            }
                            if(row.estatus == 2){
                                est = "<span class='badge badge-primary'>Entregada</span>";
                                colorPin = "1ab394";
                            }
                            if(row.estatus == 3){
                                est = "<span class='badge badge-danger'>Cancelada</span>";
                                colorPin = "ed5565";
                            }

                            //Se crea el icono del markador
                            var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld="+row.solicitante[0]+"|" + colorPin);
                            marker = new google.maps.Marker({
                              position: new google.maps.LatLng(parseFloat(row.lat),parseFloat(row.lng)),
                              map: map,
                              icon: pinImage,
                            });

                            //Centrar el mapa en la posicion del markador
                            //map.setCenter(marker.getPosition());
                            var f = row.fCaptura.split("-");
                            var fc = f[2]+"/"+f[1]+"/"+f[0];
                            
                            
                            var info = "<div>"
                                        +"<h3><strong>"+row.solicitante+"</strong></h3>"
                                        +"<address><p><i class='fa fa-calendar-o'></i> "+fc+"</p>"
                                        +"<p><i class='fa fa-star'></i> <u>Medicamento</u></p>"
                                        +"<p><i class='fa fa-map-marker'></i> "+row.calle+" "+row.colonia+"</p>"
                                        +"<p><i class='fa fa-exclamation'></i> "+est+"</p>"
                                        +"</address></div>"

                            var infowindow = new google.maps.InfoWindow();
                            infoWindows.push(infowindow);
                            google.maps.event.addListener(marker,'click', (function(marker,info,infowindow){ 
                                return function() {
                                    closeAllInfoWindows();
                                    infowindow.setContent(info);
                                    infowindow.open(map,marker);
                                };
                            })(marker,info,infowindow));
                        }
                    }   
                },
                error:function(error){
                    console.log(error);
                }
            });

            function closeAllInfoWindows() {
              for (var i=0;i<infoWindows.length;i++) {
                 infoWindows[i].close();
              }
            }

            /*for (var i = 0; i < beaches.length; i++) {
                var beach = beaches[i];
                var marker = new google.maps.Marker({
                  position: {lat: beach[1], lng: beach[2]},
                  map: map,
                  icon: image,
                  shape: shape,
                  title: beach[0],
                  zIndex: beach[3]
                });
            }*/
      }   

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBzYyqUP5RqA_CKw3nceyYZ2PTgvlQcII&callback=initMap">
    </script>

    <!-- Flot demo data -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        new Chartist.Bar('#ct-chart4', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            series: [
                [5, 4, 3, 7, 5, 10, 3],
                [3, 2, 9, 5, 4, 6, 4]
            ]
        }, {
            seriesBarDistance: 10,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


</body>

</html>
