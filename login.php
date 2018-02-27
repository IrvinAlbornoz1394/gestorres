<?php 
    session_start();
    $error = "";
    if(isset($_POST['usuario']) && isset($_POST['password'])){
        $usuario = $_POST['usuario'];
        $password = md5($_POST['password']);
        //$mysqli = new mysqli("localhost", "boonwaya_oliver", "B00NWAYAK09*", "boonwaya_oliverDB");
        $mysqli = new mysqli("localhost", "root", "", "gestorres");
        /* check connection */
        if (!$mysqli->connect_errno) {
            $query = "SELECT * FROM usuarios Where nomusuario = '$usuario' && password = '$password' && estatus = 1";
            $result = $mysqli->query($query);
            if(mysqli_num_rows($result) >= 1){
                $row = mysqli_fetch_array($result);
                $_SESSION["usuario"] = $row['nomusuario'];
                $_SESSION['nombre_completo'] = $row['nombre_completo'];
                header('location: index.php');
            }else{
                $error = '<div class="alert alert-danger" role="alert">
                                <strong>Usuario o Contraseña Incorrectos.
                            </div>';
            }
        }        
    }
    if (isset($_SESSION["usuario"])) {
        header('location: index.php');
    }
 ?>
<!DOCTYPE html>
<html lang="ES">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <h1 class="logo-name text-center hidden-xs">Gestorres</h1>
    <div class="middle-box text-center loginscreen animated fadeInDown" style="padding-top: 0">
        <div>
            <div>
                <h1 class="logo-name text-center visible-xs">Gts</h1>
            </div>
            <h2>Bienvenido</h2>
            <p>Ingresa tu usuario y contrseña.</p>
            <form class="m-t" role="form" action="" method="POST">
                <?php echo $error; ?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Desarrollado por BoonWayak &copy; 2017</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
