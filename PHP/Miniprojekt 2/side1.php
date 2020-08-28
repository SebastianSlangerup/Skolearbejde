<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt 2 Side 1</title>
</head>
<body>
    <?php 
    session_start();
    $_SESSION['finished'] = false;
    if (isset($_SESSION['input'])) {
        $_SESSION['input']++;
    }
    else {
        $_SESSION['input'] = 1;
        $_SESSION['number'] = rand(1,100);
    }
    if ($_SESSION['input'] >= 10) {
        $_SESSION['finished'] = true;
    }
    ?>
    <form action="side2.php" method="GET">
        input: <input type="text" name="input" />
        <input type="submit" value="Press the GODDAMN BUTTON!" />
    </form>
    <?php echo $_SESSION['number']; ?>
</body>
</html>