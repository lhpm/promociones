<?php 
include('pagination.php'); 

session_start();
if (@$_SESSION['logueado'] == ""){
	header ("Location: ../menu/index.php");
}
else{
print '<a href="../menu/" class="btn btn-success">
        Menu Principal
       </a>';
echo @$_SESSION['correo'];
print '<a href="../menu/cerrarsesion.php" class="btn btn-danger">
        Cerrarr Sesión
       </a>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
<style>
#vista th{
	vertical-align:middle;
}
</style>
<script>
$(document).ready(function(){
$('[data‐toggle="tooltip"]').tooltip();
});
</script>
      <script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
      </script>
</head>
<body>
<div class="container">
	<div style="height: 20px;"></div>
	<div class="row">
	<h2 class='text-center text-success'>Formularios Registrados</h2>
	<div class="col-lg-2">
		
	</div>
	<div class="col-lg-12">
	    <!--<a href="nuevo.php">Nuevo usuario</a>-->
		<p></p>
		<div class="input-group"> <span class="input-group-addon">Filtrar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Filtrar por campo">
        </div>
	<table id="vista" width="100%" class="table table-striped table-bordered table-hover">
		<thead>
			<th>ID</th>
			<th>Orden #</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>DNI</th>
			<th>Residencia</th>
			<th>Trabajas</th>
			<th>Estudias</th>
			<th>Fecha Nacimiento</th>
			<th>Correo</th>
			<th>Whatsapp</th>
			<th>Registro</th>
			<th><span style="vertical-align:middle;" class="glyphicon glyphicon-pencil"></th>
			<th><span style="vertical-align:middle;" class="glyphicon glyphicon-remove"></th>
		</thead>
		<tbody class='buscar'>
		<?php
			while($crow = mysqli_fetch_array($nquery)){
			?>
				<tr>
					<td><?php echo $crow['id']; ?></td>
					<td><?php echo $crow['nroorden']; ?></td>
					<td><?php echo $crow['nombres']; ?></td>
					<td><?php echo $crow['apellidos']; ?></td>
					<td><?php echo $crow['dni']; ?></td>
					<td><?php echo $crow['residencia']; ?></td>
					<td><?php echo $crow['trabajas']; ?></td>
					<td><?php echo $crow['estudias']; ?></td>
					<td><?php echo $crow['fecha_nacimiento']; ?></td>
					<td><?php echo $crow['correo']; ?></td>
					<td><?php echo $crow['whatsapp']; ?></td>
					<td><?php echo $crow['created_at']; ?></td>
					<td style="vertical-align:middle;">
					<a href="modificar.php?id=<?php echo $crow['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a>
					</td>
					<td style="vertical-align:middle;">
					<a href="eliminar.php?id=<?php echo $crow['id'];?>"><span class="glyphicon glyphicon-remove"></span></a>
					</td>
				</tr>
			<?php
			}		
		?>
		</tbody>
	</table>
	<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
	</div>
	<div class="col-lg-2">
	</div>
	</div>
</div>
</body>
</html>