<?php 
header('Content-Type: text/html; charset=UTF-8');
include("menusesion.php");
?>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="sesion.php" method="post" role="form" id="formulario-contacto" name="formulario-contacto">
       <div class="form-group row">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo" required="true">
      </div>

  <button type="submit" class="btn btn-success btn-lg btn-block">Iniciar</button>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        ¡¡¡Promociones!!!
      </div>

    </div>
  </div>
</div>
<!doctype html>
<html lang="en">
	<head>
		<title>Realiza la Encuesta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<center>
    <div class="row">
      <div class="col" style="background-color:white;"><span style="color:orange"><h1 class="display-4">1</h1></span></div>
      <div class="col" style="background-color:white;"><span style="color:grey;"><h1 class="display-4">2</h1></span></div>
      <div class="col" style="background-color:white;"><span style="color:grey;"><h1 class="display-4">3</h1></span></div>
      <div class="col" style="background-color:white;"><span style="color:grey;"><h1 class="display-4">4</h1></span></div>
    </div>
	 </center>
<?php

    include("encuestas/conexion.php");

    
// ELEGIR AL AZAR
if ($result = $conn->query("SELECT * FROM encuesta ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    //printf("Total filas.\n", $row_cnt);

    /* cerrar el resultset */
    $result->close();
}

$rand = mt_rand(1,$row_cnt); 
//echo $rand;
$azar=$rand;
// FIN ELEGIR AL AZAR

	// IMPRIME RESPUESTAS
  $nquery=mysqli_query($conn,"SELECT * FROM encuesta INNER JOIN repuestas 
  ON repuestas.nroencuesta = encuesta.nroencuesta WHERE repuestas.nroencuesta = '".$azar."' AND encuesta.nroencuesta = '".$azar."'");

  // IMPRIME PREGUNTA
  $preguntaquery = mysqli_query($conn,"SELECT * FROM encuesta WHERE nroencuesta = '".$azar."' ");
  $preguntarow = mysqli_fetch_array($preguntaquery);

	print '<center>';
  print '<h2>';
  echo $preguntarow['pregunta'];
  // Almaceno la pregunta en sesión
  $_SESSION['pregunta'] = $preguntarow['pregunta'];
  print '</h2>';

  print '<table width="50%" border="0">';
    //inciamos la variable columna a 1
	print '<div class="card-deck">';
			while($crow = mysqli_fetch_array($nquery)){
			?>
  <form id="resultado" name="resultado" action="guarda_resultados.php" method="POST">
			<tr><td>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><?php echo $crow['respuesta']; ?></h4>
                <!--<p class="card-text"><?php echo $crow['nroencuesta']; ?></p>-->
                <br />
                <div class="text">
                  <label><input type="hidden" name="respuesta" value="<?php echo $crow['respuesta']; ?>"></label>
                </div>
                <button type="submit" class="btn btn-primary">Elegir</button>
                <!--<p class="card-text"><small class="text-muted">Fecha: <?php echo date("d/m/Y"); ?></small></p>-->

              </div>
            </div>
          </td></tr>
          </form>

			<?php
			} //Fin del Bucle	
		?>
		</div>
</tr>
</table>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	</html>