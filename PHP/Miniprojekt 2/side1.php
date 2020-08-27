<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt 2 Side 1</title>
</head>
<body>
    <?php 
    $tal = rand(1,100);
    echo $tal;
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        input: <input type="text" name="input" />
        <input type="submit" value="Tryk den i bund!!!" />
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        
        if ($input == $tal) {
            echo "Rigtig flot gættet";
        }
        elseif ($input < 0 || $input > 100) {
            echo "Ude for angivne rækkevide (1,100)";
        }
        elseif (abs($input) > 50) {
            echo "Meget langt forbi";
        }
        elseif (abs($input > 19 && abs($input < 49))) {
            echo "Du er ikke helt ved siden af";
        }
        else {
            echo "Tampen brænder!";
        }
    }
    ?>
    
</body>
</html>