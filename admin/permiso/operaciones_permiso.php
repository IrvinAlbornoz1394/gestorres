<?php
include_once('../../clases/permiso.php');
$operacion=$_POST['operaciones'];
$opermiso= new permiso($_POST['idpermiso'], $_POST['nompermiso'], $_POST['clavepermiso']);

switch ($operacion) {
	case 'Agregar':
		$opermiso->insertar_permiso();
		# code...
		break;
	case 'Modificar':
		$opermiso->modificar_permiso();
		break;

	case 'Eliminar':
		$opermiso->eliminar_permiso();
		break;
}
header('Location:listado_permiso.php');
?>