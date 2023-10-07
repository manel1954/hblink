<?php 
$activa=exec("awk 'NR==9' /var/www/html/hblink/status_reglas.cfg");

if($activa == "REGLA9=ON"){
exec("sudo sh regla9_permanente.sh");


header("Location:editar_reglas.php");	

}else
{
    header("Location:_aviso_demanda_desactivada.php");
}

?>

	
