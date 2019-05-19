<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT nroencuesta, pregunta, respuesta, cliente, prioridad, encuesta FROM encuesta WHERE id='$id'";
	
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
		
		<center><h1>Modificar Encuesta</h1></center>
		
		<form name="modificar_encuesta" method="POST" action="mod_encuesta.php" id="formulario-contacto" role="form" autocomplete="off" data-toggle="validator">
			
			<table border="1" width="50%" class="table table-hover">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<tr>
					<td width=""><b># Encuesta</b></td>
					<td width="50%"><input type="text" name="nroencuesta" size="25" value="<?php echo $row['nroencuesta']; ?>" readonly></td>
				</tr>

				<tr>
					<td width=""><b>Pregunta</b></td>
					<td width="50%"><input type="text" name="pregunta" size="25" value="<?php echo $row['pregunta']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Cliente</b></td>
					<td width="50%"><input type="text" name="cliente" size="25" value="<?php echo $row['cliente']; ?>" /></td>
				</tr>
				<tr>
					<td width="">Prioridad</td>
					<td width="50%">
                       <label for="prioridad">Prioridad: <b><?php echo $row['prioridad']; ?></b></label>
                        <select id="prioridad" class="form-control" name="prioridad">
                          <option selected>Elegir...</option>
                          <option value="A">ALTA</option>
                          <option value="N">NORMAL</option>
                        </select>
					</td>
				</tr>
				<tr>
					<td width=""><b>Encuesta</b></td>
					<td width="50%"><input type="text" name="encuesta" size="25" value="<?php echo $row['encuesta']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
