<?php 

$activa=exec("awk 'NR==5' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA5=OFF"){
exec("sudo sh activar_regla5.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>