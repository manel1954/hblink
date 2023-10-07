<?php 
session_start();
$nombre8=($_POST["nombre8"]);
$demandapermanente8=($_POST["demandapermanente8"]);
$tgconexion8=($_POST["tgconexion8"]);
$tgdesconexion8=($_POST["tgdesconexion8"]);
$tgsalida8=($_POST["tgsalida8"]);
$masterip8=($_POST["masterip8"]);
$puerto8=($_POST["puerto8"]);
$password8=($_POST["password8"]);
$options8=($_POST["options8"]);

$activa=exec("awk 'NR==8' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA8=ON"){

exec("sudo sed -i '1c $nombre8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '2c $demandapermanente8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '3c $tgconexion8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '4c $tgdesconexion8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '5c $tgsalida8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '6c $masterip8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '7c $puerto8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '8c $password8' /var/www/html/hblink/status_regla8.cfg");
exec("sudo sed -i '9c $options8' /var/www/html/hblink/status_regla8.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

