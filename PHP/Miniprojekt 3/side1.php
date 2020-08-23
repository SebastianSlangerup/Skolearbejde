<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $email = "marsmanden1@gmail.com";
    if ($email > 7 && $email < 30) {
        // Code
    }
    if (strpos($email, "@") !== false) {
        // Code
    }
    if (strpos($email, ".dk") !== false) {
        // Code
    }
        echo "Valid Email";
    ?>
</body>
</html>