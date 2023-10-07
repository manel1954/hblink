<?php 
session_start();
$nombre5=($_POST["nombre5"]);
$demandapermanente5=($_POST["demandapermanente5"]);
$tgconexion5=($_POST["tgconexion5"]);
$tgdesconexion5=($_POST["tgdesconexion5"]);
$tgsalida5=($_POST["tgsalida5"]);
$masterip5=($_POST["masterip5"]);
$puerto5=($_POST["puerto5"]);
$password5=($_POST["password5"]);
$options5=($_POST["options5"]);

$activa=exec("awk 'NR==5' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA5=ON"){

exec("sudo sed -i '1c $nombre5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '2c $demandapermanente5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '3c $tgconexion5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '4c $tgdesconexion5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '5c $tgsalida5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '6c $masterip5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '7c $puerto5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '8c $password5' /var/www/html/hblink/status_regla5.cfg");
exec("sudo sed -i '9c $options5' /var/www/html/hblink/status_regla5.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

