<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dag 2</title>
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
    echo "<hr>";

        // Opgave 5
    // Først bliver der defineret en konstant som hedder 'MYNDIG' som har en værdi på 18.
    define("MYNDIG", 18);
    // Derefter bliver der lavet en variabel med værdien 17.
    $alder = 17;
    // Så siger koden at hvis alderen ikke er lige med værdien i konstanten 'MYNDIG' (18)
    // Jamen så skriver den at alderen ikke er 18 år.
    if ($alder != MYNDIG) {
        echo "Alder er ikke 18 år";
    // Og ellers er alderen 18 år.
    }
    else {
        echo "Alder er 18 år";
    }
    echo "<hr>";

        // Opgave 6
    // Først bliver der defineret en variabel med værdien 17.
    $alder = 17;
    // Derefter siger koden at hvis alderen er lige med 18.
    // Så printer den at alderen er lige med 18.
    if ($alder = 18) {
        echo "Alder er 18 år";
    }
    // Ellers så printer den at alderen ikke er lige med 18.
    else {
        echo "Alder er ikke 18 år";
    }
    echo "<hr>";

        // Opgave 7 
    // Syntaksen er nærmest identisk med den i opgave 6.
    // Bortset fra at der er 2 =. Det betyder at alderen SKAL være lige med 18.

        // Opgave 8
    $number = rand(1,6);
    switch($number) {
        case 1:
            echo "I";
        break;
        case 2:
            echo "II";
        break;
        case 3:
            echo "III";
        break;
        case 4:
            echo "IV";
        break;
        case 5:
            echo "V";
        break;
        default:
            echo "VI";
    }
    echo "<br>";
    echo "Numeric number: ", $number;
    ?>
</body>
</html>