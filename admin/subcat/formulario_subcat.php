<!DOCTYPE html>
<html>
<head>
	<title>Formulario Subcategoría</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>


<?php
include_once('../../clases/subcategoria.php');

if(isset($_GET['idsubcat']))
{
	$subcat= new subcategoria($_GET['idsubcat'],'','',$_GET['idtipog']);
	$subcat->obtener_subcat();
	$operaciones='Modificar';
	$boton='<input type="submit" name="operaciones" value="Eliminar">';
}
else
{
	$subcat= new subcategoria('','','',$_POST['idtipog']);
	$operaciones='Agregar';
	$boton='';
}
?>


<h2 class="title " align="middle">Formulario Subcategoría(s):</h2>
<form action="operaciones_subcat.php" method="post">	
<br>	
	<div class="form-row">
	<input type="hidden" name="idsubcat" value="<?php echo $subcat->idsubcat;?>">
	
	<div class="form-group col-md-2">
		<label>Nombre(s):</label>
		<input type="text" name="nombre" value="<?php echo $subcat->nombre;?>">
	</div>

	<div class="form-group col-md-2">
		<label>Descripción:</label>
		<input type="text" name="descripcion" value="<?php echo $subcat->descripcion;?>">
	</div>

	<div class="form-group col-md-2">
		<label># Categoría:</label>
		<input type="text" name="idtipog" value="<?php echo $subcat->idtipog;?>">
	</div>

	
<div class="form-group col-md-5">
	<?php echo $boton;?>
   		<input name="operaciones" class="btn btn-danger" type="submit" value="<?php echo $operaciones;?>">          
      	    <form action="listado_usuario.php" method="post">
            <input type="submit" class="btn btn-primary" value="Atras">
        </form>
    </div>
</form>

<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>