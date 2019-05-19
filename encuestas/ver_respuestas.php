<?php

    include("conexion.php");
	
	$id=$_GET['id'];

	$query="SELECT pregunta FROM encuesta WHERE id='$id'";
	
	$resultado=$conn->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Ver Respuestas</title>
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
	    <h3><a href="index.php">Retornar</a></h3>
		<center>
		<h1><?php echo $row['pregunta']; ?></h1>
	    </center>
		<h2>Respuestas</h2>
		<table border="1" width="50%" class="table table-hover">
		  <thead>
			<th># Encuesta</th>
			<th>Respuesta</th>
			<th>Correcta</th>
		  </thead>
		  <tbody class='buscar'>
<?php

	$query=mysqli_query($conn,"SELECT count(id) FROM repuestas ORDER BY id DESC");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];
	
	$page_rows = 4;

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
	
	$nquery=mysqli_query($conn,"SELECT * FROM `repuestas` WHERE id_pregunta='$id' ");

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
			while($crow = mysqli_fetch_array($nquery)){
			?>
				<tr>
					<td width=""><h3><?php echo $crow['nroencuesta']; ?></h3>

					<td width=""><h3><?php echo $crow['respuesta']; ?></h3>

					<td width=""><h3><?php echo $crow['elegida']; ?></h3>
				</tr>
			<?php
			}		
		?>
		</tbody>
			</table>
	</body>
	</html>