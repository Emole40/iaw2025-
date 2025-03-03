<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            function es_par($numero) {
            if ($numero % 2 == 0) {
                return true;
            } else {
                return false;
            } }
        $numero = 4;
        if (es_par($numero % 2 == 0)){
            return true;
        } else {
            return false;
        }
?>
</body>
</html>