<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt 3</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        email: <input type="text" name="email" />
        <input type="submit" />
    </form>
    
    <?php
    echo $_POST['email'], "<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        if ($email < 7) {
            echo "Email er for kort.";
        }
        else if ($email > 30) {
            echo "Email er for lang.";
        }
        else if (strpos($email, "@") == false) {
            echo "Indtast gyldig email. (@ mangler)";
        }
        else if (strpos($email, ".dk") == false) {
            echo "Indtast gyldig email. (.dk mangler)";
        }
        else {
            echo "Valid Email";
        }
    }
    ?>
</body>
</html>