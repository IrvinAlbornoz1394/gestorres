<?php
include_once('../../clases/seguridad.php');
session_start();
$seg= new seguridad();
$seg->candado();
$seg->login($_POST['nomusuario'], $_POST['password'], 'bienvenida.php', 'loginmal.php');
?>