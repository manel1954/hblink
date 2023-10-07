<?php 
$activa=exec("awk 'NR==2' /var/www/html/hblink/status_reglas.cfg");
if($activa == "REGLA2=ON"){

exec("sudo sh desactivar_regla2.sh");


header("Location:editar_reglas.php");	
}else
{
    header("Location:_aviso_regla_desactivada.php");
}
?>