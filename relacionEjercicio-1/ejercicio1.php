<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-1</title>
</head>

<body>
    <?php
    $numeroAnalizar = 0;

    switch (true) {
        case $numeroAnalizar % 2 == 0 and $numeroAnalizar > 0:
            echo "El numero $numeroAnalizar es par y ademas es positivo";
            break;
        case $numeroAnalizar % 2 != 0 and $numeroAnalizar > 0:
            echo "El numero $numeroAnalizar es impar y es positivo";
            break;
        case $numeroAnalizar % 2 == 0 and $numeroAnalizar < 0:
            echo "El numero $numeroAnalizar es par y ademas es negativo";
            break;
        case $numeroAnalizar % 2 != 0 and $numeroAnalizar < 0:
            echo "El numero $numeroAnalizar es impar y es negativo";
            break;
        default: 
        echo 'el numero es 0';    
    }

    ?>
</body>

</html>