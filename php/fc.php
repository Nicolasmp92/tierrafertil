<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "prueba";//nombre de la base de datos

$connect = new mysqli($host,$user,$pass,$db) or die("error". mysqli_errno($connect));
?>
 