<?php
include_once('../../clases/usuario.php');
$operacion=$_POST['operaciones'];
$usuario= new usuario($_POST['idusuario'], $_POST['nomusuario'], $_POST['password'], $_POST['idrol']);

switch ($operacion)
{
	
	case 'Agregar':
	$usuario->insertar_usuario();
	break;
	
	case 'Modificar':
	$usuario->modificar_usuario();
	break;
	
	case 'Eliminar':
	$usuario->eliminar_usuario();
	break;
}
header('Location:listado_usuario.php');
?>