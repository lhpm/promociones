<?php
	
	
	$conn=new mysqli("localhost","root","","mastro");

      //$conn = new mysqli("localhost", "luipat7_dg", "Sistemas2018", "luipat7_dg");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>