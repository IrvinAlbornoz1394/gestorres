<?php
include_once('../../clases/permiso.php');

if(isset($_GET['idpermiso']))
{
	$opermiso= new permiso($_GET['idpermiso'], $_GET['nompermiso'], $_GET['clavepermiso']);
	$opermiso->obtener_permiso();
	$operaciones='Modificar';
	$boton='<input type="submit" name="operaciones" value="Eliminar"/>';
}
else
{
	$opermiso= new permiso('','','');
	$operaciones='Agregar';
	$boton='';
}
?>
<form action="operaciones_permiso.php" method="post">
	<h2>Formulario Permiso</h2>
<input type="hidden" name="idpermiso" value=" <?php echo $opermiso->idpermiso;?>">

<label>Nombre</label>
<td><input type="text" name="nompermiso" value="<?php echo $opermiso->nompermiso; ?>"/>
</td>

<label>Clave </label>
<td><input type="text" name="clavepermiso" value="<?php echo $opermiso->clavepermiso; ?>">
</td>

<?php echo $boton; ?>
<input type="submit" name="operaciones" value="<?php echo $operaciones; ?>">
</form>