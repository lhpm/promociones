<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT nrocampania, nropromocion, imagen, detalle, prioridad, fecha_ini, fecha_fin, cantidad FROM promociones WHERE id='$id'";
	
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
		
		<center><h1>Modificar Promoción</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php" id="formulario-contacto" role="form" autocomplete="off" data-toggle="validator">
			
			<table border="1" width="50%" class="table table-hover">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<tr>
					<td width=""><b># Campaña</b></td>
					<td width="50%"><input type="text" name="nrocampania" size="25" value="<?php echo $row['nrocampania']; ?>"></td>
				</tr>

				<tr>
					<td width=""><b># Promoción</b></td>
					<td width="50%"><input type="text" name="nropromocion" size="25" value="<?php echo $row['nropromocion']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Imagen</b></td>
					<td width="50%"><input type="text" name="imagen" size="25" value="<?php echo $row['imagen']; ?>" /></td>
				</tr>
				<tr>
					<td width=""><b>Detalles</b></td>
					<td width="50%">
                    <textarea name="detalle" rows="4" cols="28">
                    	<?php echo $row['detalle']; ?>
                   	</textarea>
					</td>
				</tr>
				<tr>
					<td width=""><b>Prioridad</b></td>
					<td width="50%"><input type="text" name="prioridad" size="25" value="<?php echo $row['prioridad']; ?>" />
					<small>A = ALTA | N = NORMAL</small>
					</td>
				</tr>
				<tr>
					<td width=""><b>Fecha Publicación</b></td>
					<td width="50%"><input type="date" name="fecha_ini" size="25" value="<?php echo $row['fecha_ini']; ?>" />
                    <small>Fecha Inicial del Evento</small>
					</td>
				</tr>
				<tr>
					<td width=""><b>Fecha Terminación</b></td>
					<td width="50%"><input type="date" name="fecha_fin" size="25" value="<?php echo $row['fecha_fin']; ?>" />
                    <small>Fecha Final del Evento</small>
					</td>
				</tr>
				<tr>
					<td width=""><b>Cantidad</b></td>
					<td width="50%"><input type="text" name="cantidad" size="25" value="<?php echo $row['cantidad']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
