  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">

<?php

// Create connection
//$conexion = new mysqli("localhost", "root", "", "mastro");
$conexion = new mysqli("localhost", "luipat7_dg", "Sistemas2018", "luipat7_dg");
//include("registros/conexion.php");
// Check connection
if (!$conexion) {
      die("Conexión falló: " . mysqli_connect_error());
}

$correo = $_POST["correo"];

$consulta = "SELECT * FROM formulario WHERE correo = '".$correo."'";
$resultado = $conexion -> query($consulta);

// Compruebo si se genera fila existiendo el usuario
$usuario = mysqli_num_rows($resultado);


// Consulta la BD el dato correo
$crow = mysqli_fetch_array($resultado);

     if ( $crow["correo"] == $correo ){
      session_start();
     	print '<div class="alert alert-warning" role="alert">
        ¡Ya hay un Usuario con este Correo <b>'.$correo.'</b> por favor, <br />
        '.$_SESSION['correo'] = $correo.'
        </div>';
      header ("Location: index.php");
     }
     else{

if (!$_POST["nombres"] == ""){

echo "OK";

// Total filas
$conexion->query("SELECT id from formulario");
$total_filas = $conexion->affected_rows;

$nroorden = $total_filas + 1; 
//rand(0,9999); //rand(mínimo y el máximo);

$nombres = $_POST['nombres'];

$apellidos = $_POST['apellidos'];

$dni = $_POST['dni'];

$residencia = $_POST['residencia'];

$trabajas = @$_POST['trabajas'];
if ($trabajas == "on"){
  $trabajas = "SI";
}else
{
  $trabajas = "NO";
}

$estudias = @$_POST['estudias'];
if ($estudias == "on"){
  $estudias = "SI";
}else
{
  $estudias = "NO";
}

$fecha_nacimiento = $_POST['fecha_nacimiento'];

$correo = $_POST['correo'];

$whatsapp = $_POST['whatsapp'];

$sql = "INSERT INTO formulario (nroorden, nombres, apellidos, dni, residencia, trabajas, estudias, fecha_nacimiento, correo, whatsapp) VALUES ('$nroorden', '$nombres', '$apellidos', '$dni', '$residencia', '$trabajas', '$estudias', '$fecha_nacimiento', '$correo', '$whatsapp')";
if (mysqli_query($conexion, $sql)) {
        print '<div style="background-color:white;display:inline-block;text-align:center;width:100%;height:auto;">
         <img src="img/icono_verificacion.png" width="100px" height="100px">
         <br /><br />
         <p style="font-size:24px;color:grey;">
         ¡Tus datos han sido recibidos<br>
         Muchas gracias!
          <script type="text/javascript">
            window.location="index.php";
          </script>
         </p>
        </div>';

// CORREO PARA EL REGISTRADO

$mail = "<img src='img/logo.jpg'><br />
Usted se ha registrado satisfactoriamente.<br />
¡GRACIAS POR SU ATENCION!
";
//Titulo
$titulo = "¡REGISTRO!: REGISTRO COMPLETO PARA PROMOCIONES";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: PROMOCIONES < robot@correo.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("lhpmpc@gmail.com",$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}
else{
    echo "Mensaje no enviado";
}
// FIN CORREO PARA EL REGISTRADO

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

}
else{
      print '<div class="alert alert-warning" role="alert">
         ¡Todos los campos son obligatorios!
        </div>';
}


}// FINAL ELSE VALIDACION DE USUARIO EXISTENTE
mysqli_close($conexion);
?>