<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <h1>Ejercicio 6</h1>
    <?php
    $numTiradas = 0;

    do {
        $dado = rand(1, 6);
        $numTiradas++;
        echo "<p>La tirada $numTiradas es: $dado</p>";
    } while ($dado != 5);

    echo "<p>Se han necesitado $numTiradas tiradas para obtener un 5</p>";





    ?>
</body>

</html>