<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-4</title>
</head>
<body>
    <?php
    $num1 = 10;
    $num2 = 20;
    $variable = '+';
    switch (true) {
        case $variable == '+':
            echo $num1 + $num2;
            break;
        case $variable == '-' :
            echo $num1 - $num2;
            break;
        case $variable == '*':
            echo $num1 * $num2;
            break;
        case $variable == '/':
            echo $num1 / $num2;
            break;
        default:
            echo "has introducido una variable no validad";
    }
    ?>
</body>
</html>