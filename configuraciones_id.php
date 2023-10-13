<?php 

session_start();
$id=($_POST["id"]);
$id7=substr($id,0,7);
exec("sudo sed -i '231c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '331c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '431c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '531c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '631c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '731c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '831c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '931c RADIO_ID: $id' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '1031c RADIO_ID: $id7' /opt/HBlink3/hblink.cfg");
exec("sudo sed -i '1131c RADIO_ID: $id7' /opt/HBlink3/hblink.cfg");

header("Location:editar_reglas.php");	

?>