<?php 

$activa=exec("awk 'NR==2' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA2=OFF"){
exec("sudo sh activar_regla2.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>