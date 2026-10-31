<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>streamingplatform</title>
        <link rel="stylesheet" href="streamingplatform.css" />
        
    </head>
    <body>
    

    <h1>Top 10 populairste films</h1>
         


    <div class = "gridcontainer">
<?php

    include("films.php");
     for ( $i = 0 ; $i < count($films) ; $i++ ){

    $nummer = $films[$i];

    if ($nummer["notering"] == 10) {
        $class = "tien" ;
    } 
    else {
        $class = "" ;
    }

?>


        <div class = "film <?= $class ?> ">
                <div class = "notering">
                    <?= $nummer["notering"] ?> 
                </div>
            <div class = "poster">
             <img src="afbeeldingen/<?= $nummer["image"] ?>" alt="iets">
            <?php if ($nummer["nieuw"] == true) { ?>
                <span class="nieuw">NIEUW</span>
            <?php } ?>
                <div class = "informatie">
                    <h3> <?= $nummer["titel"] ?></h3>
                    <p class="leeftijd">
                        <?= $nummer["leeftijd"] ?>
                    </p>
                    <p>Genre: <br><?= $nummer["genre"] ?> </p>
                    <p>Duur: <br><?= $nummer["duur"] ?> minuten </p>
                    <p>Jaar: <br><?= $nummer["jaar"] ?> </p>
                    <p>Synopsis:<br> <?= $nummer["synopsis"] ?> </p>
                    <p>Cast: <br>
                         <?php
                            for ($j = 0; $j < count($nummer["cast"]); $j++) {
                                echo $nummer["cast"][$j];

                            if ($j < count($nummer["cast"]) - 1) {
                                echo ",";
                            }
                            }
                        ?>
                            
                            </p>
                    <div class = "ratings">
                        <p>IMDd <?= $nummer["ratings"]["imdb"] ?> </p>
                        <p>Rotten Tomatoes <?= $nummer["ratings"]["rotten_tomatoes"] ?>% </p>
                        <p>Metacritic <?= $nummer["ratings"]["metacritic"] ?> </p>
                    </div>
                </div>
            </div>
        </div>


<?php } ?>

</div>












    </body>
</html>