<?php 

session_start();
$location6=($_POST["location6"]);

exec("sudo sed -i '640c LOCATION: $location6' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>