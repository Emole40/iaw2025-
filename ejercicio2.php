<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
    $suma_acumulada = 0;
    for ($i =1; $i <= 100; $i++) {
        $suma_acumulada += $i;
        echo "Numero: $i, Suma acumulada: $suma_acumulada\n";
    }
    ?>
</body>
</html>