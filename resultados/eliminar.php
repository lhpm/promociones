<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM resultados WHERE id='$id'";
	
	$resultado=$conn->query($query);
	
?>

<html>
	<head>
		<title>Resultados</title>
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