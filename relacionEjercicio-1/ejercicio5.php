<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-5</title>
</head>
<body>
     <?php
    $num = 1;
    do {
        if ($num % 2 == 0 && $num % 5 == 0) {
            echo "Es par y multiplo de 5 = $num <br>";
        }        
        $num++;
    } while ($num <= 100);
    ?>
</body>
</html>