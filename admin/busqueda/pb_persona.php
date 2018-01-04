<?php
include_once('../../clases/busqueda_persona.php');
if(isset($_POST['criterio']))
{
	$buscador= new busqueda_persona($_POST['criterio'], $_POST['tipo']);
	$buscador->obtener_datos();
}
else
{
	$buscador= new busqueda_persona('','');
}
?>
<form action="pb_persona.php" method="post">
	<input type="text" name="criterio" value="<?php echo $buscador->criterio?>"/>
	<td><select name="tipo">
		<option <?php if($buscador->tipo==1) echo ' selected '; ?> value="1" >Nombre</option>
		<option <?php if($buscador->tipo==2) echo ' selected '; ?> value="2" >Clave Elector</option>
	</select>
	<td><input type="submit" name=" buscador"></td>

	<table>
		<td>Nombre Persona</td>
		<td>Clave elector</td>

		<?php
		foreach ($buscador->resultado as $elemento) {
			echo '<tr>';
			echo '<td>'.$elemento->nombres.'</td>';
			echo '<td>'.$elemento->clave_elec.'</td>';
			echo '</tr>';
		}
		?>
	</table>
</form>