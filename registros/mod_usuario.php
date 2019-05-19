<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$nroorden=$_POST['nroorden'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$dni=$_POST['dni'];
	$residencia=$_POST['residencia'];
	$trabajas=$_POST['trabajas'];
	$fecha_nacimiento=$_POST['fecha_nacimiento'];
	$correo=$_POST['correo'];
	$whatsapp=$_POST['whatsapp'];
	
	$query="UPDATE formulario SET nroorden='$nroorden', nombres='$nombres', apellidos='$apellidos', dni='$dni', residencia='$residencia', trabajas='$trabajas', fecha_nacimiento='$fecha_nacimiento', correo='$correo', whatsapp='$whatsapp' WHERE id='$id'";
	
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