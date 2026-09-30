<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 5</h1>
    <?php
    echo "Introduzca una calificación\n";
    $nota = 0;
    fscanf(STDIN, "%f", $nota);

    if (is_float($nota)) {

        $parteEnteraNota = floor($nota);

        switch ($parteEnteraNota) {
            case 10:
                echo "Matrícula";
                break;
            case 9:
                echo "Sobresaliente";
                break;
            case 8:
            case 7:
                echo "Notable";
                break;

            case 6:
            case 5:
                echo "Aprobado";
                break;

            default:
                echo "Suspenso";
                break;
        }
    } else {
        echo "Se espera un float";
    }

    // switch (true) {
    //     case ($nota==10):
    //         echo "Matrícula de honor";
    //         break;
    //     case ($nota>=9):    

    //     default:
    //         # code...
    //         break;
    // }

    // switch ($nota) {
    //     case ($nota == 10):
    //         echo "Mat";
    //         break;
    //     case ($nota>=9 && $nota <10):
    //         echo "Sobresaliente";
    //         break;
    //     default:
    //         echo "suspenso";
    // }






    ?>
</body>

</html>