<?php
include_once('../../clases/gestion.php');
$operacion=$_POST['operaciones'];
$ogestion= new gestion($_POST['idgestion'], $_POST['fecha_captura'], $_POST['fecha_entrega'], $_POST['detalle'], $_POST['estatus'], $_POST['idtipog']);

switch ($operacion) {
	case 'Agregar': $ogestion->insertar_gestion();
		# code...
		break;

	case 'Modificar': $ogestion->modificar_gestion();
	break;

	case 'Eliminar': $ogestion->eliminar_gestion();
	break;
}

//header('location: listado_gestion.php');
?>