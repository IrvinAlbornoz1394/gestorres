<?php
include_once('../../clases/subcategoria.php');
$operacion=$_POST['operaciones'];
$subcat= new subcategoria($_POST['idsubcat'], $_POST['nombre'], $_POST['descripcion'], $_POST['idtipog']);

switch ($operacion) {

	case 'Agregar':
		$subcat->insertar_subcat();
		break;
	
	case 'Modificar':
		$subcat->modificar_subcat();
		break;
	case 'Eliminar':
		$subcat->eliminar_subcat();
		break;
}
//header ('Location: listado_subcat.php');
?>