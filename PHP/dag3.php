<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dag 3</title>
</head>
<body>
    <?php
    $maks = 10;
    $i = 1;
    $sum = 0;

    while ($i <= $maks) {
        echo $i, "<br>";
        $sum = $i + $sum;
        $i++;
    }
    echo $sum
    ?>
</body>
</html>