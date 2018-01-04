<?php
include_once('ConexionBaseDatos.php');
include_once('rol.php');
include_once('permiso.php');

class rolxpermiso
{
	var $idrol;
	var $idpermiso;
	var $rol;
	var $permiso;

	function rolxpermiso($idr, $idp)
	{
		$this->idrol=$idr;
		$this->idpermiso=$idp;
		$this->rol=array();
		$this->permiso=array();
	}

	function asignar_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='INSERT INTO rolxpermiso (idrol, idpermiso) VALUES (:idrol, :idpermiso)';
		$datos=array(
			':idrol'=>$this->idrol,
			':idpermiso'=>$this->idpermiso);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function modificar_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='UPDATE rolxpermiso SET idrol=:idrol, idpermiso=:idpermiso';
		$datos=array(
			':idrol'=>$this->idrol,
			':idpermiso'=>$this->idpermiso);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function eliminar_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from rolxpermiso WHERE idrol=:idrol';
		$datos=array(':idrol'=>$this->idrol);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obtener_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from rolxpermiso WHERE idro=:idrol';
		$datos=array(':idrol'=>$this->idrol);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->serFetchMode(PDO::FETCH_INTO, $this);
		$resultado->fetch();
	}

	function listar_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from rolxpermiso';
		$datos=array();
		$resultado->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'rolxpermiso', array('idrol', 'idpermiso'));
		$lista=$resultado->fetchAll();
		return $lista;
	}

	function desasignar_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from rolxpermiso where idpermiso=:idpermiso';
		$datos=array(':idpermiso'=>$this->idpermiso);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function desasignar_permisoxrol()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from rolxpermiso WHERE idrol=:idrol';
		$datos=array(':idrol'=>$this->idrol);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obten_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT idrol from rolxpermiso where idpermiso=:idpermiso';
		$datos=array(':idrol'=>$this->idrol,
			':idpermiso'=>$this->idpermiso);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'rol', array('idrol', ''));
		$this->rol=$resultado->fetchAll();
	}

	function obten_permisoxrol()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from rolxpermiso WHERE idrol=:idrol AND idpermiso=:idpermiso';
		$datos=array(':idrol'=>$this->idrol, ':idpermiso'=>$this->idpermiso);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'permiso', array('idpermiso', '',''));
		$this->permiso=$resultado->fetchAll();
	}

	function valida_rolxpermiso()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT idrol, idpermiso from rolxpermiso WHERE idrol=:idrol and idpermiso=:idpermiso';
		$datos=array(':idrol'=>$this->idrol,
			':idpermiso'=>$this->idpermiso);
			$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		return $resultado->fetch();
	}

	function verifica_perxuser($id, $cve)
	{
		$bandera=0;
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT rolxpermiso.idrol, rolxpermiso.idpermiso 
					from usuario, permiso, rol, rolxpermiso
					where usuario.idrol=rol.idrol 
					and rol.idrol=rolxpermiso.idrol 
					and rolxpermiso.idpermiso=permiso.idpermiso
					and idusuario=:idusuario
					and clavepermiso=:clavepermiso';

		$datos=array(':idusuario'=>$id,
			':clavepermiso'=>$cve);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_INTO, $this);
		$resultado->fetch();
		if($this->idrol!=0)
			$bandera=1;
		return $bandera;
	}
}
?>