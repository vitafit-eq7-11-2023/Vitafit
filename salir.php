<?php
//Inicio de session iniciada
session_start();
//Session eliminada
session_destroy();
//Redirigimos afuera 
header("location: index.php");
?>