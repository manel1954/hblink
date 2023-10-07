<?php 
session_start();
$nombre2=($_POST["nombre2"]);
$demandapermanente2=($_POST["demandapermanente2"]);
$tgconexion2=($_POST["tgconexion2"]);
$tgdesconexion2=($_POST["tgdesconexion2"]);
$tgsalida2=($_POST["tgsalida2"]);
$masterip2=($_POST["masterip2"]);
$puerto2=($_POST["puerto2"]);
$password2=($_POST["password2"]);
$options2=($_POST["options2"]);

$activa=exec("awk 'NR==2' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA2=ON"){

exec("sudo sed -i '1c $nombre2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '2c $demandapermanente2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '3c $tgconexion2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '4c $tgdesconexion2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '5c $tgsalida2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '6c $masterip2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '7c $puerto2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '8c $password2' /var/www/html/hblink/status_regla2.cfg");
exec("sudo sed -i '9c $options2' /var/www/html/hblink/status_regla2.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

