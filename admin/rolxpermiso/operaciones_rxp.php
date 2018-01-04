<?php
include_once('../../clases/rolxpermiso.php');
$rxp= new rolxpermiso($_POST['idrol'],0);
$rxp->desasignar_permisoxrol();
if(isset($_POST['idpermiso']))
{
	foreach ($_POST['idpermiso'] as $elemento)
	{
		$rxp->idpermiso=$elemento;
		$rxp->asignar_rolxpermiso();
	}
}
header('Location:../rol/listado_rol.php');
?>