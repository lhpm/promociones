<?php 
	
	require('conexion.php');
	// Damos nombre a la imagen
    $ruta = "img/" . $_FILES['imagen']['name'];
    //comprobamos si este archivo existe para no volverlo a copiar.
	@move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
	$nrocampania = $_POST['nrocampania'];
	$nropromocion = $_POST['nropromocion'];
	$imagen = $ruta;
	$detalle = $_POST['detalle'];
	$prioridad = $_POST['prioridad'];
	$fecha_ini = $_POST['fecha_ini'];
	$fecha_fin = $_POST['fecha_fin'];
	$cantidad = $_POST['cantidad'];
	
	$query="INSERT INTO promociones (nrocampania, nropromocion, imagen, detalle, prioridad, fecha_ini, fecha_fin, cantidad) VALUES ('$nrocampania','$nropromocion','$imagen','$detalle','$prioridad','$fecha_ini','$fecha_fin','$cantidad')";
	
	$resultado=$conn->query($query);
	
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