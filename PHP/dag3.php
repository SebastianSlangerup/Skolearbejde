<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dag 3</title>
</head>
<body>
    <?php
        // Opgave 1
    $maks = 10;
    $i = 1;
    $sum = 0;

    while ($i < $maks) {
        echo $i, "<br>";
        $sum += $i;
        $i++;
    }
    echo $sum;
    echo "<hr>";

        // Opgave 2
    $maks = 10;
    $i = 1;
    $sum = 0;

    // Do-loops vil altid kører mindst én gang
    do {
        echo $i, "<br>";
        $sum += $i;
        $i++;
    } while ($i < $maks);
    echo $sum;
    echo "<hr>";

        // Opgave 3
    $sum=0;
    for ($i = 1; $i < $maks; $i++) { 
        echo $i, "<br>";
        $sum += $i;
    }
    echo $sum;
    echo "<hr>";

        // Opgave 4
    // I opgave 1 og 3 bliver resultaterne 0, da programmet ikke kører. Programmet kører ikke fordi
    // De loops tjekker deres condition først og derefter kører deres kode. Hvorimod et do-loop kører
    // Koden først og derefter tjekker om conditionen er sandt eller falsk.

        // Opgave 5
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    echo "<hr>";

        // Opgave 6
    $i = 10;
    while ($i > 0) {
        $i--;
        echo $i;
    }
    echo "<hr>";

        // Opgave 1 (Arrays)
//        $NavnListe = array('Peter','Niels','Mikkel','Flemming', 'Hans', 'Nikolaj');
//        
//        echo 'element nr. 0 er :'.$NavnListe[0].'<br>';
//        echo 'element nr. 1 er :'.$NavnListe[1].'<br>';
//        echo 'element nr. 2 er :'. $NavnListe[2].'<br>';
//        echo 'element nr. 3 er :'. $NavnListe[3].'<br>';
//        echo 'element nr. 4 er :'. $NavnListe[4].'<br>';
//        echo  'element nr. 5 er :'. $NavnListe[5].'<br>';
    
    $NavnListe = array('Peter', 'Niels', 'Mikkel', 'Hans', 'Nikolaj');
    for ($i = 0; $i < 5; $i++) { 
        echo "Element Nr. ", $i, " er: ".$NavnListe[$i], "<br>";
    }
    echo "<hr>";

        // Opgave 2 (Arrays)
    $månedsLgd = array('31', '29', '31', '30', '31', '30', '28', '29', '31', '31', '29', '30');
    $måned = array('Januar', 'Februar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December');
    for ($i = 0; $i < 12; $i++) { 
        echo $måned[$i], " har ", $månedsLgd[$i], " dage.", "<br>";
    }
    ?>
</body>
</html>