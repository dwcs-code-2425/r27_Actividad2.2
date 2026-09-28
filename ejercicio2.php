<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php 
    echo "Introduzca un valor x\n";
    fscanf(STDIN,"%d", $x);
    $f=0;
    if($x>0){
        $f = $x**2;
    }

    printf("<p>El valor de la función es %.2f</p>", $f);


    ?>
</body>
</html>