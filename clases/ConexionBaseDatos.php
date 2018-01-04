<?php

class ConexionBaseDatos
{
    var $conexion;
    var $servidor;
	var $db_name;
	var $usuario;
	var $pass;
	var $sentencia;
	
	function ConexionBaseDatos()
	{
		$this->db_name='gestorres';
		$this->servidor='localhost';
		$this->usuario='root';
		$this->pass='';
	}
	
	function abrir_conexion()
	{
		$this->conexion=new PDO("mysql:host=$this->servidor;dbname=$this->db_name",$this->usuario,$this->pass);
		$this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	function ejecutarSentencia($consulta, $datos=array())
	{
		try
		{
			$this->abrir_conexion();
			$this->sentencia=$this->conexion->prepare($consulta);
			$this->sentencia->execute($datos);
            return $this->sentencia;
		}
        catch (PDOException $e)
		{
			echo 'ERROR: '.$e->getMessage().'<br/>';
		}
		
	}
function imprimesentencia($consulta,$datos)
  {
      $cadena=$consulta;
      foreach($datos as $campo=>$valor)
      {
          $cadena=str_replace($campo,"'".$valor."'",$cadena);
      }
      echo $cadena;
  }

}

?>