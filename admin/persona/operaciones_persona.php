<?php
include_once('../../clases/persona.php');
$operacion=$_POST['operaciones'];
$opers= new persona($_POST['idpersona'], $_POST['nombres'], $_POST['apellidopat'], $_POST['apellidomat'], $_POST['fecha_nac'], $_POST['edad'], $_POST['sexo'], $_POST['telefono'], $_POST['celular'], $_POST['direccion'], $_POST['curp'], $_POST['clave_elec'], $_POST['fecha_ingreso'], $_POST['ocupacion']);

switch ($operacion) {
	case 'Agregar':
	$opers->insertar_persona();
		# code...
		break;
	
	case 'Modificar':
	$opers->modificar_persona();
	break;

	case 'Eliminar':
	$opers->eliminar_persona();
	break;
}

//header('Location:listado_persona.php');
?>