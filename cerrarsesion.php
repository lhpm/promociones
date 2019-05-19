<?php

session_start();
unset ($SESSION['correo']);
session_destroy();

header('Location: index.php');

?>