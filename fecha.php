<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fecha</title>
</head>
<body>
    <h1>FECHA CASTELLANO</h1>
    <?php

        $dia = date('N');
        $mes = date('m');

        switch ($mes){
            case '1':
            $mes = 'Enero';
            break;
            case '2':
            $mes = 'Febrero';
            break;
            case '3':
            $mes = 'Marzo';
            break;
            case '4':
            $mes = 'Abril';
            break;
            case '5':
            $mes = 'Mayo';
            break;
            case '6':
            $mes = 'Junio';
            break;
            case '7':
            $mes = 'Julio';
            break;
            case '8':
            $mes = 'Agosto';
            break;
            case '9':
            $mes = 'Septiembre';
            break;
            case '10':
            $mes = 'Octubre';
            break;
            case '11':
            $mes = 'Noviembre';
            break;
            case '12':
            $mes = 'Diciembre';
            break;
        }
        
        switch ($dia){
            case '1':
            $dia = 'Lunes';
            break;
            case '2':
            $dia = 'Martes';
            break;
            case '3':
            $dia = 'Miercoles';
            break;
            case '4':
            $dia = 'Jueves';
            break;
            case '5':
            $dia = 'Viernes';
            break;
            case '6':
            $dia = 'Sabado';
            break;
            case '7':
            $dia = 'Domingo';
            break;
        }

        $ano = date('Y');
        $diaHoy = date('d');

        echo "Hoy es $diaHoy, $dia de $mes de $ano";



    ?>
</body>
</html>

