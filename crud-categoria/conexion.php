<?php

function conexion() {
$host = "localhost";
$user = "root";
$pass = "";
$db = "floristeria_palacio";

$connect = mysqli_connect($host, $user, $pass, $db);

return $connect;
}
?>