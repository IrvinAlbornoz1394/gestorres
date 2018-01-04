<?php
include_once('../../clases/rolxpermiso.php');

$rol= new rol('','');
$listarol=$rol->listar_rol();

$pxr= new rolxpermiso('',$_GET['idpermiso']);
$permiso= new permiso($_GET['idpermiso'],'','');
$permiso->obtener_permiso();
?>
<h2>Asignación de permisos para roles: <?php echo $permiso->nompermiso;?></h2>
<form action="operaciones_pxr.php" method="post">
	<input type="hidden" name="idpermiso" value="<?php echo $pxr->idpermiso; ?>">
	<table>
		<?php
		foreach ($listarol as $elemento)
		{
			$pxr->idrol=$elemento->idrol;
			$check='';
			if($pxr->valida_rolxpermiso())
			$check=' checked ';

			echo '<tr>';
			echo '<td><input type="checkbox" '.$check.'name="idrol[]" value="'.$elemento->idrol.'"></td>';
			echo '<td>'.$elemento->nomrol.'</td>';
			echo '</tr>';
		}
		?>
	</table>
	<input type="submit" value="Asignar"/>
<input type="submit" name="operaciones" value="Cancelar"/>

</form>