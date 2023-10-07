<?php 

session_start();
$location3=($_POST["location3"]);

exec("sudo sed -i '340c LOCATION: $location3' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>