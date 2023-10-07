<?php 

session_start();

$password=($_POST["password"]);



exec("sudo sed -i '161c PASSPHRASE: $password' /opt/HBlink3/hblink.cfg");


header("Location:editar_reglas.php");	





?>