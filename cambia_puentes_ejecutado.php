<?php 

session_start();

$puentes=($_POST["puentes"]);

exec("sudo sed -i '337c var miTexto3 = $puentes; ' /opt/HBmonitor_OSCURO/index_template.html");






exec("sudo systemctl restart hbmon.service");


header("Location:dashboard_sin_cambios.php");	
?>