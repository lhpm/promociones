<?php
header('Content-Type: text/html; charset=UTF-8');
include("../menusesion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Avanzar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>


</style>
</head>
<body>
<center>
<div class="container">
<?php if (@$_SESSION['correo'] ==""){

print '
  <h1>AREA RESTRINGIDA</h1>
';
header ("Location: ../");
}
else{
print '
    <div class="row">
      <div class="col" style="background-color:white;"><span style="color:green"><h1 class="display-4">1</h1></span></div>
      <div class="col" style="background-color:white;"><span style="color:green;"><h1 class="display-4">2</h1></span></div>
      <div class="col" style="background-color:white;"><span style="color:orange;"><h1 class="display-4">3</h1></span></div>
      <div class="col" style="background-color:white;"><span style="color:grey;"><h1 class="display-4">4</h1></span></div>
    </div>
';
print '
  <h1>¡ YA CASI TERMINAS !</h1>
  <h2>Gracias por participar, haz click en Avanzar para poderte enviar tu Bonificación...</h2>
  <a href="../bonificacion" class="btn btn-primary">Avanzar</a>
';

}
?>
</center>

</body>
</html>