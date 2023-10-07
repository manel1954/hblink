<?php 

session_start();

$port=($_POST["port"]);


exec("sudo sed -i '160c PORT: $port' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	




?>