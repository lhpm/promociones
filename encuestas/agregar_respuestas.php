<html>
	<head>
		<title>Agregar Respuestas</title>
    <meta name="robots" content="noindex">
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>

	</head>
	<body>
		
		<center><h1>Respuestas</h1></center>
		
		<form action="guarda_respuestas.php" method="post" id="formulario-contacto" role="form" autocomplete="off" data-toggle="validator">
  <div class="form-row">
    <div class="form-group col-md-3">
      <?php
        include('conexion.php');
        $nroencuesta=$_GET['nroencuesta'];
      ?>
    <label for="nroencuesta"><h2># Encuesta: <?php echo $nroencuesta ?></h2></label>
    <input type="hidden" name="nroencuesta" class="form-control" id="nroencuesta" placeholder="# Encuesta" value="<?php echo $nroencuesta ?>" readonly>
  </div>
  <div class="form-group col-md-3">
    <label for="pregunta">Pregunta</label>
    <input type="hidden" name="id_pregunta" value="<?php echo $_GET['id'] ?>" class="form-control" id="id_pregunta" placeholder="Pregunta" readonly>
    <h2><?php echo $_GET['pregunta'] ?></h2>
    <small>Verificar la respuesta correcta</small>
    <select id="prioridad" class="form-control" name="correcta">
      <option selected>Elegir...</option>
      <option value="0">1</option>
      <option value="1">2</option>
      <option value="2">3</option>
      <option value="3">4</option>
    </select>
    <br />
    <small>Respuesta 1</small> 
    <input type="text" name="respuesta[]" placeholder="Opción1" required="true" class="form-control" style="width:600px;"><br />
    <small>Respuesta 2</small>
    <input type="text" name="respuesta[]" placeholder="Opción2" required="true" class="form-control" style="width:600px;"><br />
    <small>Respuesta 3</small>
    <input type="text" name="respuesta[]" placeholder="Opción3" required="true" class="form-control" style="width:600px;"><br />
    <small>Respuesta 4</small>
    <input type="text" name="respuesta[]" placeholder="Opción4" required="true" class="form-control" style="width:600px;"><br />
  </div>
 </div>

 <div class="form-row">
  <div class="form-group col-md-3">
    <input type="hidden" name="encuesta" class="form-control" id="encuesta" value="<?php echo $_GET['nroencuesta'] ?>" readonly>
  </div>
  </div>
  <button type="submit" class="btn btn-primary"">Guardar</button>
</form>
	</body>
</html>						