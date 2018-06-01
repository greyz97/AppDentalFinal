<?php
include_once "conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
 <title>Tratamientos</title>
 <link rel="stylesheet" href="icon/style.css">
 <link rel="stylesheet" href="../css/diseño.css">
 <link rel="stylesheet" href="../css/diseñocita.css">
</head>
<body>
<div id="agrupar">
<!--titulo-->
<header id=cabecera>
  <h1 class="tit">CLINICA DENTAL</h1>
  <h2 class="tit2">Dibujando Una Mejor Sonrisa</h2>
</header>
<!--fin del titulo-->

<!--Menu lateral izquerdo-->
<div id="miMenu">
 <nav id="menu">
 <ul id="listaMenu1">
 <li><a href="../accesocompleto.php" id="inicio">Inicio</a></li>
 <li><a href="Tratamientos.php">Tratamientos</a></li>
 <li><a href="Noticias.php">Noticias</a></li>
 <li><a href="Conocenos.php">Conocenos</a></li>
 <li><a href="Promociones.php">Promociones</a></li></ul>
 </nav>
 </div>
<!--Fin del Menu lateral izquierdo-->


<!--Informacion principal-->
<section id="seccion2">
  <div id="cita">
      <h5 id="titulocita">Aparta Tu Cita !!</h5>
<form method="post" id="citas" action="../procesandodatos.php">
  <label id="label1">Usuario</label>
  <input id="input1" type="text" placeholder="Ingresa tu usuario" name="usuario">
  <br>
  <label id="label2">Fecha de Solicitud</label>
  <input id="input2" type="date"  name="fecha" value="" >
  <br>
  <label id="label3">Hora a solicitar cita</label>
  <input id="input3" type="time" name="hora" value="11:45:00" max="22:00:00" min="08:00:00" step="1">
  <br>
  <label id="label4">Tipo de Cita</label>
  <select id="select1" method="post" name="tipocita">
    <option id="op1" >Revision</option>
    <option>Extraccion</option>
    <option>Chequeo</option>
    <option>Implantacion</option>
    <option>Blanqueo Dental</option>
  </select>
<br>
<br>
<button id="buttonXD"type="submit" name="Confirmar">Confirmar</button>
 </form>
 <form action="../accesocompleto.php">
   <button id="buttonXC"type="submit">Regresar</button>
 </form>
 </div>
</section>
<!--Fin de la informacion personal-->
    <!--Pie-->
    <div id="miMenu2">
 <nav id="menu2">
 <ul id="listaMenu2">
 <li><a href="../accesocompleto.php">Regresar</a></li>
 </ul>
 </nav>
 </div>

    
<footer id="pie">
  Derechos Reservados SADCV
</footer>
<!--Fin del pie-->
</div>  
</body>
</html>