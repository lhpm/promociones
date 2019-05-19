<html>
	<head>
		<title>Nueva Encuesta</title>
    <meta name="robots" content="noindex">
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>

	</head>
	<body>
		
		<center><h1>Nuevo Encuesta</h1></center>
		
		<form action="guarda_encuesta.php" method="post" id="formulario-contacto" role="form" autocomplete="off" data-toggle="validator">
  <div class="form-row">
    <div class="form-group col-md-3">
      <?php
        include('conexion.php');
        // Total filas
        $result = $conn->query("SELECT * FROM encuesta");
        $row_cnt = $result->num_rows;
        $tencuesta = $row_cnt + 1;
      ?>
    <h2>Encuesta: # <?php echo $tencuesta ?></h2>
    <input type="hidden" name="nroencuesta" class="form-control" id="nroencuesta" aria-describedby="nroencuestaHelp" placeholder="# Encuesta" value="<?php echo $tencuesta ?>" readonly>
  </div>
  <div class="form-group col-md-3">
    <label for="pregunta"><h2>Pregunta</h2></label>
    <input type="text" name="pregunta" class="form-control" id="pregunta" style="width:600px;" placeholder="Pregunta" required="true">
    <br /><br />
    <label for="cliente">Cliente</label>
    <input type="cliente" name="cliente" class="form-control" id="cliente" aria-describedby="emailHelp" placeholder="Cliente" required="true">
    <br /><br />
    <label for="prioridad">Prioridad</label>
      <select id="prioridad" class="form-control" name="prioridad">
        <option selected>Elegir...</option>
        <option value="A">ALTA</option>
        <option value="N">NORMAL</option>
      </select>
    <br /><br />
    <label for="encuesta">Encuesta</label>
    <input type="text" name="encuesta" class="form-control" id="encuesta" placeholder="# de Encuesta" required="true">
    <button type="submit" class="btn btn-primary"">Guardar</button>
  </div>
 </div>

  </div>

</form>
	</body>
</html>						