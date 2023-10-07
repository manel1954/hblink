<?php 
session_start();
$nombre7=($_POST["nombre7"]);
$demandapermanente7=($_POST["demandapermanente7"]);
$tgconexion7=($_POST["tgconexion7"]);
$tgdesconexion7=($_POST["tgdesconexion7"]);
$tgsalida7=($_POST["tgsalida7"]);
$masterip7=($_POST["masterip7"]);
$puerto7=($_POST["puerto7"]);
$password7=($_POST["password7"]);
$options7=($_POST["options7"]);

$activa=exec("awk 'NR==7' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA7=ON"){

exec("sudo sed -i '1c $nombre7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '2c $demandapermanente7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '3c $tgconexion7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '4c $tgdesconexion7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '5c $tgsalida7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '6c $masterip7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '7c $puerto7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '8c $password7' /var/www/html/hblink/status_regla7.cfg");
exec("sudo sed -i '9c $options7' /var/www/html/hblink/status_regla7.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

