<?php
include_once('../../clases/rolxpermiso.php');
$rxp= new rolxpermiso('','');
$listar_rxp=$rxp->listar_rolxpermiso();
?>
<h1>Listado ROL POR PERMISO </h1>
<form action="formulario_rxp.php" method="post">
<input type="submit" name="operaciones" value="Agregar"/>
</form>
<table border="1">
<tr>
<td>Id rol</td>
<td>Id permiso </td>
<?php
foreach ($listar_rxp as $elemento)
{
	echo '<tr>';
	echo '<th>'.$elemento->idrol.'</th>';
	echo '<th><a href="formulario_rxp.php?idrol='.$elemento->idrol.'">'.$elemento->idpermiso.'</a></th>';
}
?>