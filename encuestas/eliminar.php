<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM encuesta WHERE id='$id'";

	$resultado=$conn->query($query);

	$query2="DELETE FROM repuestas WHERE id_pregunta='$id'";
	
	$resultado2=$conn->query($query2);
	
?>

<html>
	<head>
		<title>Eliminar Registro</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Registro Eliminado</h1>
				
				<?php

			      print'<script type="text/javascript">
                  window.location="index.php";
                  </script>';

			     }else{ ?>
				
				<h1>Error al Eliminar Registro</h1>
				
			<?php	} ?>
			
		</center>
	</body>
</html>