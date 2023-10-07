<?php 

session_start();
$locationxlx=($_POST["locationxlx"]);

exec("sudo sed -i '1040c LOCATION: $locationxlx' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>