<?php
session_start();
if(!isset($_SESSION['usuario'])) {
  header("Location: login.php");
}
ini_set('error_reporting',0);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
<head>
    <script> 
    function alert2(){
    alert("Sesion Cerrada!Hasta Pronto");
    }
    </script>
	<title>Inico</title>
</head>
<body>
<?php
include_once "header.html";
?><!--fin del titulo-->
<!--Menu lateral izquerdo-->
<div id="miMenu">
 <nav id="menu">
 <ul id="listaMenu1">
 <li><a href="acceso.php" id="inicio">Inicio</a></li>
 <li><a href="pag/Tratamientos.php">Tratamientos</a></li>
 <li><a href="pag/Noticias.php">Noticias</a></li>
 <li><a href="pag/Conocenos.php">Conocenos</a></li>
 <li><a href="pag/Promociones.php">Promociones</a></li> 
 </ul>
 </nav>
 </div>
<!--Fin del Menu lateral izquierdo-->

    <!--Informacion principal-->
<section id="seccion">
 <figure >
 <img id="img" src="img/02.jpg" width="300px">
 </figure>
 <h1>El consultorio dental constituye el lugar donde se desarrolla la actividad profesional del odontologo, del higienista y de auxiliar dental.
 Nos comprometemos a entregar la maxima calidad en nuestro trabajo. Pero ademas, para nosotros es tambien prioritario el estilo del servicio que brindamos: Nos preocupa que nuestra atencion, en todos sus detalles sea agradable para nuestros pacientes. Esa es nuestra filosofia.
 El consultorio dental constituye el lugar donde se desarrolla la actividad profesional del odontologo, del higienista y de auxiliar dental.
 Nos comprometemos a entregar la maxima calidad en nuestro trabajo. Pero ademas, para nosotros es tambien prioritario el estilo del servicio que brindamos: Nos preocupa que nuestra atencion, en todos sus detalles sea agradable para nuestros pacientes. Esa es nuestra filosofia.</h1>
<br> 
<h1>¿Que es la Ortondoncia?</h1>

<h1>Es la especialidad de la odontologia que corrige los huesos y los dientes que estan mal colocados.

Cuando el paciente es infantil podemos corregir tanto los problemas de dientes como el de los huesos ,estos ultimos mediante ortopedia.</h1> 

</section>
<!--redes sociales-->
<div id="miMenu2">
 <nav id="menu2">
 <ul id="listaMenu2">
 <li><a href="pag/Foro.php">Foro</a></li>
 <li><a href="pag/Citas.php">Citas</a></li> 
 <li><a onclick="alert2()" href="logout.php" >Cerrar Sesion</a></li> 
 </ul>
 </nav>
 </div>
<div id="apps">
 <aside id="columna2">
 	<h1 >Sigueme en:</h1>
 <a href="https://wwww.facebook.com/">
   <figure>
     <img src="img/face.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 <a href="https://www.instagram.com/">
   <figure>
     <img src="img/insta.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 <a href="https://www.youtube.com/">
   <figure>
     <img src="img/you.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 </aside>
 </div>
<!--fin de redes sociales-->


<!--Pie-->
<?php
include_once "footer.html";
?>
<!--Fin del pie-->
</body>
</html>