<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>meest gestreamde nummer op Spotify</title>
    </head>
    <body>
        <h1>meest gestreamde nummer op Spotify</h1>
<?php

    $nummer = array( "titel"       => "Blinding Lights"
                   , "artiest"     => "The Weeknd"
                   , "album"       => "After Hours"
                   , "duur"        => "3:22"
                   , "afbeelding"  => "<img src=blinding-lights.png /> "
                   );
 
?>
<p> Het meest gestreamde nummer op spotify dit jaar is <?= $nummer["titel"]?> van <?= $nummer["artiest"]?>. Het is afkomstig van het album <?= $nummer["album"]?> en duurt <?= $nummer["duur"]?>.</p>
<p> <?= $nummer["afbeelding"]?></p>
    </body>
</html>