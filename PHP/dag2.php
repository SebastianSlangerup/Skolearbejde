<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Opgave 1
    $alder = 18;
    if ($alder > 17) {
        echo "Du har stemmeret";
        }
    echo "<hr>";
    
        // Opgave 2
    $alder = 16;
    if ($alder > 17) {
        echo "Du har stemmeret";
        }
    else {
        echo "Du har ikke stemmeret";
        }
    echo "<hr>";

        // Opgave 3
    $alder = 16;
    if ($alder > 17) {
        echo "Du har stemmeret";
        }
    elseif ($alder == 17) {
        echo "Du har stemmeret om 1 år";
        }
    else {
        echo "Du har ikke stemmeret";
        }
    echo "<hr>";

        // Opgave 4
    $alder = rand(-100, 200);
    if ($alder < 0 || $alder > 130) {
        echo "Ugyldig alder";
        }
    elseif ($alder < 18) {
        echo "Du får ungdomsrabat";
    }
    elseif ($alder <= 65 && $alder >= 18) {
        echo "Du får ingen rabat";
    }
    else {
        echo "Du får pensionistrabat";
    }

    ?>
</body>
</html>