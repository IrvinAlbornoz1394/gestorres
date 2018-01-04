<?php
session_start();

include_once('../../clases/seguridad.php');
include_once('../../clases/usuario.php');

$usuario= new usuario($_SESSION['idusuario'],'','','');
$usuario->obtener_usuario();
$seg= new seguridad();
$seg->candado();
?>
<h2>Hola</h2>
<label>Usted se ha identificado como: <?php echo $usuario->nomusuario;?></label>
<label>y tiene el rol de: <?php echo $usuario->rol->nomrol;?></label>

<table>
<td><a href="../persona/listado_persona.php"/>Personas</td>
<td><a href="../rol/listado_rol.php">Roles</a>
</td><a href="../usuario/listado_usuario.php">Usuarios</a>
</table>

<form action="cerrar_sesion.php" method="post">
	<input type="submit" name="cerrar sesion" value="cerrar sesion">
</form>