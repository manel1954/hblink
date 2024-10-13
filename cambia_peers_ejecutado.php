<?php 

session_start();

$peers=($_POST["peers"]);

exec("sudo sed -i '336c var miTexto2 = $peers; ' /opt/HBmonitor_OSCURO/index_template.html");

exec("sudo systemctl restart hbmon.service");

header("Location:dashboard_sin_cambios.php");	
?>