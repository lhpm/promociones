<?php
	
	
	//$conn=new mysqli("localhost","root","","mastro");

      $conn = new mysqli("127.0.0.1", "root", "", "mastro");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>