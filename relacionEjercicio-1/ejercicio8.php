<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio-8 Resuelto</title>
</head>
<body>
    <?php
    // 1. Generamos un número al azar, por ejemplo entre 1 y 100[cite: 1]
    $numero = rand(1, 100); 

    // 2. Comprobamos si es par usando el operador módulo. Si lo es, le sumamos 1.
    if ($numero % 2 == 0) {
        $numero++; // El operador ++ incrementa el valor en 1
    }

    echo "<h3>Tabla de impares empezando por el $numero</h3>";
    
    // 3. Abrimos la tabla asegurando que se muestran los bordes[cite: 1]
    echo "<table border='1'>";

    // 4. Bucle externo para crear las 10 filas
    for ($fila = 1; $fila <= 10; $fila++) {
        echo "<tr>";

        // 5. Bucle interno para crear las 10 columnas de cada fila
        for ($columna = 1; $columna <= 10; $columna++) {
            
            // Imprimimos la celda incrustando la variable[cite: 2]
            echo "<td>$numero</td>";
            
            // 6. Sumamos 2 con el operador de asignación para asegurar el siguiente impar[cite: 3]
            $numero += 2; 
        }

        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>