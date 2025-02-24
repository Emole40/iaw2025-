<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$alturaPersona1 = 1.75;
$alturaPersona2 = 1.65;

if ($alturaPersona1 > $alturaPersona2) {
    echo "Persona 1 es más alta que Persona 2";
} elseif ($alturaPersona1 < $alturaPersona2) {
    echo "Persona 2 es más alta que Persona 1";
} else {
    echo "Ambas personas tienen la misma altura";
}
?>

</body>
</html>
