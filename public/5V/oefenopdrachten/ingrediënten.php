<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Beef and Guinness pie - Ingrediënten</title>
    </head>
    <body>
        <h1>Beef and Guinness pie</h1>
        <h3>Ingrediënten</h3>
<?php

    $ingredienten = array( "2 rode uien"
                         , "3 teentjes knoflook"
                         , "2 selderijstengels"
                         , "2 wortels"
                         , "800g runderlappen"
                         , "rosemarijn"
                         , "zeezout"
                         , "vers gemalen zwarte peper"
                         , "1 blik Guinness"
                         , "30g boter"
                         , "2 eetlepels bloem"
                         , "200g geraspte cheddar"
                         , "250g bladerdeeg"
                         , "1 ei"
                         );
?>
    <ul>
<?php 
    for ( $i = 0 ; $i < count($ingredienten) ; $i++) {
?>
    <li> <?= $ingredienten[$i]?> </li>
<?php
    }
    ?>
    </body>
</html>