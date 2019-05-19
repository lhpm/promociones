<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT nroorden, nombres, apellidos, dni, residencia, trabajas, estudias, fecha_nacimiento, correo, whatsapp FROM formulario WHERE id='$id'";
	
	$resultado=$conn->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<meta name="robots" content="noindex">
				<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
	</head>
	<body>
		
		<center><h1>Modificar Usuario</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php" id="formulario-contacto" role="form" autocomplete="off" data-toggle="validator">
			
			<table border="1" width="50%" class="table table-hover">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<tr>
					<td width=""><b>Orden #</b></td>
					<td width="50%"><input type="text" name="nroorden" size="25" value="<?php echo $row['nroorden']; ?>" readonly></td>
				</tr>

				<tr>
					<td width=""><b>Nombres</b></td>
					<td width="50%"><input type="text" name="nombres" size="25" value="<?php echo $row['nombres']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Apellidos</b></td>
					<td width="50%"><input type="text" name="apellidos" size="25" value="<?php echo $row['apellidos']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>DNI</b></td>
					<td width="50%"><input type="text" name="dni" size="25" value="<?php echo $row['dni']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Residencia</b></td>
					<td width="50%"><input type="text" name="residencia" size="25" value="<?php echo $row['residencia']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Trabajas</b></td>
					<td width="50%"><input type="text" name="trabajas" size="25" value="<?php echo $row['trabajas']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Estudias</b></td>
					<td width="50%"><input type="text" name="estudias" size="25" value="<?php echo $row['estudias']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Fecha Nacimiento</b></td>
					<td width="50%"><input type="text" name="fecha_nacimiento" size="25" value="<?php echo $row['fecha_nacimiento']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Correo</b></td>
					<td width="50%"><input type="text" name="correo" size="25" value="<?php echo $row['correo']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Whatsapp</b></td>
					<td width="50%"><input type="text" name="whatsapp" size="25" value="<?php echo $row['whatsapp']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
