<?php 
$activa=exec("awk 'NR==8' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA8=ON"){
exec("sudo sh regla8_permanente.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
