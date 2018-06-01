<?php
session_start();
$con= pg_connect("host='localhost' dbname=AppDental port=5432 user=postgres password=cristovive") or 
    die("Error de conexion".pg_last_error());
$_SESSION['con']=$con;
?>