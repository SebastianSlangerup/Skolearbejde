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
    $myVar = 17;
    echo $myVar, "<br>";
    $myVar = 2;
    echo $myVar, "<br>";
    echo "<hr>";

    // Opgave 2
    $myName = "Sebastian";
    echo $myName, "<br>";
    $myName = "Sebastian Slangerup";
    echo $myName;
    echo "<hr>";

    // Opgave 3
    $myvar1 = 17;
    $myvar2 = 9;
    $myvar3 = $myvar1 + $myvar2;
    echo $myvar3;
    echo "<hr>";

    // Opgave 4
    $var1 = "husk";
    $var2 = "at";
    echo $var1 . $var2;
    echo "<hr>";

    // Opgave 5
    $minBy = "Odense";
    echo strlen($minBy);
    echo "<hr>";

    // Opgave 6
    // Koden giver variablen 'i' en værdi af 10
    $i = 10;
    // Derefter giver den variablen en værdi af 1
    $i = 1;
    // Derefter ligger den værdien af 'i' sammen med 1 som giver 2 da værdien på i er '1'
    // og så ligger den summen af det ind på 'i's plads
    $i += 1;
    // Så forhøjer den variablen med 1. Det er en forkortelse af linjen oven over
    $i++;
    // Og sidst printer den resultatet ud.
    echo $i, "<hr>";

    // Opgave 7
    // Først laver koden en variable som hedder 'value' med værdien 10
    $value = 10;
    // Derefter laver koden variablen 'i' med værdien 10
    $i = 10;
    // Så lægger den værdien af value og i sammen og ligger summen ind på i's plads
    $i += $value;
    // Derefter forhøjer den variablen i med 1 og printer resultatet ud. Det burde give 21.
    $i++;
    echo $i, "<hr>";
    ?>
</body>

</html>