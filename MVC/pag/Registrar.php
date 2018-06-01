<!DOCTYPE html>
<html lang="es">
<head>
<script type="text/javascript" src="../js/validaregistrar.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
 <title>RegistrarUsuario</title>
 <link rel="stylesheet" href="../css/estiloregistro.css">
 <link rel="stylesheet" href="../icon/style.css">
</head>
<body>
 <!--Registrar!-->
<section id="seccion">
 <div class="container-form2">
        <div class="header">
            <div class="logo-title">
                <img src="../img/dental.jpg" >
                <h2>APPDENTAL</h2>
            </div>
            <div class="menu">
                <a href="datos.php"><li class="module-register active">Registrarse</li></a>
            </div>
        </div>
        <form action="../procesandodatos.php" method="post" class="form" onsubmit="return formulario(this)">
            <div class="welcome-form"><h1>BIENVENIDO</h1><h2>APPDENTAL</h2></div>

            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input id="correo" type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input id="usuario" type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input id="contraseña" type="password" placeholder="Contraseña" name="contraseña">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input id="nombre" type="text" placeholder="Nombre" name="nombre">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input id="apellidop" type="text" placeholder="Apellido Paterno" name="apellidop">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input id="apellidom" type="text" placeholder="Apellido Materno" name="apellidom">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input id="edad" type="text" placeholder="Edad" name="edad" maxlength="2">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-users"></label>
                <input id="sexo" type="text" placeholder="Sexo" name="sexo">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-phone"></label>
                <input id="telefono" type="text" placeholder="Telefono" name="telefono" maxlength="10">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-apartment"></label>
                <input id="ciudad" type="text" placeholder="Ciudad" name="ciudad">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-apartment"></label>
                <input id="estado" type="text" placeholder="Estado" name="estado">
            </div>
            <button id="registrar" type="submit" name="registra">Registrarse</button>
    </form>
    <form action="../acceso.php" class="form">
    	<button type="submit"><a id="textboton" >Regresar</a></button>   	
    </form>
    </div>
    </section>
  
 <!-- Fin de Registrar-!-->
</body>
</html>
