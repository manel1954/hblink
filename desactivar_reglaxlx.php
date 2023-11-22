<?php 
$activa=exec("awk 'NR==10' /var/www/html/hblink/status_reglas.cfg");
if($activa == "REGLA10=ON"){

exec("sudo sh desactivar_reglaxlx.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_desactivada.php");
}
?>
