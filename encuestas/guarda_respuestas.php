<?php 
	
	require('conexion.php');
	
	$nroencuesta=$_POST['nroencuesta'];
	$semana=$_POST['encuesta'];
	$respuestas=$_POST['respuesta'];
	$correcta=$_POST['correcta'];
	$id_pregunta=$_POST['id_pregunta'];

	for ($i=0; $i<count($respuestas); $i++) {

		if ($i == $correcta){

			$elegida = "OK";
		}
		else{
			$elegida = "FALSA";
		}
	
	$query = "INSERT INTO repuestas (nroencuesta, respuesta, semana, elegida, id_pregunta) VALUES ('$nroencuesta','$respuestas[$i]','$semana','$elegida','$id_pregunta');";

	$resultado=$conn->query($query);
    }
	
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
			<?php

			echo $nroencuesta;

			print "<br />";

			echo $id_pregunta;

			print "<br />";

			echo $semana;

			print "<br />";

			echo $correcta;

			print "<br />";

			echo $respuestas[1];

			print "<br />";

			echo $elegida;

		} ?>		
			
    	</center>
	</body>
	</html>	