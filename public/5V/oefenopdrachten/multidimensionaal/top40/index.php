<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Top 40</title>
        <link rel="stylesheet" href="top40.css" />
        <style>
            td{
                border: 1px solid black;
            }
            .nieuw{
                color blue: 
            }
            .gestegen{
                color groen: 
            }
            .gezakt{
                color rood: 
            }
            .gelijk{
                color geel: 
            }
            </style>
    </head>
    <body>
        <img id="logo" src="https://www.top40.nl/img/generic/logo/top40.svg" alt="Top 40" />
    <table>
<?php

    include("top40.php");
    for ( $i = 0 ; $i < count($top40) ; $i++ ){

    $nummer = $top40[$i];

    $huidige_positie = $nummer["notering"];
    $vorige_positie =   $nummer["vorige"]; 


    if ($vorige_positie == "-") {
        $verandering = "nieuw";
    } elseif ($huidige_positie < $vorige_positie) {
        $verandering = "gestegen";
    } elseif ($huidige_positie > $vorige_positie) {
        $verandering = "gezakt";
    } else {
        $verandering = "gelijk";    
    }
?>
    
    
    
    <tr>
        <td rowspan="3" class="<?= $verandering ?>"> <?= $nummer["notering"] ?> </td> <td rowspan="3"> <img src="<?=  $nummer["afbeelding"] ?>" alt="iets"> </td> <td colspan="2"> <?= $nummer["titel"] ?>  </td> 
    </tr>
    <tr>
        <td colspan="2"> <?= $nummer["artiest"] ?> </td> 
    </tr>
    <tr>
        <td> <?= $nummer["weken"] ?> </td> <td> <?= $nummer["vorige"] ?> </td> 
    </tr>
   
            <?php }?>
</table>
    </body>
</html>