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
    echo "Introduzca un valor n\n";
    fscanf(STDIN, "%d", $n);
    echo "<p> Lista de divisores del número: $n </p>";


    // $resultado = (int)($n/2); 
    // echo $resultado; 

    echo "<ul>";
    for ($i = floor($n / 2); $i >= 2; $i--) {
        if (($n % $i) == 0) {
            echo "<li>$i</li>";
        }
    }
    echo "<li>1</li>";

    echo "</ul>";





    ?>
</body>

</html>