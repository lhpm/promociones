<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$nroencuesta=$_POST['nroencuesta'];
	$pregunta=$_POST['pregunta'];
	$cliente=$_POST['cliente'];
	$prioridad=$_POST['prioridad'];
	$encuesta=$_POST['encuesta'];
	
	$query="UPDATE encuesta SET nroencuesta='$nroencuesta', pregunta='$pregunta', cliente='$cliente', prioridad='$prioridad', encuesta='$encuesta' WHERE id='$id'";
	
		$resultado=$conn->query($query);

	// ENVIO DE CORREO
?>

<html>
	<head>
		<title>Modificar Encuesta</title>
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