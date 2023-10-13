<?php 

session_start();
$indicativo=($_POST["indicativo"]);

exec("sudo sed -i '230c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '330c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '430c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '530c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '630c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '730c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '830c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '930c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '1030c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '1130c CALLSIGN: $indicativo' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>