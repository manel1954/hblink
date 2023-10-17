<?php 
session_start();

$location2 = exec("sed -n '240p' /opt/HBlink3/hblink.cfg");
$location2 = substr("$location2", 10, 25);

$location3 = exec("sed -n '340p' /opt/HBlink3/hblink.cfg");
$location3 = substr("$location3", 10, 25);

$location4 = exec("sed -n '440p' /opt/HBlink3/hblink.cfg");
$location4 = substr("$location4", 10, 25);

$location5 = exec("sed -n '540p' /opt/HBlink3/hblink.cfg");
$location5 = substr("$location5", 10, 25);

$location6 = exec("sed -n '640p' /opt/HBlink3/hblink.cfg");
$location6 = substr("$location6", 10, 25);

$location7 = exec("sed -n '740p' /opt/HBlink3/hblink.cfg");
$location7 = substr("$location7", 10, 25);

$location8 = exec("sed -n '840p' /opt/HBlink3/hblink.cfg");
$location8 = substr("$location8", 10, 25);

$location9 = exec("sed -n '940p' /opt/HBlink3/hblink.cfg");
$location9 = substr("$location9", 10, 25);

$locationxlx = exec("sed -n '1040p' /opt/HBlink3/hblink.cfg");
$locationxlx = substr("$locationxlx", 10, 25);

$location2 = exec("sed -n '240p' /opt/HBlink3/hblink.cfg");
$location2 = substr("$location2", 10, 25);

$indicativo = exec("sed -n '230p' /opt/HBlink3/hblink.cfg");
$indicativo = substr("$indicativo", 9, 8);

$id = exec("sed -n '231p' /opt/HBlink3/hblink.cfg");
$id = substr("$id", 10, 9);

$password = exec("sed -n '161p' /opt/HBlink3/hblink.cfg");
$password = substr("$password", 12, 20);

$port = exec("sed -n '160p' /opt/HBlink3/hblink.cfg");
$port = substr("$port", 6, 5);

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
background-image: url(img/fondo_02.png);
    }
