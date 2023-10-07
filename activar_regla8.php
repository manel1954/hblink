<?php 

$activa=exec("awk 'NR==8' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA8=OFF"){
exec("sudo sh activar_regla8.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>