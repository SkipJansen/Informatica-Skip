<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>streamingplatform</title>
        <link rel="stylesheet" href="streamingplatform.css" />
    </head>
    <body>
<?php

    include("films.php");
     for ( $i = 0 ; $i < count($films) ; $i++ ){

    $nummer = $films[$i];

?>
 <img
            src="afbeeldingen"$nummer
            alt="<?php echo $films['titel']; ?>"
        >

        <div class="info">
            <h3><?php echo $films['titel']; ?></h3>
            <p><?php echo $films['synopsis']; ?></p>
        </div>
    </div>

<?php } ?>
    </body>
</html>