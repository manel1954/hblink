<?php 

session_start();

$dashboard=($_POST["dashboard"]);


exec("sudo sed -i '1c REPORT_NAME     = \"$dashboard\"' /opt/HBmonitor/config.py");
exec("sudo sed -i '1c REPORT_NAME     = \"$dashboard\"' /opt/HBmonitor_CLARO/config.py");
exec("sudo sed -i '1c REPORT_NAME     = \"$dashboard\"' /opt/HBmonitor_OSCURO/config.py");

exec("sudo systemctl restart hbmon.service");


header("Location:dashboard_sin_cambios.php");	
?>