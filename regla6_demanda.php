<?php 
$activa=exec("awk 'NR==6' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA6=ON"){
exec("sudo sh regla6_demanda.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
