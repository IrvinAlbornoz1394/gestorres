<?php
include_once('../../clases/rol.php');
$operacion=$_POST['operaciones'];
$rol= new rol($_POST['idrol'], $_POST['nomrol']);

switch ($operacion) {
	case 'Agregar':
		# code...
		$rol->insertar_rol();
		break;

	case 'Modificar':
		$rol->modificar_rol();
		break;

	case 'Eliminar':
		$rol->eliminar_rol();
		break;
}

header('Location: listado_rol.php');
?>