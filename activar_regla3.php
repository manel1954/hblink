<?php 

$activa=exec("awk 'NR==3' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA3=OFF"){
exec("sudo sh activar_regla3.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_activada.php");
}
?>