<?php 

$activa=exec("awk 'NR==9' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA9=OFF"){
exec("sudo sh activar_regla9.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>