.sistema{
    height: 50px;
    color:#FFFFFF;
    font-size: 25px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
.ambe{
    height: 450px;
    color:#FFFFFF;
    font-size: 26px;
    padding-top: 5px;
    text-align: center;
    background:#800080;
    border-radius: 4px 4px 4px 4px;
    }
.ambe_desactivado{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 100%;
    height: 41px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #000000;
    border-radius: 5px 5px 5px 5px;
    font-size: 24px;
    color:#F00000;
    border: 1px solid #ccc;
}
.ambe_activado{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 100%;
    height: 41px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #108040;
    border-radius: 5px 5px 5px 5px;
    font-size: 24px;
    color:#FFFFFF;
    border: 1px solid #ccc;
}
.version{
    height: 50px;
    color:#FFFFFF;
    font-size: 20px;
    padding-top: 8px;
    text-align: center;
    background:#6F2B0A;
    border-radius: 4px 4px 4px 4px;
    }    
.callsign{
    height: 50px;
    color:#000000;
    font-size: 20px;
    padding-top: 11px;
    text-align: center;
    background:#FFFF0A;
    border-radius: 4px 4px 4px 4px;
    } 
.ipcs2{
    color:#000000;
    font-size: 25px;
    padding-top: 11px;
    }
@media (max-width: 360px) {
.ipcs2{
    color:#000000;
    font-size: 18px;
    padding-top: 11px;
    }
    .sistema{
    height: 40px;
    color:#FFFFFF;
    font-size: 18px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
}
@media (min-width: 375px) {
.ipcs2{
    color:#000000;
    font-size: 18px;
    padding-top: 11px;
    }
    .sistema{
    height: 40px;
    color:#FFFFFF;
    font-size: 18px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
}
@media (min-width: 767px) {
.ipcs2{
    color:#000000;
    font-size: 25px;
    padding-top: 11px;
    }
    .sistema{
    height: 50px;
    color:#FFFFFF;
    font-size: 25px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
}
.color_verde{
    color:#21FF06;
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
.config{
    background:#6F2B0A;
    border-radius: 8px 8px 8px 8px;
    }
.caja1{
    height: 520px;
    background:rgb(157,194,10);
    border-radius: 8px 8px 8px 8px;
    }
    .caja2{
    height: 520px;
    background:rgb(251,67,89);
    border-radius: 8px 8px 8px 8px;
    }
    .caja3{
    height: 520px;
    background:#000000;
    border-radius: 8px 0px 0px 8px;
    }
    .caja4{
    height: 519px;
    background:#000000;
    border-radius: 0px 8px 8px 0px;
    }
    .caja5{
    height: 380px;
    background:rgb(56,46,48);
    border-radius: 8px 0px 0px 8px;
    }
    .caja6{
    height: 380px;
    background:rgb(55, 27, 213);
    border-radius: 0px 0px 0px 0px;
    }    
    .caja7{
    height: 380px;
    background:rgb(55, 27, 213);
    border-radius: 0px 8px 8px 0px;
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
    border-radius: 5px 5px 5px 5px;
    font-size: 16px;
    color:#FFFFFF;
    border: 1px solid #ccc;
}
.form-control {
    height: 25px;
    text-align: center;
    font-size: 16px;
}
</style>
</head>
<body>



    <!-- Navigation -->


<div class="container"> 
<br><br>

<div class="row">

<div class="col-md-6">
<form method="post" action="dashboard.php">
    <button style="font-size:18px;"class="btn btn-warning btn-sm btn-block" type="submit">RESTAURAR SERVICIOS y VOLVER AL DASHBOARD</button>
</form>
</div>

<div class="col-md-6">
<form method="post" action="dashboard_sin_cambios.php">
    <button style="font-size:18px;"class="btn btn-success btn-sm btn-block" type="submit">SALIR Y VOLVER AL DASHBOARD</button>
</form>
</div>

</div><!-- row -->
<br>
<!--============== CAJA 1 ====================================-->       
<div class="row">
    <div class="col-md-3 caja1"><br>     
        <h5>ACTIVAR REGLAS</h5>
<form method="post" action="activar_regla2.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 2</button><br>
</form>

<form method="post" action="activar_regla3.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 3</button><br>
</form>

<form method="post" action="activar_regla4.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 4</button><br>
</form>

<form method="post" action="activar_regla5.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 5</button><br>
</form>

<form method="post" action="activar_regla6.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 6</button><br>
</form>

<form method="post" action="activar_regla7.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 7</button><br>
</form>

<form method="post" action="activar_regla8.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 8</button><br>
</form>

<form method="post" action="activar_regla9.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA 9</button><br>
</form>

<form method="post" action="activar_reglaxlx.php">
    <button class="btn btn-danger btn-sm btn-block" type="submit">ACTIVAR REGLA XLX</button><br>
</form>

</div><!-- "col-md-4 -->
<!-- =======================================================================================-->   

<!--============== CAJA 2 ==================================================================-->       
<div class="col-md-1"></div>
    <div class="col-md-3 caja2"><br>     
        <h5>DESACTIVAR REGLAS</h5>
<form method="post" action="desactivar_regla2.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 2</button><br>
</form>

<form method="post" action="desactivar_regla3.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 3</button><br>
</form>

<form method="post" action="desactivar_regla4.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 4</button><br>
</form>

<form method="post" action="desactivar_regla5.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 5</button><br>
</form>

<form method="post" action="desactivar_regla6.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 6</button><br>
</form>

<form method="post" action="desactivar_regla7.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 7</button><br>
</form>

<form method="post" action="desactivar_regla8.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 8</button><br>
</form>

<form method="post" action="desactivar_regla9.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA 9</button><br>
</form>

<form method="post" action="desactivar_reglaxlx.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">DESACTIVAR REGLA XLX</button><br>
</form>


</div><!-- "col-md-4 -->
<!-- =======================================================================================-->




<!-- =======================================================================================-->
<br>

<!--============== CAJA 5 CONFIGURACIONES ==================================================================--> 
     
<div class="row">
    <div class="col-md-4 caja5"><br>     
        <h5>CONFIGURACIÓN GENERAL</h5>
  
<form method="post" action="configuraciones_indicativo.php">

        <input name="indicativo" class="fuente_boton3 form-control" placeholder="Introduce Indicativo + Enter">
            <div class="fondo_datos">Indicativo: 
                <span class="color_verde"><?php echo $indicativo;?></span>
            </div>         
</form>

<form method="post" action="configuraciones_id.php">

        <input name="id" class="fuente_boton3 form-control" placeholder="Introduce Id 9 cifras + Enter">
            <div class="fondo_datos">Id 9 cifras: 
                <span class="color_verde"><?php echo $id;?></span>
            </div>         
</form>

<form method="post" action="configuraciones_password.php">

        <input name="password" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter"> 
            <div class="fondo_datos">Password: 
                <span class="color_verde"><?php echo $password;?></span>
            </div> 
</form>
<form method="post" action="configuraciones_port.php">

        <input name="port" class="fuente_boton3 form-control" placeholder="Introduce Port + Enter"> 
            <div class="fondo_datos">Port: 
                <span class="color_verde"><?php echo $port;?></span>
            </div> 
</form>



<br>
</div><!-- "col-md-4 -->
<!-- =======================================================================================-->

<!--============== CAJA 6 CONFIGURACIONES ==================================================================--> 
     
    <div class="col-md-4 caja6"><br>     
    <h5>CONFIGURA LOCATIONS</h5>   

<form method="post" action="location_regla2.php">
        <input name="location2" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(15,64,145);" class="fondo_datos">Ciudad regla 2: 
                <span class="color_verde"><?php echo $location2;?></span>
            </div> 
</form>
<form method="post" action="location_regla3.php">
        <input name="location3" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(143,125,114);" class="fondo_datos">Ciudad regla 3: 
                <span class="color_verde"><?php echo $location3;?></span>
            </div> 
</form>
<form method="post" action="location_regla4.php">
        <input name="location4" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(15,64,145);" class="fondo_datos">Ciudad regla 4: 
                <span class="color_verde"><?php echo $location4;?></span>
            </div> 
</form>
<form method="post" action="location_regla5.php">
        <input name="location5" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(143,125,114);" class="fondo_datos">Ciudad regla 5: 
                <span class="color_verde"><?php echo $location5;?></span>
            </div> 
</form>
<form method="post" action="location_regla6.php">
        <input name="location6" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(15,64,145);" class="fondo_datos">Ciudad regla 6: 
                <span class="color_verde"><?php echo $location6;?></span>
            </div> 
</form>

<br>
</div><!-- "col-md-4 -->
<!-- =======================================================================================-->




<!--============== CAJA 7 CONFIGURACIONES ==================================================================--> 
      

    <div class="col-md-4 caja7"><br>     
    <h5>CONFIGURA LOCATIONS</h5>
  










<form method="post" action="location_regla7.php">
        <input name="location7" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(15,64,145);" class="fondo_datos">Ciudad regla 7: 
                <span class="color_verde"><?php echo $location7;?></span>
            </div> 
</form>
<form method="post" action="location_regla8.php">
        <input name="location8" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(143,125,114);" class="fondo_datos">Ciudad regla 8: 
                <span class="color_verde"><?php echo $location8;?></span>
            </div> 
</form>
<form method="post" action="location_regla9.php">
        <input name="location9" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(15,64,145);" class="fondo_datos">Ciudad regla 9: 
                <span class="color_verde"><?php echo $location9;?></span>
            </div> 
</form>
<form method="post" action="location_reglaxlx.php">
        <input name="locationxlx" class="fuente_boton3 form-control" placeholder="Introduce Ciudad + Enter"> 
            <div style="background: rgb(143,125,114);" class="fondo_datos">Ciudad xlx: 
                <span class="color_verde"><?php echo $locationxlx;?></span>
            </div> 

<br>
</div><!-- "col-md-4 -->

</div><!-- row -->

<!-- =======================================================================================-->

<br><br>












</div><!-- container -->

    
<?php
//}else {
//header('Location:/dvs/index.php');    
//}
?>
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
