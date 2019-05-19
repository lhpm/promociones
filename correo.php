<?php

// CORREO A ENVIAR

$email = "lhpmpc@gmail.com";
$mail = "<img src=''><br />
IMPORTANTE: HAY UN PEDIDO POR DESPACHAR<br />
¡GRACIAS POR SU ATENCION!
";
//Titulo
$titulo = "IMPORTANTE!: PEDI2 PARA DESPACHAR";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: PEDIDO < admin@luismachadoportafolio.com.co >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail($email,$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
// FIN CORREO PARA EL REGISTRADO
?>