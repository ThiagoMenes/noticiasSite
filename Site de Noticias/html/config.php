<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "google";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
ini_set('display_errors',1);
ini_set('display-startup_errors',1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');
header("Pragma: no-cache");
?>