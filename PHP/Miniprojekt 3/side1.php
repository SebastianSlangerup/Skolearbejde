<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt 3</title>
</head>
<body>
    <form action="<?php echo $_POST['PHP_SELF'];?>" method="post">
        email: <input type="text" name="email" />
        <input type="submit" />
    </form>
    
    <?php
/*     $email = ($_POST[email]);
    if ($_POST[email] == "POST") {
        if ($email < 7 || $email > 30) {
            echo "Intast gyldig email.";
        }
        else if (strpos($email, "@") == false) {
            echo "Intast gyldig email. (@ mangler)";
        }
        else if (strpos($email, ".dk") == false) {
            echo "Intast gyldig email. (.dk mangler)";
        }
        else {
            echo "Valid Email";
        }
    } */
    ?>
</body>
</html>