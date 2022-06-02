<?php

$dbhost= "localhost";
$dbuser = "root";
$dbpass = "rufina";
$dbname = "login";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("No hay conexión: " .mysqli_connect_error());

}

$nombre = $_POST["usuario"];
$pass = $_POST["password"];

$query = mysqli_query ($conn,"SELECT * FROM LOGIN WHERE usuario = '".$nombre"' and password = '".$pass"'" );
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    echo "Bienvenido: " .$nombre;
}
elseif($nr == 0)
{
    echo "No ingreso, el usuario no existe";
}

?>