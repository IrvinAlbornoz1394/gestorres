<?php
 
	if(isset($_POST['opc'])){
		$opc = $_POST['opc'];
	}elseif (isset($_GET['opc'])) {
		$opc = $_GET['opc'];
	}
	switch ($opc) {
		case 'buscar_personas':
			buscar_personas();
			break;
		case 'info':
			get_info();
			break;
		case 'correo':
			sedCorreo();
			break;
		case 'get_serv':
			get_serv();
			break;
		case 'get_galeria':
			get_galeria();
			break;
		case 'get_colonias':
			get_colonias();
			break;
		case 'nva_persona':
			nva_persona();
			break;
		case 'get_cat_subCat':
			get_cat_subCat();
			break;
		case 'nva_gestion':
			nva_gestion();
			break;
		case 'get_gestiones':
			get_gestiones();
			break;
		case 'estatus':
			cambiar_estatus();
				break;	
		case 'insert_cat':
			insert_cat();
			break;
		case 'estatus_cat':
			estatus_cat();
			break;
		case 'insert_subCat':
			insert_subCat();
			break;
		case 'estatus_subCat':
			estatus_subCat();
			break;
		case 'logout':
			logout();
			break;
		default:
			# code...
			break;
	}

	function conexion(){
		//$mysqli = new mysqli("localhost", "boonwaya_oliver", "B00NWAYAK09*", "boonwaya_oliverDB");
		$mysqli = new mysqli("localhost", "root", "", "gestorres");
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


	function buscar_personas(){
		$mysqli = conexion();
		$datos = [];
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$cve_elector = $_POST['cve_elector'];
		$nombres = $_POST['nombres'];
		$apellido = $_POST['ap_paterno'];

		if($cve_elector != ""){
			$filtro = "clave_elec = '$cve_elector'";
		}else{
			$filtro = "(nombres like '%".$nombres."%' AND apellidopat like '%".$apellido."%') || (nombres like '%".$nombres."%' AND apellidomat like '%".$apellido."%')";
		}

		$query = "SELECT p.*,c.prefijo, c.nombre_colonia FROM personas p inner join catColonias c on (c.idColonia = p.id_colonia) Where ".$filtro;
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados";
		}else{
			while ($row = mysqli_fetch_array($result)) {
					$datos[] = array(
								'id' => $row['idpersona'],
								'nombres' => $row['nombres'],
								'apellidopat' => $row['apellidopat'],
								'apellidomat' => $row['apellidomat'],
								'fecha_nac' => $row['fecha_nac'],
								'telefono' => $row['telefono'],
								'celular' => $row['celular'],
								'direccion' => $row['direccion'],
								'id_colonia' => $row['id_colonia'],
								'colonia' => $row['prefijo']." ".$row['nombre_colonia'],
								'cve_elector' => $row['clave_elec']
							);
			}
			$json = array('success' => true,
						  'message' => 'OK',
						  'data' => $datos);
		}
		echo json_encode($json);
	}

	function get_colonias(){
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
		$query = "SELECT * from catColonias";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados";
		}
		//$i = 0;
		while ($row = mysqli_fetch_array($result)) {
			$datos[] = array('id' => $row['idColonia'],
							 'pref' => $row['prefijo'],
							 'nombre' => $row['nombre_colonia']
			);
		}
		$json = array('success' => $success,
					  'message' =>$message,
					  'data' => $datos);

		echo json_encode($json);
	}

	function get_cat_subCat(){
		$mysqli = conexion();
		$cat = [];
		$subCat = [];
		$success = true;
		$message = "OK";
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$query = "SELECT * from tipo_gestion WHERE estatus = 1";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de tipo de gestion";
		}

		while ($row = mysqli_fetch_array($result)) {
			$cat[] = array('id' => $row['idtipog'],
							 'nombre' => $row['nombre'],
							 'clave' => $row['clave']
			);
		}

		$query1 = "SELECT s.*,c.nombre as cat from subcat s inner join tipo_gestion c on s.idtipog = c.idtipog Where s.estatus = 1";
		$result1 = $mysqli->query($query1);
		if(!$result1){
			$success = false;
			$message = "No se encontraron resultados de tipo de subcategoria";
		}
		
		while ($row1 = mysqli_fetch_array($result1)) {
			$subcat[] = array('id' => $row1['idsubcat'],
							 'nombre' => $row1['nombre'],
							 'descripcion' => $row1['descripcion'],
							 'idCat' => $row1['idtipog'],
							 'cat' => $row1['cat']

			);
		}
		$json = array('success' => $success,
					  'message' =>$message,
					  'categorias' => $cat,
					  'subcategorias' => $subcat);

		echo json_encode($json);
	}

	function nva_persona(){
		$mysqli = conexion();
		$nombres = $_POST['nombres'];
		$apellidopat = $_POST['apellidopat'];
		$apellidomat = $_POST['apellidomat'];
		$cve_elector = $_POST['cve_elector'];
		$fecha_nac = $_POST['fecha_nacimiento'];
		$aux = explode("/", $fecha_nac);
		$fecha_nac = $aux[2]."-".$aux[1]."-".$aux[0];
		$sexo = $_POST['sexo'];
		$domicilio = $_POST['domicilio'];
		$colonia = $_POST['colonia'];
		$telefono = $_POST['telefono'];
		$celular = $_POST['celular'];
		$ocupacion = $_POST['ocupacion'];
		$origen = $_POST['origen'];
		$usar = false;
		$info = "";
		$success = true;
		$message = "OK";
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}

		$query = "INSERT INTO personas VALUES ('','$nombres','$apellidopat','$apellidomat','$fecha_nac','','$sexo','$telefono','$celular','$domicilio','','$cve_elector',NOW(),'$ocupacion','$colonia') ON DUPLICATE KEY UPDATE nombres = '$nombres', apellidopat = '$apellidopat', apellidomat = '$apellidomat', fecha_nac = '$fecha_nac', telefono = '$telefono', celular = '$celular',direccion = '$domicilio', ocupacion = '$ocupacion', id_colonia = '$colonia'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "NO se pudo crear la información";
		}else{
			if(isset($_POST['seleccionado'])){
				$usar = true;;
			}
			$info = array('id' => $mysqli->insert_id,
						  'nombres' => $nombres,
						  'apellidopat' => $apellidopat,
						  'apellidomat' => $apellidomat,
						  'cve_elector' => $cve_elector,
						  'direccion' => $domicilio,
						  'id_colonia' => $colonia,
						  'origen' => $origen
						);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'info' => $info,
					  'usar' => $usar);
		echo json_encode($json);
	}

	function nva_gestion(){
		$mysqli = conexion();
		$success = true;
		$message = "OK";
		$id_solicitante = $_POST['id_solicitante'];
		$id_beneficiario = $_POST['id_beneficiario'];
		$fecha_captura = $_POST['fecha_captura'];
		$aux = explode("/", $fecha_captura);
		$fecha_captura = $aux[2]."-".$aux[0]."-".$aux[1];

		$fecha_entrega = $_POST['fecha_entrega'];
		$aux2 = explode("/", $fecha_entrega);
		$fecha_entrega = $aux2[2]."-".$aux2[0]."-".$aux2[1];
		$direccion = $_POST['direccion_entrega'];
		$id_colonia = $_POST['id_colonia_gestion'];
		$estatus = $_POST['estatus'];
		$cat = $_POST['categoria'];
		$subcat = $_POST['subcategoria'];
		$comentarios = $_POST['comentarios'];
		if(isset($_POST['es_beneficiario'])){
			$id_beneficiario = $id_solicitante;
		}
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$query = "INSERT INTO gestiones VALUES ('','$fecha_captura','$fecha_entrega','','$id_solicitante','$id_beneficiario','$cat','$subcat','$direccion','$id_colonia','$comentarios','$estatus','')";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "NO se guarda la informacion intentalo mas tarde.";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function get_gestiones(){
		$mysqli = conexion();
		$success = true;
		$message = "OK";
		$ges = [];
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}

		$filtro = "";
		if(isset($_POST['fecha_inicial']) AND isset($_POST['fecha_final'])){
			if($_POST['fecha_inicial'] !== "" AND $_POST['fecha_final'] !== ""){
				$aux_i = explode("/",$_POST['fecha_inicial']);
				$fi = $aux_i[2]."-".$aux_i[0]."-".$aux_i[1];

				$aux_f = explode("/",$_POST['fecha_final']);
				$ff = $aux_f[2]."-".$aux_f[0]."-".$aux_f[1];

				$filtro .= " WHERE fecha_captura BETWEEN '$fi' AND '$ff' ";
			}
		}

		if(isset($_POST['colonia'])){
			$col = $_POST['colonia'];
			if($col !== ""){
				if($filtro == ""){
					$filtro .=" Where idColonia_entrega = $col";
				}else{
					$filtro .=" AND idColonia_entrega = $col";
				}
			}
		}

		if($filtro == ""){
			//$filtro .= " Where estatus = 1";
		}

		$query = "SELECT g.*, s.nom_sol, b.nom_benf,CONCAT(c.prefijo, ' ', c.nombre_colonia) as nom_colonia, cat.nombre as cat, sc.nombre as subcat from gestiones g inner join catColonias c on c.idColonia = g.idColonia_entrega inner join (SELECT idpersona, CONCAT(nombres,' ',apellidopat,' ',apellidomat)  as nom_sol from personas) as s inner join (SELECT idpersona, CONCAT(nombres,' ',apellidopat,' ',apellidomat)  as nom_benf from personas) as b inner join tipo_gestion cat on (cat.idtipog = g.idCategoria) inner join subcat sc on (sc.idsubcat = g.idSubCategoria) ".$filtro." group by g.idGestion";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de tipo de gestion";
		}
		while ($row = mysqli_fetch_array($result)) {
			//$fecha_real_entrega = "";
			//if($row['fecha_real_entrega'] !== null){
			//	$fecha_real_entrega = $row['fecha_real_entrega'];
			//}
			$ges[] = array('id' => $row['idGestion'],
							 'fCaptura' => $row['fecha_captura'],
							 'fEntrega' => $row['fecha_entrega'],
							 'fRealEntrega' => $row['fecha_real_entrega'],
							 'idSolicitante' => $row['idSolicitante'],
							 'solicitante' => $row['nom_sol'],
							 'idBeneficiario' => $row['idBeneficiario'],
							 'beneficiario' => $row['nom_benf'],
							 'idCat' => $row['idCategoria'],
							 'cat' => $row['cat'],
							 'subcat' => $row['subcat'],
							 'idSubCat' => $row['idSubCategoria'],
							 'direccion_entrega' => $row['direccion_entrega'],
							 'id_col_entrega' => $row['idColonia_entrega'],
							 'colonia' => $row['nom_colonia'],
							 'detalles' => $row['detalles'],
							 'estatus' => $row['estatus'],
							 'comentarios' => $row['comentarios_extras']
			);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $ges);
		echo json_encode($json);
	}


	function cambiar_estatus(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$id = $_POST['id'];
		$comentarios = $_POST['comentarios'];
		$estatus = $_POST['estatus'];
		$success = true;
		if($estatus == 2){
			$message = "Gestion Finalizada Correcamente";
			$fecha_real = 'NOW()';
		}
		if($estatus == 3){
			$message = "Gestion Eliminada Correcamente";
			$fecha_real = "''";
		}
		$query = "UPDATE gestiones SET fecha_real_entrega = $fecha_real, estatus = '$estatus', comentarios_extras = '$comentarios' Where idGestion = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}

		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);

	}


	function insert_cat(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "INSERT INTO tipo_gestion values ('$id','$nombre','',1) ON DUPLICATE KEY UPDATE nombre = '$nombre'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function insert_subCat(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$cat = $_POST['categoria'];
		$descripcion = "";
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "INSERT INTO subcat values ('$id','$nombre','$descripcion','$cat',1) ON DUPLICATE KEY UPDATE nombre = '$nombre', idtipog = '$cat'";

		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function estatus_cat(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$id = $_POST['id'];
		$estatus = $_POST['estatus'];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "UPDATE tipo_gestion set estatus = '$estatus' WHERE idtipog = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function estatus_subCat(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$id = $_POST['id'];
		$estatus = $_POST['estatus'];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "UPDATE subcat set estatus = '$estatus' WHERE idsubcat = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}
 ?>