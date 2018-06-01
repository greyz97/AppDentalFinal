<?php
include "conexion.php";
if(isset($_SESSION['usuario'])) {
	header("Location: ../accesocompleto.php");
}

ini_set('error_reporting',0);
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
      <link rel="stylesheet" href="../icon/style.css">
  <link rel="stylesheet" href="../css/diseño.css">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
<head>
<script type="text/javascript" src="../js/validalogin.js"></script>
	<title>Acceder</title>
</head>
<body>



<div>     
 <header id="login">
<div class="container-form" >
        <div class="header">
            <div class="logo-title">
                <img src="../img/dental.jpg" alt="">
                <h2>Una nueva Sonrisa</h2>
            </div>
            <div class="menu">
                <a href=""><li id="textcolor" class="active">Iniciar Sesion</li></a>
                <a href="Registrar.php"><li id="textcolor2" class="module-register active">Registrarse</li></a>
            </div>
        </div>
        <form class="form" action="../login.php" method="post" onsubmit="return formulario(this)">
            <div class="welcome-form"><h1>BIENVENIDO</h1><h2>APPDENTAL</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="contraseña">
            <div id="Error">
                <center><p id="error"><?php
            echo((isset($_REQUEST["error"]))? $_REQUEST["error"]: "");?></p></center>
            </div> 
            </div>
            <button name="guardar" type="submit"><a id="textboton" >Entrar</a></button>
        	
        </form>
        <form action="../acceso.php" class="form">
    	<button type="submit"><a id="textboton" >Regresar</a></button>   	
    </form>
    </div>
</header>
 </div>


</body>
</html>