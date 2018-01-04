<?php
include_once('../../clases/rolxpermiso.php');
$rxp= new rolxpermiso(0,$_POST['idpermiso']);
$rxp->desasignar_rolxpermiso();
if(isset($_POST['idrol']))
{
	foreach ($_POST['idrol'] as $elemento)
	{
		$rxp->idrol=$elemento;
		$rxp->asignar_rolxpermiso();
	}
}
header('Location:../permiso/listado_permiso.php');
?>