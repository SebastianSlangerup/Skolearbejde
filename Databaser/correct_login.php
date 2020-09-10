<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correct Login</title>
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION['login'])) {
            header("location:login.php");
        }
    ?>

    Hej og velkommen til min første login beskyttet hjemmeside

    <form action="logout.php" method="POST">
    <input type="submit" name="logout" value="Log ud">
    </form>
</body>
</html>