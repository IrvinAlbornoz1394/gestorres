<?php
include_once("ConexionBaseDatos.php");

class Permiso
{
	var $idpermiso;
	var $nompermiso;
	var $clavepermiso;
	
	function Permiso($idperm,$nomperm,$clvepermiso)
	{
		$this->idpermiso = $idperm;
		$this->nompermiso = $nomperm;
	    $this->clavepermiso = $clvepermiso;
	}
	
	function insertar_permiso()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "INSERT into permiso(nompermiso,clavepermiso) VALUES( :nompermiso, :clavepermiso)";
		$datos = array(
		":nompermiso"=> $this->nompermiso,
		":clavepermiso"=> $this->clavepermiso);
		$this->idpermiso=$conexion->ejecutarSentencia($consulta, $datos);
	}
	
	function modificar_permiso()
	{		
		$conexion = new ConexionBaseDatos();
		$consulta = "UPDATE permiso set nompermiso=:nompermiso, clavepermiso=:clavepermiso where idpermiso=:idpermiso";
		$datos = array(
		":idpermiso"=> $this->idpermiso,
		":nompermiso"=> $this->nompermiso,
		":clavepermiso"=> $this->clavepermiso);
		$conexion->ejecutarSentencia($consulta, $datos);
	}
	
	function eliminar_permiso()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "DELETE from permiso where idpermiso=:idpermiso";
		$datos = array(
		":idpermiso"=> $this->idpermiso);
		$conexion->ejecutarSentencia($consulta, $datos);	
	}
	
	function obtener_permiso()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "SELECT *From permiso where idpermiso=:idpermiso";
		$datos = array(
		":idpermiso"=> $this->idpermiso);
		$resultado= $conexion->ejecutarSentencia($consulta,$datos);
		$resultado->SetFetchMode(PDO::FETCH_INTO,$this);
	    $resultado->Fetch();
	}
	
	function listar_permiso()
	{
		$conexion = new ConexionBaseDatos();
		$consulta = "SELECT idpermiso, nompermiso, clavepermiso FROM permiso";
		$datos = array(
		":idpermiso"=> $this->idpermiso);
		$resultados=$conexion->ejecutarSentencia($consulta,$datos);
		$resultados->SetFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "permiso", array("idpermiso", "nompermiso", "clavepermiso"));
		$lista =$resultados->FetchAll();
		return $lista;
	}
}
?>