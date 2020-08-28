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
    if ($number == $input) {
        echo "Correct guess!";
    }
    elseif ($input < 0 || $input > 100) {
        echo "Invalid Range (1,100)";
    }
    elseif (abs($input - $number) > 50) {
        echo "Very far off";
    }
    elseif (abs($input - $number) > 19 && abs($input - $number) < 49) {
        echo "You're getting closer";
    }
    else {
        echo "You are really close!";
    }
    echo "<br>";
    echo "The number you guessed was ", $input, ". and the number was ", $number, ".";

    ?>
</body>
</html>