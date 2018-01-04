<?php
include_once('../../clases/tipo_gestion.php');
$otipog= new tipo_gestion('','','');
$lista=$otipog->listar_tipog();
?>
<h1>Listado catálogo de gestiones</h1>
<form action="formulario_tipog.php" method="post">
	<input type="submit" name="" value="Agregar">
</form>

<table>
	<td>#</td>
	<td>Nombre</td>
	<td>Clave</td>
<!--<td><a href="../gestion/listado_gestion.php">Gestiones</a>-->
	
<?php
foreach ($lista as $elemento) {
	echo '<tr>';
	echo '<td>'.$elemento->idtipog.'</td>';
	echo '<td><a href="formulario_tipog?idtipog='.$elemento->idtipog.'">'.$elemento->nombre.'</a></td>';
	echo '<td>'.$elemento->clave.'</td>';
	echo '<td><a href="../subcat/listado_subcat.php?idtipog='.$elemento->idtipog.'">Subcategorías</a></td>';
	echo '</tr>';
}
?>
</table>