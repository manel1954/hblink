<?php 
session_start();



$nombre2 = exec("sed -n '1p' /var/www/html/hblink/status_regla2.cfg");
$demandapermanente2 = exec("sed -n '2p' /var/www/html/hblink/status_regla2.cfg");
$tgconexion2 = exec("sed -n '3p' /var/www/html/hblink/status_regla2.cfg");
$tgdesconexion2 = exec("sed -n '4p' /var/www/html/hblink/status_regla2.cfg");
$tgsalida2 = exec("sed -n '5p' /var/www/html/hblink/status_regla2.cfg");
$masterip2 = exec("sed -n '6p' /var/www/html/hblink/status_regla2.cfg");
$puerto2 = exec("sed -n '7p' /var/www/html/hblink/status_regla2.cfg");
$password2 = exec("sed -n '8p' /var/www/html/hblink/status_regla2.cfg");
$options2 = exec("sed -n '9p' /var/www/html/hblink/status_regla2.cfg");

$nombre3 = exec("sed -n '1p' /var/www/html/hblink/status_regla3.cfg");
$demandapermanente3 = exec("sed -n '2p' /var/www/html/hblink/status_regla3.cfg");
$tgconexion3 = exec("sed -n '3p' /var/www/html/hblink/status_regla3.cfg");
$tgdesconexion3 = exec("sed -n '4p' /var/www/html/hblink/status_regla3.cfg");
$tgsalida3 = exec("sed -n '5p' /var/www/html/hblink/status_regla3.cfg");
$masterip3 = exec("sed -n '6p' /var/www/html/hblink/status_regla3.cfg");
$puerto3 = exec("sed -n '7p' /var/www/html/hblink/status_regla3.cfg");
$password3 = exec("sed -n '8p' /var/www/html/hblink/status_regla3.cfg");
$options3 = exec("sed -n '9p' /var/www/html/hblink/status_regla3.cfg");


$nombre4 = exec("sed -n '1p' /var/www/html/hblink/status_regla4.cfg");
$demandapermanente4 = exec("sed -n '2p' /var/www/html/hblink/status_regla4.cfg");
$tgconexion4 = exec("sed -n '3p' /var/www/html/hblink/status_regla4.cfg");
$tgdesconexion4 = exec("sed -n '4p' /var/www/html/hblink/status_regla4.cfg");
$tgsalida4 = exec("sed -n '5p' /var/www/html/hblink/status_regla4.cfg");
$masterip4 = exec("sed -n '6p' /var/www/html/hblink/status_regla4.cfg");
$puerto4 = exec("sed -n '7p' /var/www/html/hblink/status_regla4.cfg");
$password4 = exec("sed -n '8p' /var/www/html/hblink/status_regla4.cfg");
$options4 = exec("sed -n '9p' /var/www/html/hblink/status_regla4.cfg");

$nombre5 = exec("sed -n '1p' /var/www/html/hblink/status_regla5.cfg");
$demandapermanente5 = exec("sed -n '2p' /var/www/html/hblink/status_regla5.cfg");
$tgconexion5 = exec("sed -n '3p' /var/www/html/hblink/status_regla5.cfg");
$tgdesconexion5 = exec("sed -n '4p' /var/www/html/hblink/status_regla5.cfg");
$tgsalida5 = exec("sed -n '5p' /var/www/html/hblink/status_regla5.cfg");
$masterip5 = exec("sed -n '6p' /var/www/html/hblink/status_regla5.cfg");
$puerto5 = exec("sed -n '7p' /var/www/html/hblink/status_regla5.cfg");
$password5 = exec("sed -n '8p' /var/www/html/hblink/status_regla5.cfg");
$options5 = exec("sed -n '9p' /var/www/html/hblink/status_regla5.cfg");

