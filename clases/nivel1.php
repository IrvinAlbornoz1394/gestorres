<?php
include_once('seguridad.php');
session_start();
$seg= new seguridad();
$seg->candado();
include_once('usuario.php');
$usuario= new usuario('','','','');
$usuario->obtener_usuario();
?>

<h2>usuario: <?php $usuario->nomusuario;?></h2>
<form action="validacion.php">
	<input type="text" name="algo">
</form>