<html>
	<head>
		<title>Nueva Campaña</title>
    <meta name="robots" content="noindex">
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		
	<center><h1>Nueva Promoción</h1></center>
		
	<form action="guarda_promociones.php" method="post" id="formulario-contacto" role="form" data-toggle="validator" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-3">
    <label for="nrocampania"># Campaña</label>
    <input type="text" name="nrocampania" class="form-control" id="nrocampania" aria-describedby="nrocampaniaHelp" placeholder="Escribir Campaña" required="true">
    <span id="error" class="help-block"></span>
  </div>
  <div class="form-group col-md-3">
    <label for="nropromocion"># Promoción</label>
    <input type="text" name="nropromocion" class="form-control" id="nropromocion" aria-describedby="nropromocionHelp" placeholder="Escribir Promoción" required="true">
  </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-3">
    <label for="imagen">Imagen</label><br />
    <small>¡Recuerde que las imágenes de todas las Campañas deben ser todas del mismo alto y ancho!</small>
    <input type="file" name="imagen" class="form-control" id="imagen"required="true" multiple>
  </div>
  <div class="form-group col-md-3">
    <label for="detalle">Detalle</label>
    <input type="text" name="detalle" class="form-control" id="detalle" placeholder="Escribir Detalle" required="true">
  </div>
 <div class="form-group col-md-3">
     <label for="prioridad">Prioridad</label>
      <select id="prioridad" class="form-control" name="prioridad">
        <option selected>Elegir...</option>
        <option value="A">ALTA</option>
        <option value="N">NORMAL</option>
      </select>
  </div>
  </div>
 <div class="form-row">
  <div class="form-group col-md-3">
    <label for="fecha_ini">Fecha Publicación</label>
    <input type="date" name="fecha_ini" class="form-control" id="fecha_ini" placeholder="Fecha Incial" required="true">
  </div>
  <div class="form-group col-md-3">
    <label for="fecha_fin">Fecha Terminación</label>
    <input type="date" name="fecha_fin" class="form-control" id="fecha_fin" placeholder="Fecha Final" required="true">
  </div>
  <div class="form-group col-md-3">
    <label for="cantidad">Cantidad</label>
    <input type="text" name="cantidad" class="form-control" id="cantidad" placeholder="Escribir Cantidad" required="true">
  </div>
  </div>
  <button type="submit" class="btn btn-primary"">Enviar</button>
</form>
	</body>
</html>						