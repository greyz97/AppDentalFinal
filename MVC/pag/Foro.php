<?php
include_once("conexion.php");
if(!isset($_SESSION['usuario'])) {
  header("Location: login.php");
}
ini_set('error_reporting',0);
?>
<!doctype html>
<html lang="es-ES">
<head>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Foro </title>
</head>
<body>
<div id="L">
<h1>Participacion de Foro <a href="../accesocompleto.php">(Regresar)</a></h1>
<form name="form1" method="post" action="">
  <label for="textarea"></label>
  <center>
    <p>
      <textarea name="comentario" cols="80" rows="5" id="textarea"><?php if(isset($_GET['user'])) { ?>@<?php echo $_GET['user']; ?><?php } ?> </textarea>
    </p>
    <p>
      <input type="submit" <?php if (isset($_GET['id'])) { ?>name="reply"<?php } else { ?>name="comentar"<?php } ?>value="Comentar">
    </p>
  </center>
</form>
<?php
include_once ("../partforo.php");
?>
</div>
</body>
</html>