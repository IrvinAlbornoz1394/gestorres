<?php
include_once('ConexionBaseDatos.php');

class busqueda_persona{

	var $criterio;
	var $resultado;
	var $tipo;
	var $consulta_base;

	function busqueda_persona($criterio, $tipo)
	{
		$this->criterio=$criterio;
		$this->tipo=$tipo;
		$this->resultado=array();
		$this->consulta_base='SELECT *
			from persona 
			WHERE idpersona=:idpersona 
			and nombres=nombres
			and clave_elec=clave_elec';
	}

	function crear_consulta()
	{
		switch ($this->tipo) {
			case 1:
				$this->consulta_base=$this->consulta_base.'persona.nombres like :criterio';
				break;

			case 2:
				$this->consulta_base=$this->consulta_base.'persona.clave_elec like :criterio';
				break;
		}
	}

	function obtener_datos()
	{
		$this->crear_consulta();
		$conexion= new ConexionBaseDatos();
		$datos=array();
		$datos[':criterio']='%'.$this->criterio.'%';
		$datos_temp=$conexion->ejecutarSentencia($this->consulta_base, $datos);
		$datos_temp->setFetchMode(PDO::FETCH_OBJ);
		$this->resultado=$datos_temp->fetchAll();
	}
}
?>