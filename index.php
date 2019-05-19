<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<title>Promociones</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
    .card-img-top{
        /* Aumentamos la anchura y altura durante 2 segundos */
        transition: width 2s, height 2s, transform 2s;
        -moz-transition: width 2s, height 2s, -moz-transform 2s;
        -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
        -o-transition: width 2s, height 2s,-o-transform 2s;
    }
    .card-img-top:hover{
        /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
        transform : scale(2);
        -moz-transform : scale(2);      /* Firefox */
        -webkit-transform : scale(2);   /* Chrome - Safari */
        -o-transform : scale(2);        /* Opera */
        z-index: 1000;
    }
</style>
	</head>
	<body>
		<center>
		<h1>PROMOCIONES</h1>
	    </center>
<?php

    include("promociones/conexion.php");

	$query=mysqli_query($conn,"SELECT count(id) FROM promociones");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];
	
	$page_rows = 20;

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) { 
		$pagenum = 1; 
	} 
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	$nquery=mysqli_query($conn,"SELECT * FROM `promociones` ORDER BY id DESC");

	$paginationCtrls = '';

	if($last != 1){
		
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Anterior</a> &nbsp; &nbsp; ';
		
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}

    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">Siguiente</a> ';
    }
	}
	print '<center>';
    print '<table width="50%" border="0">';
    //inciamos la variable columna a 1
    $columna=1;
	print '<div class="card-deck">';
			while($crow = mysqli_fetch_array($nquery)){
			if ($columna==1) echo "<tr>"; //se abre la primera fila
			?>
			<td>
            <div class="card">
              <img class="card-img-top" src="promociones/<?php echo $crow['imagen']; ?>" alt="Promoción">
              <div class="card-body">
                <!--<h5 class="card-title">Promoción</h5>-->
                <p class="card-text"><?php echo $crow['detalle']; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo date("d/m/Y",strtotime($crow['fecha_ini'])); ?></small> al <small class="text-muted"><?php echo date("d/m/Y",strtotime($crow['fecha_fin'])); ?></small></p>
                <?php

                if (@$_SESSION['correo'] == ""){

                print '<a href="formulario.html" type="link" class="btn btn-danger btn-lg btn-block">Adquirir</a>';
                }
                else{
                print '<a href="ver_encuesta.php" type="link" class="btn btn-danger btn-lg btn-block">Adquirir</a>';
                }
                ?>
              </div>
            </div>
          </td>

			<?php
			if ($columna!=1) 
             {
             echo "</tr>"; // la fila solo se cierra despues de la segunda columna
             $columna=1; 
             }
             else
             {
             $columna++; //incrementamos el valor en uno, ahora columna = 2
             }
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