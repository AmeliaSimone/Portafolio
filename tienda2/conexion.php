<?php
$hostname = "localhost";
$username = "amfeliu_efimera";
$password = "DgZI^hj^[rBY";
$database = "amfeliu_efimera";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn ->connect_error) {
die('Error de Conexión (' . $conn->connect_errno . ') ' . $conn->connect_error);
}
?>



