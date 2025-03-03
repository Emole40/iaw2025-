<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? 
    $suma_acumulada = 0;
    for ($i =1; $i<= 100; $i++){
        if ($i % 5 == 0) {
            echo "Multiplo de 5: %i\n";
            $suma_acumulada += $i;
        }
    }
    $cuadrado_de_la_suma = $suma_acumulada * $suma_acumulada;
    echo "El cuadrado de la suma de los multiplos de 5 es: $cuadrado_de_la_suma\n";
?>
</body>
</html>