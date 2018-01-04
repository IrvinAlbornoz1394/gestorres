<?php
include_once('../../clases/tipo_gestion.php');

$operacion= $_POST['operaciones'];
$tipog= new tipo_gestion($_POST['idtipog'],$_POST['nombre'],$_POST['clave']);

switch ($operacion) {
	case 'Agregar':
		# code...
	$tipog->insertar_tipog();
		break;
	
	case 'Modificar':
	$tipog->modificar_tipog();
		# code...
		break;

	case 'Eliminar':
	$tipog->eliminar_tipog();
	break;
}

header ('Location: listado_tipog.php');
?>