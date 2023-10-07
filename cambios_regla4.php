<?php 
session_start();
$nombre4=($_POST["nombre4"]);
$demandapermanente4=($_POST["demandapermanente4"]);
$tgconexion4=($_POST["tgconexion4"]);
$tgdesconexion4=($_POST["tgdesconexion4"]);
$tgsalida4=($_POST["tgsalida4"]);
$masterip4=($_POST["masterip4"]);
$puerto4=($_POST["puerto4"]);
$password4=($_POST["password4"]);
$options4=($_POST["options4"]);

$activa=exec("awk 'NR==4' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA4=ON"){

exec("sudo sed -i '1c $nombre4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '2c $demandapermanente4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '3c $tgconexion4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '4c $tgdesconexion4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '5c $tgsalida4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '6c $masterip4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '7c $puerto4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '8c $password4' /var/www/html/hblink/status_regla4.cfg");
exec("sudo sed -i '9c $options4' /var/www/html/hblink/status_regla4.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

