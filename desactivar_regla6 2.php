<?php 
$activa=exec("awk 'NR==6' /var/www/html/hblink/status_reglas.cfg");
if($activa == "REGLA6=ON"){

exec("sudo sh desactivar_regla6.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_desactivada.php");
}
?>