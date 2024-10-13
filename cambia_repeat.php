<?php 
session_start();

$repeat = exec("sed -n '335p' /opt/HBmonitor_OSCURO/index_template.html");
$repeat = substr("$repeat", 15, 2);

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
background-image: url(img/fondo_hblink3.png);
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
    height: 200px;
    background:rgb(55, 27, 213);
    border-radius: 3px;
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
.cambio {
   color:#fff;
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
<form method="post" action="dashboard_sin_cambios.php">
    <button style="font-size:18px;"class="btn btn-success btn-sm btn-block" type="submit">SALIR SIN CAMBIOS</button>
</form>
</div>

</div><!-- row -->
<br>
<!--============== CAJA 1 ====================================-->       
<div class="row">


<!--============== CAJA 6 CONFIGURACIONES ==================================================================--> 
     


<br>
</div><!-- "col-md-4 -->
<!-- =======================================================================================-->




<!--============== CAJA 7 CONFIGURACIONES ==================================================================--> 
      

<div class="col-md-6 caja7"><br>     
    <h5>introduce los peers activos</h5>

<form method="post" action="cambia_repeat_ejecutado.php">
        <input name="repeat" class="fuente_boton3 form-control" placeholder="Introduce el número + Enter"> 
            <div style="background: rgb(15,64,145);" class="fondo_datos">Número de repeat: 
                <span class="color_verde"><?php echo $repeat;?></span>
            </div> 
            <br>
            <span class="cambio">Cuando hayas cambiado el número haz click en DASHBOARD OSCURO</span>
</form>




<br>
</div><!-- "col-md-4 -->

</div><!-- row -->

<!-- =======================================================================================-->

<br><br>


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