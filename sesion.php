<?php

//$conn = new mysqli("localhost", "root", "", "mastro");

include ("encuestas/conexion.php");

$correo = $_POST["correo"];

$consulta = "SELECT * FROM formulario WHERE correo = '".$correo."'";
$resultado = $conn -> query($consulta);

// Compruebo si se genera fila existiendo el usuario
$usuario = mysqli_num_rows($resultado);


// Consulta la BD el dato correo
$crow = mysqli_fetch_array($resultado);

     if ( $crow["correo"] == $correo ){
      session_start();
      $_SESSION['loggedin'] = true;
     	print '<div class="alert alert-warning" role="alert">
        ¡Ya hay un Usuario con este Correo <b>'.$correo.'</b> por favor, <br />
        '.$_SESSION['correo'] = $correo.'
        </div>';
      header ("Location: index.php");
     }
     else{

      header ("Location: formulario.html");

}

?>