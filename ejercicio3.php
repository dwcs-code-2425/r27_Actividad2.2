<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Ejercicio 3</h1>
    <?php
    echo "Introduzca un valor n\n";
    fscanf(STDIN, "%d", $n);
    $suma = 0;

    for ($i = 1; $i <= 2 * $n-1; $i += 2) {
        $suma += $i;
    }

    printf("La suma vale:  %d", $suma);




    ?>
</body>

</html>