$nombre6 = exec("sed -n '1p' /var/www/html/hblink/status_regla6.cfg");
$demandapermanente6 = exec("sed -n '2p' /var/www/html/hblink/status_regla6.cfg");
$tgconexion6 = exec("sed -n '3p' /var/www/html/hblink/status_regla6.cfg");
$tgdesconexion6 = exec("sed -n '4p' /var/www/html/hblink/status_regla6.cfg");
$tgsalida6 = exec("sed -n '5p' /var/www/html/hblink/status_regla6.cfg");
$masterip6 = exec("sed -n '6p' /var/www/html/hblink/status_regla6.cfg");
$puerto6 = exec("sed -n '7p' /var/www/html/hblink/status_regla6.cfg");
$password6 = exec("sed -n '8p' /var/www/html/hblink/status_regla6.cfg");
$options6 = exec("sed -n '9p' /var/www/html/hblink/status_regla6.cfg");

$nombre7 = exec("sed -n '1p' /var/www/html/hblink/status_regla7.cfg");
$demandapermanente7 = exec("sed -n '2p' /var/www/html/hblink/status_regla7.cfg");
$tgconexion7 = exec("sed -n '3p' /var/www/html/hblink/status_regla7.cfg");
$tgdesconexion7 = exec("sed -n '4p' /var/www/html/hblink/status_regla7.cfg");
$tgsalida7 = exec("sed -n '5p' /var/www/html/hblink/status_regla7.cfg");
$masterip7 = exec("sed -n '6p' /var/www/html/hblink/status_regla7.cfg");
$puerto7 = exec("sed -n '7p' /var/www/html/hblink/status_regla7.cfg");
$password7 = exec("sed -n '8p' /var/www/html/hblink/status_regla7.cfg");
$options7 = exec("sed -n '9p' /var/www/html/hblink/status_regla7.cfg");

$nombre8 = exec("sed -n '1p' /var/www/html/hblink/status_regla8.cfg");
$demandapermanente8 = exec("sed -n '2p' /var/www/html/hblink/status_regla8.cfg");
$tgconexion8 = exec("sed -n '3p' /var/www/html/hblink/status_regla8.cfg");
$tgdesconexion8 = exec("sed -n '4p' /var/www/html/hblink/status_regla8.cfg");
$tgsalida8 = exec("sed -n '5p' /var/www/html/hblink/status_regla8.cfg");
$masterip8 = exec("sed -n '6p' /var/www/html/hblink/status_regla8.cfg");
$puerto8 = exec("sed -n '7p' /var/www/html/hblink/status_regla8.cfg");
$password8 = exec("sed -n '8p' /var/www/html/hblink/status_regla8.cfg");
$options8 = exec("sed -n '9p' /var/www/html/hblink/status_regla8.cfg");

$nombre9 = exec("sed -n '1p' /var/www/html/hblink/status_regla9.cfg");
$demandapermanente9 = exec("sed -n '2p' /var/www/html/hblink/status_regla9.cfg");
$tgconexion9 = exec("sed -n '3p' /var/www/html/hblink/status_regla9.cfg");
$tgdesconexion9 = exec("sed -n '4p' /var/www/html/hblink/status_regla9.cfg");
$tgsalida9 = exec("sed -n '5p' /var/www/html/hblink/status_regla9.cfg");
$masterip9 = exec("sed -n '6p' /var/www/html/hblink/status_regla9.cfg");
$puerto9 = exec("sed -n '7p' /var/www/html/hblink/status_regla9.cfg");
$password9 = exec("sed -n '8p' /var/www/html/hblink/status_regla9.cfg");
$options9 = exec("sed -n '9p' /var/www/html/hblink/status_regla9.cfg");


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Allstar Link">
    <meta name="description" content="Allstar Link">
    <meta name="author" content="EA3EIZ">

<!-- refresca la página cada 10 segundo (implantado por mi) -->
<!-- ====================================================== -->
<!-- <meta http-equiv="refresh" content="5" /> -->

    <link rel="shortcut icon" href="img/favicon.png">
    <title>DVSWITCH</title>

    <!-- CSS Bootstrap-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="custom/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <!-- CSS tema -->
    <link href="css/freelancer.css" rel="stylesheet">
    
    <!-- <Fuentes -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
    body{
        background-image: url(images/fondo_hblink3.png);
    }
