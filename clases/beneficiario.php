<?php
include_once('ConexionBaseDatos.php');
class Beneficiario
{
	var $idbeneficiario; //1
	var $nombres; //2
	var $apellidos;//3
	var $sexo;//4
	var $fecha_nac; //5
	var $edad;//6
	var $direccion; //7
	var $telefono;//8
	var $correo;//9
	var $seccion;//10
	var $distrito;	//11

	function Beneficiario( $a, $b, $c, $d, $e, $f, $g, $h, $i, $j)
	{
		$this->idbeneficiario=$a;
		$this->nombres=$b;
		$this->apellidos=$c;
		$this->sexo=$d;
		$this->fecha_nac=$e;
		$this->edad=$f;
		$this->direccion=$g;
		$this->correo=$h;
		$this->seccion=$i;
		$this->distrito=$j;
	}

	function insertar_beneficiario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='INSERT into Beneficiario (nombres, apellidos, sexo, fecha_nac, edad, direccion, correo, seccion, distrito) VALUES (:nombres, :apellidos, :sexo, :fecha_nac, :edad, :direccion, :correo, :seccion, :distrito)';
		$datos=array(
			':nombres'=>$this->nombres,
			':apellidos'=>$this->apellidos,
			':sexo'=>$this->sexo,
			':fecha_nac'=>$this->fecha_nac,
			':edad'=>$this->edad,
			':direccion'=>$this->direccion,
			':correo'=>$this->correo,
			':seccion'=>$this->seccion,
			':distrito'=>$this->distrito);
		$this->idbeneficiario->ejecutarSentencia($consulta, $datos);
	}

	function modificar_beneficiario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='UPDATE beneficiario SET nombres=:nombres, apellidos=:apellidos, sexo=:sexo, fecha_nac=:fecha_nac, edad=:edad, direccion=:direccion, correo=:correo, seccion=:seccion WHERE idbeneficiario=:idbeneficiario';
		$datos=array(':nombres'=>$this->nombres,
			':apellidos'=>$this->apellidos,
			':sexo'=>$this->sexo,
			':fecha_nac'=>$this->fecha_nac,
			':edad'=>$this->edad,
			':direccion'=>$this->direccion,
			':correo'=>$this->correo,
			':seccion'=>$this->seccion,
			':distrito'=>$this->distrito,
			':idbeneficiario'=>$this->idbeneficiario);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function eliminar_beneficiario()
	{
		$conexion= new ConexionBaseDatos(); 
		$consulta='DELETE from beneficiario where idbeneficiario=:idbeneficiario';
		$datos=array(':idbeneficiario'=>$this->idbeneficiario);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obtener_beneficiario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from beneficiario where idbeneficiario=:idbeneficiario';
		$datos=array(':idbeneficiario'=>$this->idbeneficiario);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_INTO, $this);
		$resultado->fetch();		
	}

	function listar_beneficiario()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from beneficiario';
		$datos=array();
		$resultado->setFetchMode(PDO::FETCH_INTO, $this);
		$resultado->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'beneficiario', array('nombres', 'apellidos', 'sexo', 'fecha_nac', 'edad', 'direccion', 'correo', 'seccion', 'distrito'));
		$lista= $resultado->fetch_All();
		return $lista;
	}
}
?>