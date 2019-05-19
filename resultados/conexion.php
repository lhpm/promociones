<?php
	
	
	$conn=new mysqli("localhost","root","","mastro");

      //$conn = new mysqli("sql10.freemysqlhosting.net", "sql10252484", "nDjgiqEZA4", "sql10252484");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>