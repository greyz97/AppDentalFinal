<?php
session_start();
unset ($_SESSION['usuario']);
session_destroy();
header("Location: acceso.php");
?>