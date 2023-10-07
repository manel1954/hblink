<?php 

session_start();
$location4=($_POST["location4"]);

exec("sudo sed -i '440c LOCATION: $location4' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>