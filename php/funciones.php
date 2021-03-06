<?php
 	session_start();
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
		case 'get_usuarios':
			get_usuarios();
			break;
		case 'get_colonias':
			get_colonias();
			break;
		case 'get_permisos':
			get_permisos();
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
		case 'get_distritos_secciones':
			get_distritos_secciones();
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
		case 'insert_ocup':
			insert_ocup();
			break;
		case 'insert_usuario':
			insert_usuario();
			break;
		case 'insert_evento':
			insert_evento();
			break;
		case 'insert_rol':
			insert_rol();
			break;
		case 'estatus_subCat':
			estatus_subCat();
			break;
		case 'borrarOcup':
			borrar_ocupacion();
			break;
		case 'get_ocupaciones':
			get_ocupaciones();
			break;
		case 'get_eventos':
			get_eventos();
			break;
		case 'get_roles':
			get_roles();
			break;
		case 'borrarEvento':
			borrarEvento();
			break;
		case 'borrarRol':
			borrarRol();
			break;
		case 'logout':
			logout();
			break;
		case 'estatusUsuario':
			estatusUsuario();
			break;
		case 'estatus_persona':
			estatus_persona();
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
		$mysqli = new mysqli("localhost", "root", "", "gestorres");
		mysqli_set_charset($mysqli,"utf8");
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
		$filtro = "";
		if(isset($_POST['cve_elector']) || isset($_POST['nombres']) || isset($_POST['ap_paterno'])){
			$cve_elector = $_POST['cve_elector'];
			$nombres = $_POST['nombres'];
			$apellido = $_POST['ap_paterno'];

			if($cve_elector != ""){
				$filtro = "WHERE clave_elec = '$cve_elector'";
			}else{
				$filtro = "WHERE (nombres like '%".$nombres."%' AND apellidopat like '%".$apellido."%') || (nombres like '%".$nombres."%' AND apellidomat like '%".$apellido."%')";
			}
		}

		$query = "SELECT p.*,c.prefijo, c.nombre_colonia FROM personas p inner join catColonias c on (c.idColonia = p.id_colonia) ".$filtro." AND p.estatus = 1";
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
								'sexo' => $row['sexo'],
								'telefono' => $row['telefono'],
								'celular' => $row['celular'],
								'calle' => $row['calle'],
								'num_int' => $row['num_int'],
								'num_ext' => $row['num_ext'],
								'cruzamiento_1' => $row['cruzamiento_1'],
								'cruzamiento_2' => $row['cruzamiento_2'],
								'id_colonia' => $row['id_colonia'],
								'colonia' => $row['prefijo']." ".$row['nombre_colonia'],
								'ocupacion' => $row['id_ocupacion'],
								'cve_elector' => $row['clave_elec'],
								'militante' => $row['es_militante'],
								'seccion' => $row['id_seccion'],
								'distrito' => $row['id_distrito'],
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
		$query = "SELECT * from categorias WHERE estatus = 1";
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

		$query1 = "SELECT s.*,c.nombre as cat from subcat s inner join categorias c on s.idtipog = c.idtipog Where s.estatus = 1";
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

	function get_ocupaciones(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$success = true;
		$message = "OK";
		$ocupaciones = [];
		$query = "SELECT * FROM ocupaciones";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de tipo de gestion";
		}
		while ($row = mysqli_fetch_array($result)) {
			$ocupaciones[] = array('id' => $row['id'],
						  'nombre' => $row['nombre_ocupacion']);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $ocupaciones);
		echo json_encode($json);
	}

	function get_eventos(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$success = true;
		$message = "OK";
		$ocupaciones = [];
		$query = "SELECT * FROM eventos";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de tipo de gestion";
		}
		while ($row = mysqli_fetch_array($result)) {
			$eventos[] = array('id' => $row['id'],
						  'nombre' => $row['nombre_evento']);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $eventos);
		echo json_encode($json);
	}

	function get_roles(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$success = true;
		$message = "OK";
		$roles = [];
		$query = "SELECT * from roles";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de tipo de gestion";
		}
		while ($row = mysqli_fetch_array($result)) {
			$query1 = "SELECT p.* from permisos p inner join rolxpermiso rp on p.id = rp.idpermiso Where rp.idrol = ".$row['idrol'];
			$result1 = $mysqli->query($query1);
			if(!$result1){
				$success = false;
				$message = "No se encontraron resultados de tipo de gestion";
			}
			$rxp = [];
			while ($row1 = mysqli_fetch_array($result1)) {
				$rxp[] = array(	'id' => $row1['id'],
								'nombrepermiso' => $row1['nompermiso'],
						  		'cve_permiso' => $row1['clavepermiso']);
			}

			$roles[] = array('idRol' => $row['idrol'],
						  'nombre' => $row['nomrol'],
						  'permisos' => $rxp);
		}

		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $roles);
		echo json_encode($json);
	}


	function get_distritos_secciones(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$success = true;
		$message = "OK";
		$distritos = [];
		$secciones = [];
		$queryD = "SELECT * FROM distritos";
		$resultD = $mysqli->query($queryD);
		if(!$resultD){
			$success = false;
			$message = "No se encontraron resultados de Distritos";
		}
		while ($rowD = mysqli_fetch_array($resultD)) {
			$distritos[] = array('id' => $rowD['id'],
						  'distrito' => $rowD['distrito'],
						  'representante' => $rowD['representante'],
						  'cabecera' => $rowD['cabecera']);
		}

		$queryS = "SELECT * from secciones";
		$resultS = $mysqli->query($queryS);
		if(!$resultS){
			$success = false;
			$message = "No se encontraron resultados de Secciones";
		}
		while ($rowS = mysqli_fetch_array($resultS)) {
			$secciones[] = array('id' => $rowS['id'],
						  'seccion' => $rowS['seccion'],
						  'id_distrito' => $rowS['id_distrito'],
						  'representante' => $rowS['representante']);
		}$data = array('distritos' => $distritos,
					  'secciones' => $secciones);

		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $data);
		echo json_encode($json);
	}


	function get_permisos(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$success = true;
		$message = "OK";
		$ocupaciones = [];
		$query = "SELECT * FROM permisos";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de tipo de gestion";
		}
		while ($row = mysqli_fetch_array($result)) {
			$permisos[] = array('id' => $row['id'],
						  'nombre' => $row['nompermiso']);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $permisos);
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
		$query = "Select u.*,r.nomrol from usuarios u left join roles r on r.idrol = u.idrol";
		$result = $mysqli->query($query);
		if(!$result){
			$success = false;
			$message = "No se encontraron resultados de usuarios";
		}
		while ($row = mysqli_fetch_array($result)) {
			$usuarios[] = array('id' => $row['idusuario'],
						  'nombre_completo' => $row['nombre_completo'],
						  'nombre_usuario' => $row['nomusuario'],
						  'idRol' => $row['idrol'],
						  'rol' => $row['nomrol'],
						  'estatus' => $row['estatus']);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'data' => $usuarios);
		echo json_encode($json);
	}

	function borrarEvento(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$id = $_POST['id'];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "DELETE FROM eventos WHERE id = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);	
	}

	function borrarRol(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$id = $_POST['id'];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query_rp = "DELETE FROM rolxpermiso WHERE idrol = '$id'";
		$mysqli->query($query_rp);
		$query_rol = "DELETE FROM roles WHERE idrol = '$id'";
		if(!$mysqli->query($query_rol)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
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
		$calle = $_POST['calle'];
		$num_ext = $_POST['num_ext'];
		$num_int = $_POST['num_int'];
		$cruzamiento_1 = $_POST['cruzamiento_1'];
		$cruzamiento_2 = $_POST['cruzamiento_2'];
		$colonia = $_POST['colonia'];
		$telefono = $_POST['telefono'];
		$celular = $_POST['celular'];
		$ocupacion = $_POST['ocupacion'];
		$origen = $_POST['origen'];
		$seccion = $_POST['seccion'];
		$distrito = $_POST['distrito'];
		$militante = 0;
		if(isset($_POST['es_militante'])){
			$militante = 1;
		}

		$info = "";
		$success = true;
		$message = "OK";
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}

		$query = "INSERT INTO personas VALUES ('','$nombres','$apellidopat','$apellidomat','$fecha_nac',0,'$sexo','$telefono','$celular','$calle','$num_ext','$num_int','$cruzamiento_1','$cruzamiento_2','$cve_elector',NOW(),'$ocupacion','$colonia',$militante,1,'$seccion','$distrito') ON DUPLICATE KEY UPDATE nombres = '$nombres', apellidopat = '$apellidopat', apellidomat = '$apellidomat', fecha_nac = '$fecha_nac', sexo = '$sexo', telefono = '$telefono', celular = '$celular', id_ocupacion = '$ocupacion',calle = '$calle',num_ext = '$num_ext',num_int = '$num_int',cruzamiento_1 = '$cruzamiento_1', cruzamiento_2 = '$cruzamiento_2',id_colonia = '$colonia', es_militante = $militante, id_seccion = '$seccion', id_distrito = '$distrito'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "NO se pudo crear la información";
		}else{
			$info = array('id' => $mysqli->insert_id,
						  'nombres' => $nombres,
						  'apellidopat' => $apellidopat,
						  'apellidomat' => $apellidomat,
						  'cve_elector' => $cve_elector,
						  'calle' => $calle,
						  'num_int' => $num_int,
						  'num_ext' => $num_ext,
						  'cruzamiento_1' => $cruzamiento_1,
						  'cruzamiento_2' => $cruzamiento_2,
						  'id_colonia' => $colonia,
						  'origen' => $origen
						);
		}
		$json = array('success' => $success,
					  'message' => $message,
					  'info' => $info);
		echo json_encode($json);
	}

	function nva_gestion(){
		$mysqli = conexion();
		$success = true;
		$message = "OK";

		$idg = "";
		if(isset($_POST['id_gestion'])){
			$idg = $_POST['id_gestion'];
		}

		$id_solicitante = $_POST['id_solicitante'];
		$id_beneficiario = $_POST['id_beneficiario'];
		$fecha_captura = $_POST['fecha_captura'];
		$aux = explode("/", $fecha_captura);
		$fecha_captura = $aux[2]."-".$aux[1]."-".$aux[0];

		$fecha_entrega = $_POST['fecha_entrega'];
		$aux2 = explode("/", $fecha_entrega);
		$fecha_entrega = $aux2[2]."-".$aux2[1]."-".$aux2[0];
		$calle = $_POST['calle'];
		$num_ext = $_POST['num_ext'];
		$num_int = $_POST['num_int'];
		$cruzamiento_1 = $_POST['cruzamiento_1'];
		$cruzamiento_2 = $_POST['cruzamiento_2'];
		$id_colonia = $_POST['id_colonia_gestion'];
		$estatus = $_POST['estatus'];
		$cat = $_POST['categoria'];
		$subcat = $_POST['subcategoria'];
		$comentarios = trim($_POST['comentarios']);
		$id_evento = $_POST['evento'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		$seccion = $_POST['seccion'];
		$distrito = $_POST['distrito'];
		$tipo_gestion = $_POST['tipo_gestion'];

		if(isset($_POST['es_beneficiario'])){
			$id_beneficiario = $id_solicitante;
		}
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$query = "INSERT INTO gestiones VALUES ('$idg','$fecha_captura','$fecha_entrega','','$id_solicitante','$id_beneficiario','$cat','$subcat','$calle','$num_ext','$num_int','$cruzamiento_1','$cruzamiento_2','$id_colonia','$comentarios','$estatus','','$id_evento','$lat','$lng','$seccion','$distrito','$tipo_gestion') ON DUPLICATE KEY UPDATE fecha_captura = '$fecha_captura', fecha_entrega = '$fecha_entrega', idSolicitante = '$id_solicitante', idBeneficiario = '$id_beneficiario', idCategoria = '$cat', idSubCategoria = '$subcat', calle = '$calle', num_ext = '$num_ext', num_int = '$num_int', cruzamiento_1 = '$cruzamiento_1', cruzamiento_2 = '$cruzamiento_2', idColonia_entrega = '$id_colonia', detalles = '$comentarios', estatus = '$estatus', id_evento = '$id_evento', lat_entrega = '$lat', lng_entrega = '$lng', id_seccion = '$seccion', id_distrito = '$distrito'";
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

		$query = "SELECT g.*, s.nom_sol, s.clave_elec as cve_elector_s,  b.nom_benf, b.clave_elec as cve_elector_b, CONCAT(c.prefijo, ' ', c.nombre_colonia) as nom_colonia, cat.nombre as cat, sc.nombre as subcat, e.nombre_evento,scc.seccion, d.distrito from gestiones g inner join catColonias c on c.idColonia = g.idColonia_entrega inner join (SELECT idpersona, CONCAT(nombres,' ',apellidopat,' ',apellidomat)  as nom_sol, clave_elec from personas) as s on s.idpersona = g.idSolicitante inner join (SELECT idpersona, CONCAT(nombres,' ',apellidopat,' ',apellidomat)  as nom_benf, clave_elec from personas) as b on b.idpersona = g.idBeneficiario inner join categorias cat on (cat.idtipog = g.idCategoria) inner join subcat sc on (sc.idsubcat = g.idSubCategoria) inner join eventos e on e.id = g.id_evento LEFT JOIN secciones scc ON scc.id = g.id_seccion LEFT JOIN distritos d ON d.id = g.id_distrito".$filtro." group by g.idGestion";

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
							 'cve_elector_s' => $row['cve_elector_s'],
							 'idBeneficiario' => $row['idBeneficiario'],
							 'beneficiario' => $row['nom_benf'],
							 'cve_elector_b' => $row['cve_elector_b'],
							 'idCat' => $row['idCategoria'],
							 'cat' => $row['cat'],
							 'subcat' => $row['subcat'],
							 'idSubCat' => $row['idSubCategoria'],
							 'calle' => $row['calle'],
							 'num_ext' => $row['num_ext'],
							 'num_int' => $row['num_int'],
							 'cruzamiento_1' => $row['cruzamiento_1'],
							 'cruzamiento_2' => $row['cruzamiento_2'],
							 'id_col_entrega' => $row['idColonia_entrega'],
							 'colonia' => $row['nom_colonia'],
							 'detalles' => trim($row['detalles']),
							 'estatus' => $row['estatus'],
							 'comentarios' => trim($row['comentarios_extras']),
							 'idEvento' => $row['id_evento'],
							 'lat' => $row['lat_entrega'],
							 'lng' => $row['lng_entrega'],
							 'id_seccion' => $row['id_seccion'],
							 'id_distrito' => $row['id_distrito'],
							 'seccion' => $row['seccion'],
							 'distrito' => $row['distrito'],
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

		$query = "INSERT INTO categorias values ('$id','$nombre','',1) ON DUPLICATE KEY UPDATE nombre = '$nombre'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function insert_rol(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$permisos = $_POST['permisos'];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "INSERT INTO roles values ('$id','$nombre') ON DUPLICATE KEY UPDATE nomrol = '$nombre'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "No pudo ingresarse la iformacion del rol";
		}
		if($id == ""){
			$id= $mysqli->insert_id;
		}else{
			$query_delete = "DELETE FROM rolxpermiso Where idrol = '$id'";	
			$mysqli->query($query_delete);
		}

		for ($i=0; $i < count($permisos); $i++) { 
			$query_rp = "INSERT INTO rolxpermiso values ('$id','$permisos[$i]')";
			if(!$mysqli->query($query_rp)){
				$success = false;
				$message = "No pudo ingresarse la iformacion del rol";
			}
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

	function insert_ocup(){
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

		$query = "INSERT INTO ocupaciones values ('$id','$nombre') ON DUPLICATE KEY UPDATE nombre_ocupacion = '$nombre'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
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
		if(isset($_POST['password'])){
			$password = md5($_POST['password']);
		}
		$rol = $_POST['rol'];
		$user = $_SESSION["usuario"];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "INSERT INTO usuarios values ('$id','$nombre_completo', '$nombre_usuario', '$password', '$rol','1',NOW(), '$user',NOW(), '$user') ON DUPLICATE KEY UPDATE nombre_completo = '$nombre_completo', nomusuario = '$nombre_usuario', idrol = '$rol', updated_at = NOW(), updated_by = '$user'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function insert_evento(){
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

		$query = "INSERT INTO eventos values ('$id','$nombre') ON DUPLICATE KEY UPDATE nombre_evento = '$nombre'";
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

		$query = "UPDATE categorias set estatus = '$estatus' WHERE idtipog = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
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

		$query = "UPDATE usuarios set password = '$pass', updated_at = NOW(), updated_by = '$user' WHERE idusuario = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function borrar_ocupacion(){
		$mysqli = conexion();
		if(!$mysqli){
			$json = array('success' => false,
			              'mesage' => 'Error al conectar con la BD');
			echo json_encode($json);
			exit();
		}
		$id = $_POST['id'];
		$message = "Consulta realizada con éxito.";
		$success = true;

		$query = "DELETE FROM ocupaciones WHERE id = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);	
	}

	function estatus_persona(){
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

		$query = "UPDATE personas set estatus = '$estatus' WHERE idpersona = '$id'";
		if(!$mysqli->query($query)){
			$success = false;
			$message = "Ocurrio un error en la consulta, intentalo mas tarde";
		}
		$json = array('success' => $success,
					  'message' => $message);
		echo json_encode($json);
	}

	function estatusUsuario(){
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

		$query = "UPDATE usuarios set estatus = '$estatus' WHERE idusuario = '$id'";
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