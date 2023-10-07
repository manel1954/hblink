<?php 

$activa=exec("awk 'NR==4' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA4=OFF"){
exec("sudo sh activar_regla4.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>