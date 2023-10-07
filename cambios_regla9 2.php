<?php 
session_start();
$nombre9=($_POST["nombre9"]);
$demandapermanente9=($_POST["demandapermanente9"]);
$tgconexion9=($_POST["tgconexion9"]);
$tgdesconexion9=($_POST["tgdesconexion9"]);
$tgsalida9=($_POST["tgsalida9"]);
$masterip9=($_POST["masterip9"]);
$puerto9=($_POST["puerto9"]);
$password9=($_POST["password9"]);
$options9=($_POST["options9"]);

$activa=exec("awk 'NR==9' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA9=ON"){

exec("sudo sed -i '1c $nombre9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '2c $demandapermanente9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '3c $tgconexion9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '4c $tgdesconexion9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '5c $tgsalida9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '6c $masterip9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '7c $puerto9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '8c $password9' /var/www/html/hblink/status_regla9.cfg");
exec("sudo sed -i '9c $options9' /var/www/html/hblink/status_regla9.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

