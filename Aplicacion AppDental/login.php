<?php
include_once("pag/conexion.php");
if(isset($_POST['guardar'])) {
    $adm="greyz97";
    $cadm="1234#";
    $usuario = $_POST['usuario'];
	$contrasena = $_POST['contraseña'];
	$query = pg_query($con,"SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña = '$contrasena'");
	$contar = pg_num_rows($query);
	if ($contar != 0) {
		while($row=pg_fetch_array($query)) {
			
            if($usuario == $adm && $contrasena == $cadm) 
			{
				$_SESSION['usuario'] = $usuario;
     				$_SESSION['id'] = $row['id_usuario'];
				$_SESSION['rango'] = $row['rango'];	
				$_SESSION['adm']= $adm;
                header("Location: accesocompleto.php");
                
			}
            //intermedio
            else if($usuario == $row['usuario'] && $contrasena == $row['contraseña']) 
			{
				$_SESSION['usuario'] = $usuario;
     				$_SESSION['id'] = $row['id_usuario'];
				$_SESSION['rango'] = $row['rango'];
				header("Location: accesocompleto.php");	
			}	
		} 
	} else
    {
        $error="contraseña e usuario no son validos";
        header("Location: pag/Acceder.php?error=".$error);
    }
}
?>