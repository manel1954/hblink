<?php 

session_start();

$repeat=($_POST["repeat"]);

exec("sudo sed -i '335c var miTexto1 = $repeat; ' /opt/HBmonitor/index_template.html");






exec("sudo systemctl restart hbmon.service");


header("Location:dashboard_sin_cambios.php");	
?>