<?php 
	session_start();
	include('encuestas/conexion.php');
	
	$usuario=$_SESSION['correo'];
	$pregunta=$_SESSION['pregunta'];
	$respuesta=$_POST['respuesta'];


  // COMPROBAR RESPUESTA
  $correcta = mysqli_query($conn,"SELECT * FROM repuestas WHERE respuesta = '".$respuesta."' ");
  $seleccionada = mysqli_fetch_array($correcta);

if($seleccionada['elegida'] == "OK"){

	$resultado = "OK";
}
else{

	$resultado = "FALLO";
}

	$query = "INSERT INTO resultados (usuario, pregunta, respuesta, resultado) VALUES ('$usuario','$pregunta','$respuesta','$resultado');";
	$resultado=$conn->query($query);

	
?>

<html>
	<head>
		<title>Respuesta Almacenada</title>
	</head>
	<body>
		<center>
			
			<?php if($resultado>0){ ?>
				<h1>Encuesta guardada</h1>
				<?php
			      print'
                  <script type="text/javascript">
                   window.location="2e/";
                  </script>';

			}else{ ?>
				<h1>Error al Guardar Registro</h1>		
			<?php	} ?>		
			
    	</center>
	</body>
	</html>	