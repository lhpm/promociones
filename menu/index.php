<?php 
session_start();
if (@$_SESSION['usuario'] ==""){
  echo "No ha iniciado sesión";
  print '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Iniciar Sesión
    </button>';
}
else{
print '<a href="cerrarsesion.php" class="btn btn-danger">
        Cerrarr Sesión
       </a>';
}
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
        <label for="usuario">Usuario</label>
        <input type="email" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="true">
      </div>

  <button type="submit" class="btn btn-success btn-lg btn-block">Iniciar</button>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        Area restringida
      </div>

    </div>
  </div>
</div>
<!doctype html>
<html lang="en">
	<head>
		<title>PANEL GESTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<center>

      <div class="card-deck">

        <div class="card">
              <img class="card-img-top" src="img/encuestas.jpg" alt="Encuesta">
              <div class="card-body">
                <h5 class="card-title">ENCUESTAS</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                <?php

                if (@$_SESSION['logueado'] == ""){

                print '<a href="#" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                else{
                print '<a href="../encuestas" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                ?>
              </div>
            </div>

        <div class="card">
              <img class="card-img-top" src="img/promociones.jpg" alt="Encuesta">
              <div class="card-body">
                <h5 class="card-title">PROMOCIONES</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                <?php

                if (@$_SESSION['logueado'] == ""){

                print '<a href="#" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                else{
                print '<a href="../promociones" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                ?>
              </div>
            </div>

        <div class="card">
              <img class="card-img-top" src="img/registros.jpg" alt="Encuesta">
              <div class="card-body">
                <h5 class="card-title">REGISTROS</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                <?php

                if (@$_SESSION['logueado'] == ""){

                print '<a href="#" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                else{
                print '<a href="../registros" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                ?>
              </div>
            </div>


        <div class="card">
              <img class="card-img-top" src="img/resultados.jpg" alt="Encuesta">
              <div class="card-body">
                <h5 class="card-title">RESULTADOS</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                <?php

                if (@$_SESSION['logueado'] == ""){

                print '<a href="#" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                else{
                print '<a href="../resultados" type="link" class="btn btn-primary btn-lg btn-block">Entrar</a>';
                }
                ?>
              </div>
            </div>
      </div>

   </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	</html>