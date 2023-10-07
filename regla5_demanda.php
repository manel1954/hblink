<?php 
$activa=exec("awk 'NR==5' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA5=ON"){
exec("sudo sh regla5_demanda.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
