<?php 
include_once("conexion.php");
include_once("../Modelo/Usuario.php");
include_once("../Modelo/ClientesDental.php");
$sErr=""; 
$oPersHosp = new ClientesDental();
$arrPersHosp=null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
 <title>Tratamientos</title>
 <link rel="stylesheet" href="../css/diseño.css">
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
 <li><a href="../acceso.php" id="inicio">Inicio</a></li>
 <li><a href="Tratamientos.php">Tratamientos</a></li>
 <li><a href="Noticias.php">Noticias</a></li>
 <li><a href="Conocenos.php">Conocenos</a></li>
 <li><a href="Promociones.php">Promociones</a></li>
 </ul>
 </nav>
 </div>
<!--Fin del Menu lateral izquierdo-->


<?php
    if(isset($_SESSION['adm'])){
    if($_SESSION['usuario'] == $_SESSION['adm'])
?>
    <div id="trata">
    
    
    <table border="1">
    <tr>
    <td>Id</td>
    <td>Titulo</td>
    <td>Informacion</td>
    <td>imagen</td>
    </tr>
                    
        
     <?php 
        $arrPersHosp= $oPersHosp->buscarTodos2();
        foreach($arrPersHosp as $oPersHosp){?>
    <tr>
        <td><?php echo $oPersHosp->getIdT(); ?></td>
        <td><?php echo $oPersHosp->getTitulo(); ?></td>
    <td><?php echo $oPersHosp->getTratamiento(); ?></td>
        <td><img src="<?php echo $oPersHosp->getImagen(); ?>" width="200px"></td>
        <?php echo "<td><a id='md' href='../modificartratamientos.php?id2=".$oPersHosp->getIdT()."'>Editar</a><br><a id='md' href='../procesandodatos.php?id2=".$oPersHosp->getIdT()."'>Eliminar</a></td>"; ?>
        </tr>
    
    
<?php } ?>    
    
</table>
        <form action="../agregartratamiento.php" method="post">
        <button id="crear" type="submit" name="nuevo" >Crear Nuevo</button>
    </form>
    </div>
<!-----aqui va lo de la tabla agregar noticia




fin de lo de l tabla agregar noticia-->
<?php
    } else {
?>

    <!--Informacion principal-->
<div id="trata">    
    <?php 
    $arrPersHosp= $oPersHosp->buscarTodos2();
        foreach($arrPersHosp as $oPersHosp){?>
        <img id="img2" src="<?php echo $oPersHosp->getImagen(); ?>">
    <h3><?php echo $oPersHosp->getTratamiento(); ?></h3>
    <?php
    }
    ?>
    </div>
    <!--Fin de la informacion personal-->
    <?php
    }
        ?>

<!--redes sociales-->
<div id=apps>
 <aside id="columna2">
 	<h1 >Sigueme en:</h1>
 <a href="https://wwww.facebook.com/">
   <figure>
     <img src="../img/face.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 <a href="https://www.instagram.com/">
   <figure>
     <img src="../img/insta.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 <a href="https://www.youtube.com/">
   <figure>
     <img src="../img/you.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
     <a href="https://www.googlemaps.com/">
   <figure>
     <img src="../img/iconomap.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 
 </aside>
 </div>
<!--fin de redes sociales-->
<?php
include_once "../footer.html";
?>

<!--Pie-->
<!--Fin del pie-->
</div>	
</body>
</html>