<?php
include_once("ConexionBaseDatos.php");

class Rol
{
	var $idrol;
	var $nomrol;
	
	function Rol($idrl,$norol)
	{
		$this->idrol = $idrl;
		$this->nomrol = $norol;
	}
	
	function insertar_rol()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "INSERT into rol (nomrol) VALUES(:nomrol)";
		$datos = array(
		":nomrol"=> $this->nomrol);
		$this->idrol=$conexion->ejecutarSentencia($consulta,$datos);
	}
	
	function modificar_rol()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "UPDATE rol set nomrol=:nomrol where idrol=:idrol";
		$datos = array(
		":idrol"=> $this->idrol,
		":nomrol"=> $this->nomrol);
	    $conexion->ejecutarSentencia($consulta,$datos);
	}
	
	function eliminar_rol()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "DELETE from rol where idrol=:drol";
		$datos = array(
		":idrol"=> $this->idrol);
	    $oConexionBaseDatos->ejecutarSentencia($consulta,$datos);
	}
	
	function obtener_rol()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "SELECT * from rol where idrol=:idrol";
		$datos = array(
		":idrol"=> $this->idrol);
	    $resultado=$conexion->ejecutarSentencia($consulta,$datos);
		$resultado->SetFetchMode(PDO::FETCH_INTO,$this);
	    $resultado->Fetch();
	}
	
	function listar_rol()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "SELECT * FROM rol";
		$datos = array();
		$resultados= $conexion->ejecutarSentencia($consulta,$datos);
		$resultados->SetFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "rol", array("idrol","nomrol"));
		$lista =$resultados->FetchAll();
		return $lista;
	}
}

?>