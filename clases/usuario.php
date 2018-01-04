<?php
include_once("ConexionBaseDatos.php");
include_once("Rol.php");
class usuario
{
	var $idusuario;
	var $nomusuario;
	var $password;
	var $rol;

	function usuario($id, $nom, $pas, $idr)
	{
		$this->idusuario=$id;
		$this->nomusuario=$nom;
		$this->password=$pas;
		$this->rol= new rol($idr,'');
	}	

	function insertar_usuario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='INSERT into usuario (nomusuario, password, idrol) VALUES (:nomusuario, :password, :idrol)';
		$datos=array(
			':nomusuario'=>$this->nomusuario,
			':password'=> MD5($this->password),
			':idrol'=>$this->rol->idrol);
		$this->idusuario=$conexion->ejecutarSentencia($consulta, $datos);
	}

	function modificar_usuario()
	{
		$conexion= new ConexionBaseDatos();
		$sql_password='';
		$consulta='UPDATE usuario SET nomusuario=:nomusuario, password=:password, idrol=:idrol WHERE idusuario=:idusuario';
		$datos=array(
		':nomusuario'=>$this->nomusuario,
		':idrol'=>$this->rol->idrol,
		':idusuario'=>$this->idusuario);
		if($this->password!="")
		{
			$sql_password=",password=:password";
			$datos[":password"]= MD5($this->password);
		}
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function eliminar_usuario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from usuario WHERE idusuario=:idusuario';
		$datos=array(':idusuario'=>$this->idusuario);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obtener_usuario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from usuario WHERE idusuario=:idusuario';
		$datos=array(':idusuario'=>$this->idusuario);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->SetFetchMode(PDO::FETCH_INTO, $this);
		$resultado->Fetch();		
	}

	function listar_usuario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from usuario';
		$datos=array();
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->SetFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "usuario",array('idusuario', 'nomusuario', 'password', 'idrol'));
		$lista=$resultado->FetchAll();
		return $lista;
	}

	function obten_roles()
	{
		$this->rol->idrol=$this->idrol;
		$this->rol->obtener_rol();
	}

	function login()
	{
		$bandera=0;
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from usuario WHERE nomusuario=:nomusuario and password=:password';
		$datos=array(':nomusuario'=>$this->nomusuario,
			':password'=>MD5($this->password));
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->SetFetchMode(PDO::FETCH_INTO,$this);
		$resultado->Fetch();
		if($this->idusuario!=0)
			$bandera=1;
		return $bandera;
	}
}
?>