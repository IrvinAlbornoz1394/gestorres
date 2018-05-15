<?php
set_time_limit(300);
date_default_timezone_set("America/Mexico_City");
// require_once 'lib/db.php';
require_once 'Spout/Autoloader/autoload.php';
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

// $id_cabecera = $_GET['id_cabecera'];
$reader = ReaderFactory::create(Type::XLSX);
$reader->open("bd.xlsx");
// $db = new DB();
// $db->beginTransaction();

$mysqli = conexion();
if(!$mysqli){
	$json = array('success' => false,
	              'mesage' => 'Error al conectar con la BD');
	echo json_encode($json);
	exit();
}

echo "<table>";

// foreach ($reader->getSheetIterator() as $sheet) {
// 	$count = 0;
// 	$seccion = "";
// 	$casilla = "";
// 	$insert = true;
//     foreach ($sheet->getRowIterator() as $row){
//         if($count >= 1){
//         	if($row[0] == "")
//         		break;
//         	echo "<tr>";
//         	if($seccion != $row[6]){
//         		$seccion = $row[6];
//     //     		$query_seccion = "INSERT INTO secciones values('','"
//     //     		.$row[6]."','','');";
//     //     		if(!$mysqli->query($query_seccion)){
//     //     			$seccion = "Error";
// 				// }else{
// 				// 	$seccion = $mysqli->insert_id;
// 				// }
// 				echo "<td>".$seccion."</td>";
// 				$query_seccion = "INSERT INTO secciones values('','".$row[6]."','','')";
// 				if(!$mysqli->query($query_seccion)){
//         			$m_seccion = "ERROR";
// 				}else{
// 					$id_seccion = $mysqli->insert_id;
					
// 					$m_seccion = "OK";
// 				}
//         	}else{
//         		echo "<td></td>";
//         		$query_seccion = "";
//         		$m_seccion = "";
//         	}



//         	if($casilla != $row[7]){
//         		$casilla = $row[7];
//         		$nombre_casilla = $row[7]." SECCION ".$row[6];

//         		$query_casilla = "INSERT INTO casillas values('','".$nombre_casilla."','".$id_seccion."','')";
//         		if(!$mysqli->query($query_casilla)){
//         			$m_casilla = "ERROR";
// 				}else{
					
// 					$m_casilla = "OK";
// 				}

// 				echo "<td>".$m_seccion."</td>";
//         		echo "<td>".$nombre_casilla."</td>";
//         		echo "<td>".$m_casilla."</td></tr>";


//     //     		$query = "INSERT INTO secciones values ('','$seccion','','')";
//     //     		$result = $mysqli->query($query);

// 				// if(!$result){
// 				// 	$success = false;
// 				// 	$message = "No se encontraron resultados de usuarios";
// 				// 	exit();
// 				// }
// 				// $id_seccion = $mysqli->insert_id;

//         	}

//         	// $casilla = $row[]


//         	// $idEmpleado = infoEmpleado($row,$db);
//     //     	if(!$idEmpleado){
//     //     		$primerap = $row[0];
// 				// $segundoap = $row[1];
// 				// $nombres = $row[2];
// 				// $no_empleado = $row[6];
// 				// echo nl2br("Error al crear el empleado '".$row[2]." ".$row[0]." ".$row[1]."'  noEmpleado ".$row[6]."\r\n");
//     //     		continue;
//     //     	}
//         	// echo nl2br("Empleaado ".$idEmpleado." Creado\r\n");   
  
//         	// $dir = dir_empleados($row,$db,$idEmpleado);
//         	// if(!$dir){
//         	// 	$db->rollBack();
//         	// 	echo nl2br("Error al crear dirección del empleado".$idEmpleado."\r\n");
//         	// 	exit();
//         	// }
//         	// echo nl2br("Direccion creada para el empleado ".$idEmpleado."\r\n");    	
//         }
//         $count++;
//     }
// }
$reader->close();
// $db->commit();
// echo "Informacion cargada correctamente";

$query = "SELECT * from casillas";
$result = $mysqli->query($query);
if(!$result){
	$success = false;
	$message = "No se encontraron resultados";
}

while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$row[1]."</td>";
	echo "</tr>";
}
echo "</table>";



function conexion(){
		//$mysqli = new mysqli("localhost", "boonwaya_oliver", "B00NWAYAK09*", "boonwaya_oliverDB");
		$mysqli = new mysqli("localhost", "root", "", "votaciones");
		// mysqli_query("SET NAMES 'utf8'");
		/* check connection */
		if (!$mysqli->connect_errno) {
			return $mysqli;
		}

	}


?>