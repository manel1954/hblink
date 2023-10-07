<?php 

$activa=exec("awk 'NR==6' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA6=OFF"){
exec("sudo sh activar_regla6.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>