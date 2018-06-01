<?php
include "pag/conexion.php";
if(isset($_SESSION['usuario'])) {
	header("Location: accesocompleto.php");
}

ini_set('error_reporting',0);
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <link rel="stylesheet" href="icon/style.css">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
<head>    
	<title>Inico</title>
</head>
<body>
<?php
include_once "header.html";
?><!--fin del titulo-->

<!--Menu lateral izquerdo-->

<?php
include_once "nav.html";
?>

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
<!--Fin de la informacion personal-->

</section>
<!--redes sociales-->
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
     <a href="https://www.googlemaps.com/">
   <figure>
     <img src="img/iconomap.png" style="width:40px;height:30px" class="img">
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
