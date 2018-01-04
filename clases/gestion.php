<?php
include_once('ConexionBaseDatos.php');
include_once('tipo_gestion.php');
class Gestion
{
	var $idgestion;
	var $fecha_captura;
	var $fecha_entrega;
	var $detalle;
	var $estatus;
	var $tipog;


	function gestion($a, $b, $c, $d, $e, $tg)
	{
		$this->idgestion=$a;
		$this->fecha_captura=$b;
		$this->fecha_entrega=$c;
		$this->detalle=$d;
		$this->estatus=$e;
		$this->tipog= new tipo_gestion($tg,'','');
		//$this->tipo_gestion= new tipo_gestion($tipo_gestion, '','');
	}

	function insertar_gestion()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='INSERT into gestion (fecha_captura, fecha_entrega, detalle, estatus, idtipog) VALUES (:fecha_captura, :fecha_entrega, :detalle, :estatus, :idtipog)';
		$datos=array(
			':fecha_captura'=>$this->fecha_captura,
			':fecha_entrega'=>$this->fecha_entrega,
			':detalle'=>$this->detalle,
			':estatus'=>$this->estatus,
			':idtipog'=>$this->idtipog);
		$this->idgestion=$conexion->ejecutarSentencia($consulta, $datos);
	}

	function modificar_gestion()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='UPDATE gestion SET fecha_captura=:fecha_captura, fecha_entrega=:fecha_entrega, detalle=:detalle, estatus=:estatus, idtipog=:idtipog WHERE idgestion=:idgestion';
		$datos=array(':fecha_captura'=>$this->fecha_captura,
			':fecha_entrega'=>$this->fecha_entrega,
			':detalle'=>$this->detalle,
			':estatus'=>$this->estatus,
			':idtipog'=>$this->idtipog,
			':idgestion'=>$this->idgestion);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function eliminar_gestion()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from gestion WHERE idgestion=:idgestion';
		$datos=array(':idgestion'=>$this->idgestion);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obtener_gestion()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from gestion WHERE idgestion=:idgestion';
		$datos=array(':idgestion'=>$this->idgestion);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->SetFetchMode(PDO::fetch_into, $this);
		$resultado->fetch();
		$this->obten_tipog();
	}

	function listar_gestion()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from gestion';
		$datos=array();
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->SetFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'gestion', array('idgestion', 'fecha_captura', 'fecha_entrega', 'detalle', 'estatus', 'idtipog'));
		$listap=$resultado->fetchAll();
		return $listap;
	}

	function obten_tipog()
	{
		$this->tipog->idtipog=$this->idtipog;
		$this->tipog->obtener_tipog();
	}
}	
?>