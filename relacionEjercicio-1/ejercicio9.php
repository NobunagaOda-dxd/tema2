<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-9</title>
</head>
<body>
    <?php
    $num = 1;
    $resultadoDeMultiplos3 = 0;
    $resultadoImpares = 0;
    $resultadoPares = 0;
    $resultado = 0;
    do {
        $resultado += $num;
        if ($num % 2 == 0) {
            $resultadoPares += $num;
        }if ($num % 2 != 0) {
            $resultadoImpares += $num; 
        }if ($num % 3 == 0) {
            $resultadoDeMultiplos3 += $num; 
        }
        $num++;
    } while ($num <= 100);
    
    echo " <h1>Resultados finales</h1> 
        resultado global = $resultado <br>
        resultado pares = $resultadoPares <br>
        resultado impares = $resultadoImpares <br>
        resultado multiplos de 3 = $resultadoDeMultiplos3"
    ?>
</body>
</html>