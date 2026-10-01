<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cijfers</title>
    </head>
    <body>
        <h2>Cijfers</h2>
<?php

    $cijfers = array( 6.2, 6.3, 7.0, 5.3, 7.5, 7.0, 7.8, 6.1, 6.9
                    , 6.4, 6.5, 5.3, 7.2, 7.8, 5.0, 4.9, 6.8, 6.3
                    , 6.3, 8.0, 7.1, 6.4, 5.1, 6.5, 6.8
                    );

    $aantal = count($cijfers);

    // bereken de som van de cijfers
    // in de praktijk gebruik je array_sum($cijfers), maar voor
    // deze opgave wil ik, dat je zelf de som van alle cijfers
    // uit de array bepaalt.
    $totaal = 0;
    foreach ($cijfers as $cijfer) {
    $totaal += $cijfer;
    }
    
    // het gemiddelde volgt uit de som gedeeld door het aantal.
    $gemiddelde = $totaal / $aantal;

$onvoldoendes = 0;
$laagste = $cijfers[0];
$hoogste = $cijfers[0];
for ($i = 0; $i < $aantal; $i++) {
//foreach( $cijfers as $getal) { ;
if ($cijfers[$i] < $laagste){
$laagste = $cijfers[$i] ;
} 
if ($cijfers[$i] > $hoogste){
    $hoogste = $cijfers[$i] ;
}
if ($cijfers[$i] <= 5.4){
    $onvoldoendes++ ;
}
}



?>
        <p>Het gemiddelde cijfer is <?= $gemiddelde ?></p>
        <p>Het laagste cijfer is <?= $laagste ?></p>
        <p>Het hoogste cijfer is <?= $hoogste ?></p>
        <p>Het aantal onvoldoendes is <?= $onvoldoendes ?></p>
        <p>Het percentage onvoldoendes is <?= 100*$onvoldoendes / $aantal ?></p>
    </body>
</html>