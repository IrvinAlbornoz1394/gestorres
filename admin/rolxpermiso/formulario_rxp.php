<?php
include_once('../../clases/rolxpermiso.php');
$permiso= new permiso('','','');
$listaper=$permiso->listar_permiso();
$rxp= new rolxpermiso($_GET['idrol'],'');
$rol= new rol($_GET['idrol'],'');
$rol->obtener_rol();
?>

<h2>Asignar roles para permisos: <?php echo $rol->nomrol; ?></h2>
<form action="operaciones_rxp.php" method="post">
	<input type="hidden" name="idrol" value=" <?php echo $rxp->idrol;?>"/>
	<table>
		<?php
		foreach ($listaper as $elemento)
		{
			$rxp->idpermiso=$elemento->idpermiso;
			$check='';
			if($rxp->valida_rolxpermiso())
				$check=' checked ';
			echo '<tr>';
			echo '<td><input type="checkbox" '.$check.' name="idpermiso[]" value="'.$elemento->idpermiso.'"></td>';
			echo '<td>'.$elemento->nompermiso.'</td>';
			echo '</tr>';
		}
		?>
		</table>
<input type="submit" value="Asignar"/>
<input type="submit" name="operaciones" value="Cancelar"/>

</form>

