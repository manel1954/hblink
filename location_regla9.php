<?php 

session_start();
$location9=($_POST["location9"]);

exec("sudo sed -i '940c LOCATION: $location9' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>