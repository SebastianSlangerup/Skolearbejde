<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dag 3</title>
</head>
<body>
    <?php
        // Opgave 1
    $maks = 10;
    $i = 1;
    $sum = 0;

    while ($i < $maks) {
        echo $i, "<br>";
        $sum += $i;
        $i++;
    }
    echo $sum;
    echo "<hr>";

        // Opgave 2
    $maks = 10;
    $i = 1;
    $sum = 0;

    // Do-loops vil altid kører mindst én gang
    do {
        echo $i, "<br>";
        $sum += $i;
        $i++;
    } while ($i < $maks);
    echo $sum;
    echo "<hr>";

        // Opgave 3
    $sum = 0;
    for ($i = 1; $i < $maks; $i++) { 
        echo $i, "<br>";
        $sum += $i;
    }
    echo $sum

        // Opgave 4
    // $i er 
    ?>
</body>
</html>