<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-2</title>
</head>

<body>
    <?php
    $numeroAnalizar = 4;
    $numeroAnalizar2 = 4;
    $numeroAnalizar3 = 4;

    switch (true) {
        case $numeroAnalizar > $numeroAnalizar2 && $numeroAnalizar3 < $numeroAnalizar:
            echo "El numero $numeroAnalizar mayor que $numeroAnalizar2 y $numeroAnalizar3";
            break;
        case $numeroAnalizar3 > $numeroAnalizar2 && $numeroAnalizar < $numeroAnalizar3:
            echo "El numero $numeroAnalizar3 mayor que $numeroAnalizar2 y $numeroAnalizar";
            break;
        case $numeroAnalizar2 > $numeroAnalizar && $numeroAnalizar3 < $numeroAnalizar2:
            echo "El numero $numeroAnalizar2 mayor que $numeroAnalizar y $numeroAnalizar3";
            break;
        default:
            echo "hay al menos dos numeros iguales $numeroAnalizar $numeroAnalizar2 $numeroAnalizar3";
    }

    ?>
</body>

</html>