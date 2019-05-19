<?php 
	
	include('conexion.php');

	// CONTAR PARA GENERAR EL CONSECUTIVO
if ($result = $conn->query("SELECT * FROM formulario ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    $consecutivo = $row_cnt + 1;

    /* cerrar el resultset */
    $result->close();
}
	
	$nroorden=$consecutivo;
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellido'];
	$dni=$_POST['dni'];
	$residencia=$_POST['residencia'];
	$trabajas=$_POST['trabajas'];
	$estudias=$_POST['estudias'];
	$fecha_nacimiento=$_POST['fecha_nacimiento'];
	$correo=$_POST['correo'];
	$whatsapp=$_POST['whatsapp'];
	
	$query="INSERT INTO formulario (nroorden, nombres, apellidos, dni, residencia, trabajas, estudias, fecha_nacimiento, correo, whatsapp) VALUES ('$nroorden','$nombre','$apellidos','$dni','$residencia','$trabajas','$estudias','$fecha_nacimiento','$correo','$whatsapp')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar Registro</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php

				header("Location: index.php");

			}else{ ?>
				<h1>Error al Guardar Registro</h1>		
			<?php	} ?>		
			
    	</center>
	</body>
	</html>	