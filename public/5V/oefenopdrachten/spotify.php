<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Spotify Top 10</title>
    </head>
    <body>
        <h1>Spotify Top 10</h1>
<?php

    $top10 = array( "Qlas, Antoon & Boef – 100 Tranen"
                  , "SIENNA SPIRO – Great Expectation"
                  , "Bankzitters & Robert van Hemert – Rapido"
                  , "Milolaathetlukken – Alleen Jij"
                  , "Rutger van Barneveld – Zwoele Zomernachten"
                  , "Shakira, Burna Boy – Dai Dai"
                  , "Justen de Wildt – Cheerio"
                  , "ANOTR, 54 Ultra – Talk To You"
                  , "HUGEL, SOLTO – Jamaican (Bam Bam)"
                  , "Ray & Beer – Zonnebank"
                  );
    ?>
    <ol>
<?php
    for ( $i = 0 ; $i < count($top10) ; $i++ ){
?>      
        <li> <?= $top10[$i]?></li>
<?php
    }
?>
    </ol>
    </body>
</html>