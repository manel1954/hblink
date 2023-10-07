<?php 

$activa=exec("awk 'NR==7' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA7=OFF"){
exec("sudo sh activar_regla7.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>