<?php
include_once('ConexionBaseDatos.php');
class Persona
{
	var $idpersona; //1
	var $nombres; //2
	var $apellidopat;//3
	var $apellidomat;//4
	var $fecha_nac;//5
	var $edad;//6
	var $sexo;//7
	var $telefono;//8
	var $celular;//9
	var $direccion;//10
	var $curp;//11
	var $clave_elec;//12
	var $fecha_ingreso;//13
	var $ocupacion;//14


	function persona( $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n)
	{
		$this->idpersona=$a;
		$this->nombres=$b;
		$this->apellidopat=$c;
		$this->apellidomat=$d;
		$this->fecha_nac=$e;
		$this->edad=$f;
		$this->sexo=$g;
		$this->telefono=$h;
		$this->celular=$i;
		$this->direccion=$j;
		$this->curp=$k;
		$this->clave_elec=$l;
		$this->fecha_ingreso=$m;
		$this->ocupacion=$n;
	}

	function insertar_persona()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='INSERT into persona (nombres, apellidopat, apellidomat, fecha_nac, edad, sexo, telefono, celular, direccion, curp, clave_elec, fecha_ingreso, ocupacion) VALUES (:nombres, :apellidopat, :apellidomat, :fecha_nac, :edad, :sexo, :telefono, :celular, :direccion, :curp, :clave_elec, :fecha_ingreso, :ocupacion)';
		$datos=array(
			':nombres'=>$this->nombres,
			':apellidopat'=>$this->apellidopat,
			':apellidomat'=>$this->apellidomat,
			':fecha_nac'=>$this->fecha_nac,
			':edad'=>$this->edad,
			':sexo'=>$this->sexo,
			':telefono'=>$this->telefono,
			':celular'=>$this->celular,
			':direccion'=>$this->direccion,
			':curp'=>$this->curp,
			':clave_elec'=>$this->clave_elec,
			':fecha_ingreso'=>$this->fecha_ingreso,
			':ocupacion'=>$this->ocupacion);
		$this->idpersona=$conexion->ejecutarSentencia($consulta, $datos);
	}

	function modificar_persona()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='UPDATE persona SET nombres=:nombres, 
			apellidopat=:apellidopat, 
			apellidomat=:apellidomat,  
			fecha_nac=:fecha_nac, 
			edad=:edad,
			sexo=:sexo, 
			telefono=:telefono,
			celular=:celular, 
			direccion=:direccion,
			curp=:curp,
			clave_elec=:clave_elec,
			fecha_ingreso=:fecha_ingreso,
			ocupacion=:ocupacion 
			WHERE idpersona=:idpersona';
		$datos=array(
			':nombres'=>$this->nombres,
			':apellidopat'=>$this->apellidopat,
			':apellidomat'=>$this->apellidomat,
			':fecha_nac'=>$this->fecha_nac,
			':edad'=>$this->edad,
			':sexo'=>$this->sexo,
			':telefono'=>$this->telefono,
			':celular'=>$this->celular,
			':direccion'=>$this->direccion,
			':curp'=>$this->curp,
			':clave_elec'=>$this->clave_elec,
			':fecha_ingreso'=>$this->fecha_ingreso,
			':ocupacion'=>$this->ocupacion,
			':idpersona'=>$this->idpersona);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function eliminar_persona()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='DELETE from persona WHERE idpersona=:idpersona';
		$datos=array(':idpersona'=>$this->idpersona);
		$conexion->ejecutarSentencia($consulta, $datos);
	}

	function obtener_persona()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from persona WHERE idpersona=:idpersona';
		$datos=array(':idpersona'=>$this->idpersona);
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_INTO, $this);
		$resultado->fetch();
	}

	function listar_persona()
	{
		$conexion= new ConexionBaseDatos();
		$consulta='SELECT * from persona';
		$datos=array();
		$resultado=$conexion->ejecutarSentencia($consulta, $datos);
		$resultado->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'persona', array('idpersona','nombres', '	', 'apellidomat', 'fecha_nac', 'edad', 'sexo', 'telefono', 'celular', 'direccion', 'curp', 'clave_elec', 'fecha_ingreso', 'ocupacion'));
		$lista=$resultado->fetchAll();
		return $lista;
	}

}
?>