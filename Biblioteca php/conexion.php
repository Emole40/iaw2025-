<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "biblioteca";

$conn = mysqli_connect($server, $user, $password, $database); 
if (!$conn) { 
    die("Conexión fallida: " . mysqli_connect_error()); 
} 
?>

</body>
</html>