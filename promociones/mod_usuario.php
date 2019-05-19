<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$nrocampania=$_POST['nrocampania'];
	$nropromocion=$_POST['nropromocion'];
	$imagen=$_POST['imagen'];
	$detalle=$_POST['detalle'];
	$prioridad=$_POST['prioridad'];
	$fecha_ini=$_POST['fecha_ini'];
	$fecha_fin=$_POST['fecha_fin'];
	$cantidad=$_POST['cantidad'];
	
	$query="UPDATE promociones SET nrocampania='$nrocampania', nropromocion='$nropromocion', imagen='$imagen', detalle='$detalle', prioridad='$prioridad', fecha_ini='$fecha_ini', fecha_fin='$fecha_fin', cantidad='$cantidad' WHERE id='$id'";
	
		$resultado=$conn->query($query);

	// ENVIO DE CORREO
?>

<html>
	<head>
		<title>Modificar Usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Registro Modificado</h1>

				
				<?php 	
			      print'
                  <script type="text/javascript">
                   window.location="index.php";
                  </script>';

				}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Volver</a>
			
		</center>
	</body>
</html>