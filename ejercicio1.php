<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <?php
    const CM_PULGADAS_RATIO = 2.54;
    const PULGADAS_PIES_RATIO = 12;

    echo "Introduzca la altura en cm\n";
    fscanf(STDIN, "%f", $altura);

    $pulgadas = $altura / CM_PULGADAS_RATIO;
    $pies = $pulgadas / PULGADAS_PIES_RATIO;

    printf("<p> La altura en pulgadas es %.2f </p>",  $pulgadas);
    printf("<p> La altura en pies es %.2f </p>",  $pies);

    ?>
</body>

</html>