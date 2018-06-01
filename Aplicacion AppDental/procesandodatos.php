<?php
include_once("pag/conexion.php");
include_once("Modelo/ClientesDental.php");
$sErr=""; 
$oPersHosp = new ClientesDental();

if(isset($_POST['registra'])){
				$oPersHosp->setNombre($_POST["nombre"]);
				$oPersHosp->setApellidoP($_POST["apellidop"]);
				$oPersHosp->setApellidoM($_POST["apellidom"]);
				$oPersHosp->setCorreo($_POST["correo"]);
				$oPersHosp->setSexo($_POST["sexo"]);
				$oPersHosp->setCiudad($_POST["ciudad"]);
				$oPersHosp->setEstado($_POST["estado"]);
				$oPersHosp->setUsuario($_POST["usuario"]);
				$oPersHosp->setTel($_POST["telefono"]);
				$oPersHosp->setContraseña($_POST["contraseña"]);
				$oPersHosp->setEdad($_POST["edad"]);
				$oPersHosp->insertar();
			header("Location: acceso.php");
	}

if(isset($_POST['Confirmar'])){
	$oPersHosp->setUsuario($_POST["usuario"]);
	$oPersHosp->setFecha(DateTime::createFromFormat('Y-m-d', $_POST["fecha"]));
	$oPersHosp->setHora($_POST["hora"]);
	$oPersHosp->setTipoC($_POST["tipocita"]);
	$oPersHosp->insertarcita();
	header("Location: pag/Citas.php");
}

if(isset($_POST['subir'])){
$type=$_FILES['img_up']['type'];
$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];
$nuevo_path="img/".$name;
    $ori="../img/".$name;
move_uploaded_file($tmp_name,$nuevo_path);
				$oPersHosp->setTitulo($_POST["titulo"]);
				$oPersHosp->setNoticia($_POST["noticia"]);
				$oPersHosp->setImagen($ori);
				$oPersHosp->insertarnoticia();
    header("Location: pag/Noticias.php"); 
	}

if(isset($_POST['subir2'])){
$type=$_FILES['img_up']['type'];
$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];
$nuevo_path="img/".$name;
    $ori="../img/".$name;
move_uploaded_file($tmp_name,$nuevo_path);
    $oPersHosp->setTitulo($_POST["titulo"]);
				$oPersHosp->setTratamiento($_POST["tratamiento"]);
				$oPersHosp->setImagen($ori);
				$oPersHosp->insertartratamiento();
    header("Location: pag/Tratamientos.php"); 
    }

if(isset($_POST['modificar'])){
$type=$_FILES['img_up']['type'];
$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];
$nuevo_path="img/".$name;
    $ori="../img/".$name;
move_uploaded_file($tmp_name,$nuevo_path);
    $id=$_SESSION["idN"];
                $oPersHosp->setIdN($id);
                $oPersHosp->setTitulo($_POST["titulo"]);
				$oPersHosp->setNoticia($_POST["noticia"]);
				$oPersHosp->setImagen($ori);
				$oPersHosp->modificarnoticia();
     header("Location: pag/Noticias.php"); 
	}

if(isset($_POST['modificar2'])){
$type=$_FILES['img_up']['type'];
$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];
$nuevo_path="img/".$name;
    $ori="../img/".$name;
move_uploaded_file($tmp_name,$nuevo_path);
    $id=$_SESSION['id2'];
                $oPersHosp->setIdT($id);
                $oPersHosp->setTitulo($_POST["titulo"]);
				$oPersHosp->setTratamiento($_POST["tratamiento"]);
				$oPersHosp->setImagen($ori);
				$oPersHosp->modificartratamiento();
     header("Location: pag/Tratamientos.php"); 
	}

if(isset($_REQUEST["id"])){
	$a=$_REQUEST["id"];
	$oPersHosp->setIdN($a);
	$oPersHosp->borrar();
	header("Location: pag/Noticias.php"); 
}
if(isset($_REQUEST["id2"])){
	$a=$_REQUEST["id2"];
	$oPersHosp->setIdT($a);
	$oPersHosp->borrar2();
	header("Location: pag/Tratamientos.php"); 
}

exit();
?>