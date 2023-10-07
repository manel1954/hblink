<?php 
$activa=exec("awk 'NR==4' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA4=ON"){
exec("sudo sh regla4_permanente.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
