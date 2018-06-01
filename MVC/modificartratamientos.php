<?php 
include_once("Modelo/Usuario.php");
include_once("Modelo/ClientesDental.php");
$sErr=""; 
$oPersHosp = new ClientesDental();
$arrPersHosp=null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
 <title>Noticias</title>
 <link rel="stylesheet" href="css/diseño.css">
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
 <li><a href="acceso.php" id="inicio">Inicio</a></li>
 <li><a href="pag/Tratamientos.php">Tratamientos</a></li>
 <li><a href="pag/Noticias.php">Noticias</a></li>
 <li><a href="pag/Conocenos.php">Conocenos</a></li>
 <li><a href="pag/Promociones.php">Promociones</a></li>
 </ul>
 </nav>
 </div>
    
    
<div id="trata">
	<div id="noticias">
        <?php 
        if(isset($_REQUEST["id2"])){
        $a=$_REQUEST["id2"];
        session_start();
        $_SESSION['IDNO']=$a;
        $oPersHosp->setIdT($a);
        $oPersHosp->buscar();
        ?>
	<form action="procesandodatos.php" method="post" enctype="multipart/form-data">
		 <label id="tit">Titulo del Tema</label>
         <input id="tit2" type="tetx" name="titulo" value="<?php echo $oPersHosp->getTitulo(); ?> ">
         <label id="informacion">Informacion</label>
	     <textarea id="todo" name="tratamiento" > <?php echo $oPersHosp->getTratamiento(); ?></textarea>
	     <label id="picture">Imagen</label>
	     <input id="mover"type="file" name="img_up" >
        <input id="cargar"value="Subir" type="submit" name="modificar2">
	</form>
	</div>
</div>

    <?php
        }
        ?>
    <!--redes sociales-->
<div id=apps>
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
</div>	
</body>
</html>