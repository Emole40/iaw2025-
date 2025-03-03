<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$i = 1;
$suma = 0;
while ($i <= 50) {
    $cuadrado = $i * $i;
    echo "El cuadrado de $i es: $cuadrado; 
    $suma += $cuadrado;
    $i++;
}
echo "El total es: $suma\n";
?>
</body>
</html>