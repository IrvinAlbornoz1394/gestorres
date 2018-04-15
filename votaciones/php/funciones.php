<?php
 	session_start();
	if(isset($_POST['opc'])){
		$opc = $_POST['opc'];
	}elseif (isset($_GET['opc'])) {
		$opc = $_GET['opc'];
	}
	switch ($opc) {
		case 'get_casillas':
			get_casillas();
			break;
		case 'get_usuarios':
			get_usuarios();
			break;
		case 'insert_usuario':
			insert_usuario();
			break;
		case 'cambiar_password':
			cambiar_password();
			break;
		default:
			# code...
			break;
	}

	function conexion(){
		//$mysqli = new mysqli("localhost", "boonwaya_oliver", "B00NWAYAK09*", "boonwaya_oliverDB");
		$mysqli = new mysqli("localhost", "root", "", "votaciones");
		/* check connection */
		if (!$mysqli->connect_errno) {
			return $mysqli;
		}

	}

	function logout(){
		session_start();
		session_unset();
		session_destroy();
		header('location: ../login.php');
	}

	function get_casillas(){
		$mysqli = conexion();
		$datos = [];
		$success = true;
		$message = "OK";

		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$query = "SELECT * from casillas";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados";
		}

		while ($row = mysqli_fetch_array($result)) {
			$datos[] = array('id' => $row['id'],
							 'nombre' => $row['nombre_casilla']);
		};
		$json = array('success' => $success,
					  'message' =>$message,
					  'data' => $datos);

		echo json_encode($json);
	}

	function get_usuarios(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$success = true;
		$message = "OK";
		$usuarios = [];
		$query = "Select * from usuarios";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de usuarios";
		}
		while ($row = mysqli_fetch_array($result)) {
			$qc = "SELECT c.* from casillas_x_usuario cu inner join casillas c on c.id = cu.id_casilla where cu.id_usuario ='".$row['id']."'";
			$casillas = [];
			$rc = $mysqli->query($qc);
			while ($c = mysqli_fetch_array($rc)) {
				$casillas[] = array('id' => $c['id'],
									'casilla' => $c['nombre_casilla']);	
			}
			$usuarios[] = array('id' => $row['id'],
						  'nombre_completo' => $row['nombre_completo'],
						  'nombre_usuario' => $row['nombre_usuario'],
						  'tipo_usuario' => $row['tipo_usuario'],
						  'estatus' => $row['estatus'],
						  'casillas' => $casillas);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $usuarios);
		echo json_encode($json);
	}

	function insert_usuario(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}

		$id = $_POST['id'];
		$nombre_completo = $_POST['nombre_completo'];
		$nombre_usuario = $_POST['nombre_usuario'];
		$password = "";
		$casillas = $_POST['casillas'];
		if(isset($_POST['password'])){
			$password = md5($_POST['password']);
		}
		$tipo = $_POST['tipo_usuario'];
		// $user = $_SESSION["usuario"];
		$user = "Irvin";
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "INSERT INTO usuarios values ('$id','$nombre_completo', '$nombre_usuario', '$password', '$tipo','1') ON DUPLICATE KEY UPDATE nombre_completo = '$nombre_completo', nombre_usuario = '$nombre_usuario', tipo_usuario = '$tipo'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}

		if($id == ""){
			$id= $mysqli->insert_id;
		}else{
			$query_delete = "DELETE FROM casillas_x_usuario Where id_usuario = '$id'";	
			$mysqli->query($query_delete);
		}

		for ($i=0; $i < count($casillas); $i++) { 
			$query_rp = "INSERT INTO casillas_x_usuario values ('$id','$casillas[$i]')";
			if(!$mysqli->query($query_rp)){
				$success = false;
				$message = "No pudo ingresarse la iformacion del rol";
			}
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function cambiar_password(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$id = $_POST['id'];
		$nvo_password = $_POST['nvo_password'];
		$confirm_password = $_POST['confirm_password'];
		$pass = md5($nvo_password);
		$user = $_SESSION["usuario"];
		if($nvo_password !== $confirm_password){
			$json = array('success' => false,
			              'mesage' => 'Las contraseñas no son iguales.');
			echo json_encode($json);
			exit();	
		}
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "UPDATE usuarios set password = '$pass' WHERE id = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

 ?>