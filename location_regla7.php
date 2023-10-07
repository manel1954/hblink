<?php 

session_start();
$location7=($_POST["location7"]);

exec("sudo sed -i '740c LOCATION: $location7' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>