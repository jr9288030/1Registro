
<?php
include("conexion.php");
?>


<?php
$site_name="Roles";
$url_site="http://127.0.0.1/loga/";



$servidor="localhost";
$usuario="root";
$clave="";
$base="loga";
mysql_connect($servidor,$usuario,$clave);
mysql_select_db($base);
?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>barra de navegacion</title>
<style>
    body{background-color:green;padding: 150px;font-family:Arial;}


    #menu{
        background-color:#222;
    }
    #menu ul{
        list-style:none;
        margin:0;
        padding:0;
    }
    #menu ul li{
        display:inline-block;
    }

    #menu ul li a{
        color:green;
        display:block;
        padding:20px 20px;
        text-decoration:none;
    }

    #menu ul li a:hover{
        background-color:yellow;
    }

    </style>





<!-- Script para mostrar las coordenadas-->
        <script type="text/javascript">
            if (navigator.geolocation) { //Validar si hay acceso web a la ubicación
                navigator.geolocation.getCurrentPosition(mostrarUbicacion); //Obtiene la posición
                } else {
                alert("¡Error! Este navegador no soporta la Geolocalización.");
            }
            
            //Funcion para obtener latitud y longitud
            function mostrarUbicacion(position) {
                var latitud = position.coords.latitude; //Obtener latitud
                var longitud = position.coords.longitude; //Obtener longitud
                var div = document.getElementById("coordenadas");
                div.innerHTML = "<br>Latitud: " + latitud + "<br>Longitud: " + longitud; //Imprime latitud y longitud
            }       
        </script>
        


































</head>




<section id="contenedor"><br/>


<form action="" method="post">
    
    Latitud:<input required name="latitud"><br />
    Longitud:<input name="longitud"><br />
    Cedula:<input name="cedula"><br />


    <input type="submit" name="submit" value="Guardar"/>
</form>


</section> 

















<body>
	<div id="menu">
	<h1></h1>
	<ul>


                 <li><a href="inicio.php">inicio</a></li>
    	        <li><a href="../jorge.php">Registro y Asignacion</a></li>
                <li><a href="#">localizacion</a></li>
                <li><a href="mama.php">Galeria</a></li>
                <li><a href="contacto.php">contacto</a></li>
    </ul>
    </div>
    <p>esta es la pagina de localizacion perros.</p>



<button onclik="findMe()"> mostrar ubicacion </button>
         <div id="mapa"></div>







        
        <!-- División o secciona para mostrar coordenadas -->
        <div id='coordenadas'></div> 
        











</body>




</html>








<?php
if($_POST){
    
    $m=$_POST['latitud'];
    $t=$_POST['longitud'];
    $e=$_POST['cedula'];

 mysql_query("insert into cordenadas(latitud,longitud,cedula)values('$m','$t','$e')") or die(mysql_error());
    echo "<h2>Dato Guardado</h2>";
   }
?>