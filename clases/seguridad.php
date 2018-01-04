<?php
include_once("usuario.php");
include_once("rolxpermiso.php");
include_once("permiso.php");

class seguridad
{
	var $usuario;
	var $rolxpermiso;

	function seguridad()
	{
		$this->usuario= new usuario("", "","","");
		$this->rolxpermiso= new rolxpermiso(0,0);
	}

	function login($user, $pwd, $dirok, $dirmal)
	{
		$this->usuario->nomusuario=$user;
		$this->usuario->password=$pwd;

		if ($this->usuario->login()==1)
		{
			$_SESSION['idusuario']=$this->usuario->idusuario;
			header('Location:'.$dirok);
		}
		else
		{
			session_destroy();
			header('Location:'.$dirmal);
		}
	}

	function verifica_perxuser($id, $clavepermiso)
	{
		$this->rolxpermiso->idrol=0;
		$this->rolxpermiso->idpermiso=0;
		return $this->rolxpermiso->verifica_perxuser($id, $clavepermiso);
	}

	function candado()
	{
		if(!(isset($_SESSION['idusuario'])))
			header('Location: ../login/login.php');
	}
}
?>