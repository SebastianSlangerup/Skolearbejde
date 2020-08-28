<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt 2 Side 2</title>
</head>
<body>
    <?php
    session_start();
    $input = $_GET['input'];
    $number = $_SESSION['number'];
    
    if ($number != $input) {
        echo "Du har brugt ", $_SESSION['input'], " forsøg. Du har ", abs($_SESSION['input']-10), " forsøg tilbage.";
    }
    if ($number == $input) {
        echo "Correct guess!", "<br>";
        session_destroy();
        echo "Du har i alt brugt ", $_SESSION['input'], " forsøg. Dine forsøg nulstilles.";
    }
    elseif ($input < 0 || $input > 100) {
        echo "Invalid Range (1,100)", "<br>";
    }
    elseif (abs($input - $number) > 50) {
        echo "Very far off", "<br>";
    }
    elseif (abs($input - $number) > 19 && abs($input - $number) < 49) {
        echo "You're getting closer", "<br>";
    }
    else {
        echo "You are really close!", "<br>";
    }
    echo "<br>";
    echo "The number you guessed was ", $input, ". and the number was REDACTED.";

    ?>
</body>
</html>