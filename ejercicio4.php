<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Ejercicio 4</h1>
    <?php
    echo "Introduzca un valor n\n";
    fscanf(STDIN, "%d", $n);
    $suma = 1;
    $ter = 1;

    for ($k = 1; $k <= $n; $k++) {
        $ter = $ter / 2;
        $suma += $ter;
    }

    printf("La suma vale %.2f", $suma);






    ?>
</body>

</html>