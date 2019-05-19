<?php
session_start();
if (@$_SESSION['correo'] ==""){
	echo "No ha iniciado sesión";
	print '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Iniciar Sesión
    </button>';
}
else{
echo $_SESSION['correo'];
print '<a href="../cerrarsesion.php" class="btn btn-danger">
        Cerrar Sesión
       </a>';
}
?>