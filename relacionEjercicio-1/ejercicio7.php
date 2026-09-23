<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-7</title>
</head>
<body>
    <?php
    $num = 1;
    do {
        for ($i=1; $i <= 10; $i++) { 
             $resultado = $num * $i;
             echo "$i x $num = $resultado <br> ";
        }
        echo "<br>";
        $num++;
    } while ($num <= 10);
    ?>
</body>
</html>