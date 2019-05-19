<html>
	<head>
		<title>Formulario Registros</title>
    <meta name="robots" content="noindex">
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<center><h1>Nuevo Registro</h1></center>
		
		<form action="guarda_usuario.php" method="POST" id="formulario-contacto" role="form" autocomplete="off" data-toggle="validator">
  <div class="form-row">
    <div class="form-group col-md-3">
    <label for="nombre">Nombres</label>
    <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Escribir Nombre" required="true">
    <span id="error" class="help-block"></span>
  </div>
  <div class="form-group col-md-3">
    <label for="apellido">Apellidos</label>
    <input type="text" name="apellido" class="form-control" id="apellido" aria-describedby="apellidoHelp" placeholder="Escribir Apellido" required="true">
  </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-3">
    <label for="email">Correo Electrónico</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Escribir Email" required="true">
    <small id="emailHelp" class="form-text text-muted">Su Email servirá como medio de comunicación hacia usted.</small>
  </div>
  <div class="form-group col-md-3">
    <label for="telefono">No de Teléfono</label>
    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Escribir Teléfono" required="true">
  </div>
  </div>
 <div class="form-row">
 <div class="form-group col-md-3">
     <label for="conocimientos">Conocimientos en PNL</label>
      <select id="conocimientos" class="form-control" name="conocimientos">
        <option selected>Elegir...</option>
        <option value="SI">SI</option>
        <option value="NO">NO</option>
      </select>
  </div>
  <div class="form-group col-md-3">
    <label for="certificaciones">Certificaciones</label>
    <input type="text" name="certificaciones" class="form-control" id="certificaciones" placeholder="Certificaciones" required="true">
  </div>
  </div>
  <button type="submit" class="btn btn-primary"">Enviar</button>
</form>
	</body>
</html>						