.color_verde{
    color:#21FF06;
    }  
.color_verde_16{
    color:#21FF06;
    font-size: 14px;
    }  
    .color_verde_12{
    color:#21FF06;
    font-size: 12px;
    }      
.fuente_boton{
    font-size:16px;
    color:#FFFFFF;
    }
.fuente_boton1{
    font-size:24px;
    color:#f00000;
    }
.fuente_boton2{
    font-size:14px;
    color:#FFFFFF;
    }
.fuente_boton3{
    font-size:20px;
    color:#f00000;
    }
   .caja2{
    height: 820px;
    background:rgb(251,67,89);
    border-radius: 8px 8px 8px 8px;
    }     
    .caja3{
    height: 820px;
    background:rgb(157,194,10);
    border-radius: 8px 8px 8px 8px;
    }  
    .caja4{
    height: 820px;
    background:rgb(55,26,213);
    border-radius: 8px 8px 8px 8px;
    }
h4{
    text-align:center;
    color:#FFFFFF;
    font-size:24px;
} 
h5{
    text-align:center;
    color:#FFFFFF;
    font-size:18px;
   text-transform: none;
} 
h6{
    text-align:center;
    color:#FFFFFF;
    font-size:14px;
}  
.fondo_datos{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 100%;
    height: 25px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #4C4C4C;
    border-radius: 2px 2px 2px 2px;
    font-size: 17px;
    color:#FFFFFF;
    border: 1px solid #ccc;
}
.form-control {
    height: 30px;
    text-align: center;
    font-size: 16px;
}
.thumbnail_negro {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #000;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail_azul {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #1e1fb7;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail_marron {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #ad4625;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail_verde {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #008000;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail_red {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #ff0000;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail_orange {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #ffa500;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail_cian {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #1e90ff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail_violeta {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #b212bc;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
</style>
</head>
<body>

<div class="container"> 


<!--============== CAJA EDITAR  REGLA 2, 3 y 4 ==================================================================-->   
<br>
<div class="row">
    <div class="col-md-6">
<form method="post" action="aplicar_cambios_en_todas_las_reglas.php">
    <button style="color:#fff;font-size:18px;" class="btn btn-warning btn-md btn-block" type="submit">GRABAR TODOS LOS CAMBIOS</button>
</form>
    </div>

    <div class="col-md-6">
<form method="post" action="dashboard_sin_cambios.php">
    <button style="color:#fff;font-size:18px;" class="btn btn-danger btn-md btn-block" type="submit">SALIR SIN GUARDAR CAMBIOS</button>
</form>
    </div>
</div><!-- row -->
<br>
<div class="row">
    <div class="col-md-3 thumbnail_negro">     
    <h5 style="color:#ff0;">EDITAR REGLA 2</h5> 
<form method="post" action="cambios_regla2.php">
        <input name="nombre2" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="demandapermanente2" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="tgconexion2" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="tgdesconexion2" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="tgsalida2" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="masterip2" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="puerto2" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="password2" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password2;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla2.php">
        <input name="options2" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_16"><?php echo $options2;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
<!-- ====================================================================================================================== -->

<div class="col-md-3 thumbnail_azul">     
<h5 style="color:#ff0;">EDITAR REGLA 3</h5>  
<form method="post" action="cambios_regla3.php">
        <input name="nombre3" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="demandapermanente3" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="tgconexion3" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="tgdesconexion3" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="tgsalida3" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="masterip3" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="puerto3" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="password3" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password3;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla3.php">
        <input name="options3" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_16"><?php echo $options3;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
<!-- ====================================================================================================================== -->

<div class="col-md-3 thumbnail_marron">    
<h5 style="color:#ff0;">EDITAR REGLA 4</h5> 
<form method="post" action="cambios_regla4.php">
        <input name="nombre4" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="demandapermanente4" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="tgconexion4" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="tgdesconexion4" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="tgsalida4" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="masterip4" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="puerto4" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="password4" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password4;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla4.php">
        <input name="options4" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_16"><?php echo $options4;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
<div class="col-md-3 thumbnail_verde">   
<h5 style="color:#ff0;">EDITAR REGLA 5</h5> 
<form method="post" action="cambios_regla5.php">
        <input name="nombre5" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="demandapermanente5" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="tgconexion5" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="tgdesconexion5" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="tgsalida5" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="masterip5" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="puerto5" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="password5" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password5;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla5.php">
        <input name="options5" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_12"><?php echo $options5;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
</div><!-- row -->
<!-- ====================================================================================================================== -->
<div class="row">
<div class="col-md-3 thumbnail_red">    
<h5 style="color:#ff0;">EDITAR REGLA 6</h5>  
<form method="post" action="cambios_regla6.php">
        <input name="nombre6" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="demandapermanente6" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="tgconexion6" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="tgdesconexion6" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="tgsalida6" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="masterip6" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="puerto6" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="password6" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password6;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla6.php">
        <input name="options6" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_16"><?php echo $options6;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
<!-- ********************************************************************************************************-->



<!--============== REGLAS 7, 8 y 9 ==================================================================-->   
<div class="col-md-3 thumbnail_orange"> 
<h5 style="color:#ff0;">EDITAR REGLA 7</h5> 
<form method="post" action="cambios_regla7.php">
        <input name="nombre7" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="demandapermanente7" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="tgconexion7" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="tgdesconexion7" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="tgsalida7" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="masterip7" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="puerto7" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="password7" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password7;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla7.php">
        <input name="options7" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_16"><?php echo $options7;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
    <div class="col-md-3 thumbnail_cian">  
    <h5 style="color:#ff0;">EDITAR REGLA 8</h5> 
<form method="post" action="cambios_regla8.php">
        <input name="nombre8" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="demandapermanente8" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="tgconexion8" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="tgdesconexion8" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="tgsalida8" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="masterip8" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="puerto8" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="password8" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password8;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla8.php">
        <input name="options8" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_16"><?php echo $options8;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
<div class="col-md-3 thumbnail_violeta">   
        <h5 style="color:#ff0;">EDITAR REGLA 9</h5> 
<form method="post" action="cambios_regla9.php">
        <input name="nombre9" class="fuente_boton3 form-control" placeholder="Introduce Nombre + Enter">
            <div class="fondo_datos">Nombre: 
                <span class="color_verde"><?php echo $nombre9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="demandapermanente9" class="fuente_boton3 form-control" placeholder="Introduce Demanda ó Permanente + Enter">
            <div class="fondo_datos">Conexión : 
                <span class="color_verde"><?php echo $demandapermanente9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="tgconexion9" class="fuente_boton3 form-control" placeholder="Introduce TG Conexión + Enter">
            <div class="fondo_datos">TG Conexión: 
                <span class="color_verde"><?php echo $tgconexion9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="tgdesconexion9" class="fuente_boton3 form-control" placeholder="Introduce TG Desconexión + Enter">
            <div class="fondo_datos">NTG Desconexión: 
                <span class="color_verde"><?php echo $tgdesconexion9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="tgsalida9" class="fuente_boton3 form-control" placeholder="Introduce TG Salida + Enter">
            <div class="fondo_datos">TG Salida: 
                <span class="color_verde"><?php echo $tgsalida9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="masterip9" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $masterip9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="puerto9" class="fuente_boton3 form-control" placeholder="Introduce Puerto + Enter">
            <div class="fondo_datos">Puerto: 
                <span class="color_verde"><?php echo $puerto9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="password9" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter">
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password9;?></span>
            </div>             
</form>
<form method="post" action="cambios_regla9.php">
        <input name="options9" class="fuente_boton3 form-control" placeholder="Introduce Options + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde_16"><?php echo $options9;?></span>
            </div>             
</form>

</div><!-- "col-md-4 -->
</div><!-- "row -->
<!-- ********************************************************************************************************-->
</div><!-- container -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/freelancer.min.js"></script>
<script>
function parpadear() {
with (document.getElementById("parpadeo").style)
visibility = (visibility == "visible") ? "hidden" : "visible";
}
</script>
</body>
</html>