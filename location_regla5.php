<?php 

session_start();
$location5=($_POST["location5"]);

exec("sudo sed -i '540c LOCATION: $location5' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>