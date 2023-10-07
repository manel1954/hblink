<?php 

session_start();
$location2=($_POST["location2"]);

exec("sudo sed -i '240c LOCATION: $location2' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>