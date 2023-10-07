<?php 
session_start();
$nombre3=($_POST["nombre3"]);
$demandapermanente3=($_POST["demandapermanente3"]);
$tgconexion3=($_POST["tgconexion3"]);
$tgdesconexion3=($_POST["tgdesconexion3"]);
$tgsalida3=($_POST["tgsalida3"]);
$masterip3=($_POST["masterip3"]);
$puerto3=($_POST["puerto3"]);
$password3=($_POST["password3"]);
$options3=($_POST["options3"]);

$activa=exec("awk 'NR==3' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA3=ON"){

exec("sudo sed -i '1c $nombre3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '2c $demandapermanente3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '3c $tgconexion3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '4c $tgdesconexion3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '5c $tgsalida3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '6c $masterip3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '7c $puerto3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '8c $password3' /var/www/html/hblink/status_regla3.cfg");
exec("sudo sed -i '9c $options3' /var/www/html/hblink/status_regla3.cfg");

header("Location:editar_reglas_cambios.php");	

}else
{
    header("Location:_aviso_cambios_desactivados.php");
}

?>

