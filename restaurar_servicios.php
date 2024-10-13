<?php 

session_start();

exec("sudo systemctl restart hbmon.service");
exec("sudo systemctl restart hblink.service");

header("Location:dashboard_sin_cambios.php");	
?>