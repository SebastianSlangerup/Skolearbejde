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
        echo "You have used ", $_SESSION['input'], " attempts. You have ", abs($_SESSION['input']-10), " attempts left.", "<br>";
    }
    if ($_SESSION['finished'] == false) {
        if ($number == $input) {
        echo "Correct guess!", "<br>";
        echo "You have used a total of ", $_SESSION['input'], " guesses. Your guesses will be reset.", "<br>";
        $_SESSION['finished'] = true;
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
    }
    
    if ($_SESSION['finished'] == true) {
        echo "Game over", "<br>";
        echo "The number was ", $number;
        session_destroy();
    }
    echo "<br>";
    



    ?>
</body>
</html>