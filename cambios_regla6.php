<?php 
session_start();
$nombre6=($_POST["nombre6"]);
$demandapermanente6=($_POST["demandapermanente6"]);
$tgconexion6=($_POST["tgconexion6"]);
$tgdesconexion6=($_POST["tgdesconexion6"]);
$tgsalida6=($_POST["tgsalida6"]);
$masterip6=($_POST["masterip6"]);
$puerto6=($_POST["puerto6"]);
$password6=($_POST["password6"]);
$options6=($_POST["options6"]);

$activa=exec("awk 'NR==6' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA6=ON"){

exec("sudo sed -i '1c $nombre6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '2c $demandapermanente6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '3c $tgconexion6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '4c $tgdesconexion6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '5c $tgsalida6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '6c $masterip6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '7c $puerto6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '8c $password6' /var/www/html/hblink/status_regla6.cfg");
exec("sudo sed -i '9c $options6' /var/www/html/hblink/status_regla6.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

