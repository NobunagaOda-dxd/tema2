<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-10</title>
</head>
<body>
     <?php
    $saldo = 10000;
    $cantidad = 200;
    $variable = 'ingresar';

       switch (true) {
        case $variable == 'retirar':
            if ($saldo > $cantidad) {
            $saldo -= $cantidad;
            echo "tu nuevo saldo es = $saldo";
            }else {
                echo 'saldo insuficiente';
            }
            break;
        case $variable == 'ingresar' :
            $saldo += $cantidad;
            echo "tu nuevo saldo = $saldo";
            break;
        case $variable == 'consultar':
            echo "saldo disponible = $saldo";
            break;
        case $variable == 'salir':
            echo 'adios buen dia :)';
            break;
        default:
            echo "has introducido una funcion no validad";
    }
    ?>
</body>
</html>