<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-6</title>
</head>
<body>
    <?php
    $num = 8;
    do {
        for ($i=1; $i <= 10; $i++) { 
             $resultado = $num * $i;
             echo "$i x $num = $resultado <br> ";
        }
        echo "<br>";
    } while ($i <= 10);
    ?>
</body>
</html>