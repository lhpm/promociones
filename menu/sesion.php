<?php

//$conn = new mysqli("localhost", "root", "", "mastro");

include ("conexion.php");

$usuario = $_POST["usuario"];

$consulta = "SELECT * FROM usuario WHERE usuario = '".$usuario."'";
$resultado = $conn -> query($consulta);

// Compruebo si se genera fila existiendo el usuario
$usuario = mysqli_num_rows($resultado);


// Consulta la BD el dato correo
$crow = mysqli_fetch_array($resultado);

     if ( $crow["usuario"] == "admin@adf456hf68dfgh456.com" ){
      session_start();
      $_SESSION['logueado'] = true;
      $_SESSION['usuario'] = $usuario;
      header ("Location: index.php");
     }
     else{

      header ("Location: index.php");

}

?>