<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = htmlspecialchars($_GET['nombre']);
    echo "<h2>Pedido realizado exitosamente. ¡Gracias, $nombre!</h2>";
}
?>
