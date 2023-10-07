<?php 
$activa=exec("awk 'NR==7' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA7=ON"){
exec("sudo sh regla7_permanente.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
