<?php 

session_start();
$location8=($_POST["location8"]);

exec("sudo sed -i '840c LOCATION: $location8' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>