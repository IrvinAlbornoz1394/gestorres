<?php
include_once('ConexionBaseDatos.php');
include_once('tipo_gestion.php');

class subcategoria
{
	var $idsubcat;
	var $nombre;
	var $descripcion;
	var $idtipog;

	function subcategoria($a, $b, $c, $idtg)
	{
		$this->idsubcat=$a;
		$this->nombre=$b;
		$this->descripcion=$c;
		$this->idtipog=$idtg;
	}

	function insertar_subcat()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='INSERT into subcat (nombre, descripcion, idtipog) values(:nombre, :descripcion, :idtipog)';
		$datos=array(
			':nombre'=>$this->nombre,
			':descripcion'=>$this->descripcion, 
			':idtipog'=>$this->idtipog);
		$this->idsubcat=$conexion->ejecutarSentencia($consulta, $datos);
	}

	function modificar_subcat()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='UPDATE subcat SET nombre=:nombre, descripcion=:descripcion, idtipog=:idtipog WHERE idsubcat=:idsubcat';
		$datos=array(':nombre'=>$this->nombre,
			':descripcion'=>$this->descripcion, ':idtipog'=>$this->idtipog, ':idsubcat'=>$this->idsubcat);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function eliminar_subcat()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from subcat WHERE idsubcat=:idsubcat';
		$datos=array(':idsubcat'=>$this->idsubcat);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obtener_subcat()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from subcat WHERE idsubcat=:idsubcat';
		$datos=array(':idsubcat'=>$this->idsubcat);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado=setFetchMode(PDO::FETCH_INTO, $this);
		$this->resultado->fetch();
	}

	function listar_subcat()
	{	$lista=array();
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from subcat WHERE idtipog=:idtipog';
		$datos=array(':idtipog'=>$this->idtipog);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'subcat', array('idsubcat', 'nombre', 'descripcion', 'idtipog'));
		$lista=$resultado->fetchAll();
		return $lista;
	}
	
	function eliminar_subcat_cascada()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from subcat where idtipog=:idtipog';
		$datos=array(':idtipog'=>$this->idtipog);
		$conexion->ejecutarSentencia($consulta, $datos);
	}
}
?>