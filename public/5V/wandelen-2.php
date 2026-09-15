<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wandelchallenge</title>
    </head>
    <body>
        <img src="wandelen.png" alt="wandelen" style="float: right;" />
        <h2>Wandelchallenge</h2>
<?php

    $dagen = 7;
    $afstand = 5;
    
    
?>
        <p>Ik ga de komende <?= $dagen ?> dagen een challenge aan. Iedere dag ben ik van plan <?= $afstand ?> kilometer te gaan wandelen.</p>
        <p>In het onderstaande schema kan ik voor iedere dag zien, hoeveel kilometer ik op dat moment in totaal al heb gewandeld.</p>
        <!--
          
            Geef hieronder opnieuw een tabel weer, maar dan een liggende tabel (met per dag een kolom i.p.v. rij)
            
            dag       |  1      |  2      |  3
            ----------+---------+---------+---------
            afstand   |  5 km   |  10 km  |  15 km
            
            
            Zorg dat ook deze tabel altijd klopt.
            Wat moet je nu anders doen? Let ook op het juiste gebruik van <th> en <td>.
          
        -->

        <table>
            <tr><th> dag </th>
            <th> dag </th>
</tr>
            
<?php 

    for ($dag = 1 ; $dag <= $dagen ; $dag++){

?>
            <tr>
                <td> <?= $dag?></td>
                <td> <?= $dag * $afstand?></td>
<?php
            } ?>
    </body>
</html>