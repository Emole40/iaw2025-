<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Hola Mundo</title>
</head>
<body>
    <?php
    // Definir la constante con comillas
    define("SALUDO", "Bienvenido al IES Poligono Sur");
    
    // Imprimir el saludo y añadir un salto de línea
    echo SALUDO . "<br><br>";

    // Declarar variables
    $texto = "Este es un ejemplo de texto.";
	echo "$texto";
	var_dump ($texto);
	echo "<br></br>";
    $nombre = "Eusebio Moreno";
	echo "$nombre";
	var_dump ($nombre);
	echo "<br></br>";
    $boolean = true;
	echo "$boolean";
	var_dump ($boolean);
	echo "<br></br>";
    ?>
</body>
</html>