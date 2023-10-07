<?php 
$activa=exec("awk 'NR==2' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA2=ON"){
exec("sudo sh regla2_permanente.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
