<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-3</title>
</head>
<body>
    <?php
    $nota = 10;

    switch (true) {
        case $nota < 5:
            echo "has suspendido $nota";
            break;
        case $nota >= 5 && $nota <= 6.9 :
            echo "has aprobado $nota";
            break;
        case $nota >= 7 && $nota <= 8.9:
            echo "has sacado un notable $nota";
            break;
        case $nota >= 9 && $nota <= 10:
            echo "has sacado un sobresaliente $nota";
            break;
        default:
            echo "has introducido un numero no valido";
    }
    ?>
</body>
</html>