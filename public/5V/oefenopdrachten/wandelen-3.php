<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wandelchallenge</title>
        <link rel="stylesheet" href="wandelen.css" />
    </head>
    <body>
        <img src="wandelen.png" alt="wandelen" id="wandelen" />
        <h2>Wandelchallenge</h2>
<?php

    $dagen = array( "maandag", "dinsdag", "woensdag", "donderdag"
                  , "vrijdag", "zaterdag", "zondag"
                  );
    $afstand = 5;
    $totaal = 0;
    
    // Er staan op diverse plekken in dit bestand 3 puntjes (...).
    // Pas deze aan naar steeds het juiste gegeven, zodat de juiste output wordt gegeven.
    
?>
        <p>Ik ga de komende <?= count($dagen) ?> dagen een challenge aan. Iedere dag ben ik van plan <?= $afstand ?> kilometer te gaan wandelen.</p>
        <p>In het onderstaande schema kan ik voor iedere dag zien, hoeveel kilometer ik op dat moment in totaal al heb gewandeld.</p>
        <!--
          
            Geef hieronder een tabel weer met alle dagen en de totale afstand die ik op die dag heb gewandeld:
            
            dag       |  afstand
            ----------+--------------
            maandag   |  5 km
            ----------+--------------
            dinsdag   |  10 km
            ----------+--------------
            woensdag  |  15 km
            
            Zorg dat deze tabel altijd klopt. Ook wanneer ik een ander aantal dagen of andere afstand zou gaan lopen.
            Vergeet niet de juiste <th> danwel <td> te gebruiken.
          
        -->
        <table>
            <tr>
                <th scope="col">dag</th>
                <th scope="col">afstand</th>
            </tr>
<?php
    
    for ( $i = 0 ; $i < count($dagen) ; $i++ ) {
        $totaal = $totaal + $afstand;
?>
            <tr>
                <td><?= $dagen[$i]?></td>
                <td><?= $totaal ?> km</td>
            </tr>
<?php
    }

?>
        </table>
    </body>
</html>