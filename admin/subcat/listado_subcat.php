<?php

include_once('../../clases/subcategoria.php');
include_once('../../clases/tipo_gestion.php');

$otipog= new tipo_gestion($_GET['idtipog'],'','');
$otipog->obtener_tipog();
$otipog->obtener_subcat();

?>
<h1>Listado Subcategoría</h1>
<form action="formulario_subcat.php" method="post">
	<input type="hidden" name="idtipog" value="<?php echo $otipog->idtipog;?>">
	<input type="submit" name="operaciones" value="Agregar">
</form>
<table>
	<td>#</td>
	<td>Nombre</td>
	<td>Descripcion</td>
	<td># Categoría</td>

	<?php

	foreach ($otipog->subcat as $elemento){
		echo '<tr>';
		echo '<td>'.$elemento->idsubcat.'</td>';
		echo '<td><a href="formulario_subcat.php?idsubcat='.$otipog->idtipog.'&idsubcat='.$elemento->idsubcat.'">'.$elemento->nombre.'</a></td>';
		echo '<td>'.$elemento->descripcion.'</td>';
		echo '</tr>';
	}

	?>
</table>