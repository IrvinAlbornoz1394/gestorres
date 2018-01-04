<?php
include_once('ConexionBaseDatos.php');
include_once('subcategoria.php');
class tipo_gestion
{
	var $idtipog;
	var $nombre;
	var $clave;
	var $subcat;

	function tipo_gestion($a, $b, $c)
	{
		$this->idtipog=$a;
		$this->nombre=$b;
		$this->subcat=array();
	}

	function insertar_tipog()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='INSERT into tipo_gestion (nombre, clave) VALUES (:nombre, :clave)';
		$datos=array(':nombre'=>$this->nombre, ':clave'=>$this->clave);
		$this->idtipog=$conexion->ejecutarSentencia($consulta, $datos);
	}

	function modificar_tipog()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='UPDATE tipo_gestion SET nombre=:nombre, clave=:clave WHERE idtipog=:idtipog';
		$datos=array(':nombre'=>$this->nombre, ':clave'=>$this->clave, ':idtipog'=>$this->idtipog);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function eliminar_tipog()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from tipo_gestion WHERE idtipog=:idtipog';
		$datos=array(':idtipog'=>$this->idtipog);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obtener_tipog()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from tipo_gestion WHERE idtipog=:idtipog';
		$datos=array(':idtipog'=>$this->idtipog);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_INTO, $this);
		$resultado->fetch();
	}

	function listar_tipog()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from tipo_gestion';
		$datos=array();
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'tipo_gestion', array('idtipog', 'nombre', 'clave'));
		$lista=$resultado->fetchAll();
		return $lista;
	}

	function obtener_subcat()
	{
		$subcat = new subcategoria('','','',$this->idtipog);
		$this->tipog=$subcat->listar_subcat();
	}

	function borrar_subcat_cascada()
	{
		$subcat= new subcategoria('','','',$this->idtipog);
		$subcat->eliminar_subcat_cascada();
	}
}
?>