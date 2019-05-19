<?php 
	
	require('conexion.php');
	
	$nroencuesta=$_POST['nroencuesta'];
	$pregunta=$_POST['pregunta'];
	$cliente=$_POST['cliente'];
	$prioridad=$_POST['prioridad'];
	$encuesta=$_POST['encuesta'];

	$query = "INSERT INTO encuesta (nroencuesta, pregunta, cliente, prioridad, encuesta) VALUES ('$nroencuesta','$pregunta','$cliente','$prioridad','$encuesta');";

	$resultado=$conn->query($query);
	
?>

<html>
	<head>
		<title>Guardar Registro</title>
	</head>
	<body>
		<center>
			
			<?php if($resultado>0){ ?>
				<h1>Encuesta guardada</h1>
				<?php
			      print'
                  <script type="text/javascript">
                   window.location="index.php";
                  </script>';

			}else{ ?>
				<h1>Error al Guardar Registro</h1>		
			<?php	} ?>		
			
    	</center>
	</body>
	</html>	