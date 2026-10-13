<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Top 40</title>
        <link rel="stylesheet" href="top40.css" />
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
               
            }
            .nieuw{
               background-color: blue;
            }
            .gestegen{
                background-color: green; 
            }
            .gezakt{
                background-color: red;
            }
            .gelijk{
                background-color: yellow;
            }
            td {
    padding: 10px;
   
    }

/* Afbeeldingen */
td img {
    width: 70px;
    height: 70px;
}

/* Verschillende kleuren */
.nieuw {
    background-color: lightblue;
}

.gestegen {
    background-color: lightgreen;
}

.gezakt {
    background-color: lightcoral;
}

.gelijk {
    background-color: lightyellow;
}

/* Tekst */
td {
    font-size: 15px;
}

td:first-child {
    font-size: 20px;
    font-weight: bold;
    text-align: center;
}

/* Bij de muis over een rij */


           
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
    
    
    
    <tr class="<?= $verandering ?>">
        <td rowspan="3" > <?= $nummer["notering"] ?> </td> <td rowspan="3"> <img src="<?=  $nummer["afbeelding"] ?>" alt="iets"> </td> <td colspan="2"> <?= $nummer["titel"] ?>  </td> 
    </tr>
    <tr class="<?= $verandering ?>">
        <td colspan="2"> <?= $nummer["artiest"] ?> </td> 
    </tr>
    <tr class="<?= $verandering ?>">
        <td> <?= $nummer["weken"] ?> </td> <td> <?= $nummer["vorige"] ?> </td> 
    </tr>
   
            <?php }?>
</table>
    </body>
</html>