<?php 
$activa=exec("awk 'NR==10' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA10=ON"){
exec("sudo sh reglaxlx_demanda.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
