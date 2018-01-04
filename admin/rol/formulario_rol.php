<!DOCTYPE html>
<html>
<head>
	<title>Formulario Rol</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>

<?php
include_once("../../clases/Rol.php");


if(isset($_GET["idrol"]))
{
	$orol = new Rol($_GET["idrol"],"");
	$orol->obtener_rol();
	$operaciones = "Modificar";
	$boton='<input type="submit" name="operaciones" value="Eliminar"/>';
}

else
{
	$orol = new Rol('','');
	$operaciones = "Agregar";
	$boton = "";
}

?>

<form action="operaciones_rol.php" method="POST">
<h2>Formulario Rol</h2>
<input type="hidden" name="idrol" value="<?php echo $orol->idrol;?>">

<label>Rol</label>
<td><input type="text" name="nomrol" value="<?php echo $orol->nomrol;?>">
</td>	
<?php echo $boton; ?>
<input type="submit" name="operaciones" value="<?php echo $operaciones;?>">
</form>

<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>