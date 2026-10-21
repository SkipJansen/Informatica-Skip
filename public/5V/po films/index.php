<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>streamingplatform</title>
        <link rel="stylesheet" href="streamingplatform.css" />
        <style>
        

        h1 {   
            font-size: 100px;
            margin-top: 0px;
        }



        .gridcontainer{    
            display: grid;
            grid-template-columns: repeat(5, 1fr) ;   
            gap: 30px;  
        }
        .film {
            display: grid;
            grid-template-columns: 120px 100px;
            grid-template-rows: 200px;
            align-items: center;
        }    
        .film.tien .notering {
            transform: translateX(-50px);
        }

        .film img:hover {
            transform: scale(1.15);
        }

        .notering {
            grid-column: 1 / 3 ;
            grid-row: 1 ;
            font-size: 200px;
            line-height: 1;
            z-index: 1 ;
            transform: translateX(50px);
            

        }
            
        .film img{
            grid-column: 2 ;
            grid-row: 1 ;
            z-index: 2 ;
            transition: 0.3s;
        }
        
        .informatie{
            display: none;
            grid-column: 1 / 3;
            grid-row: 2;`
            width: 200px;
            padding: 15px;
            background-color: #222;
            color: white;
            border-radius: 8px;
            
            
        }
        .film:has(img:hover) .informatie{
            display: block;
        }
            
            </style>
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
                
             <img src="afbeeldingen/<?= $nummer["image"] ?>" alt="iets">
                <div class = "informatie">
                    <h3> <?= $nummer["titel"] ?> </h3>
                    <p> <?= $nummer["genre"] ?> </p>
                    <p> <?= $nummer["jaar"] ?> </p>
                    <p> <?= $nummer["synopsis"] ?> </p>
                    <p> 
                        <?php
                            if ($nummer["nieuw"] == true) {
                                echo "Ja";
                                }
                            else {
                                echo "Nee";
                                }
                        ?> </p>
                    <p> <?php
                            for ($j = 0; $j < count($nummer["cast"]); $j++) {
                                echo $nummer["cast"][$j];

                            if ($j < count($nummer["cast"]) - 1) {
                                echo ",";
                            }
                            }
                        ?>
                            
                            </p>
                    <p> <?= $nummer["ratings"]["imdb"] ?> </p>
                    <p> <?= $nummer["ratings"]["rotten_tomatoes"] ?> </p>
                    <p> <?= $nummer["ratings"]["metacritic"] ?> </p>
                </div>
        </div>


<?php } ?>

</div>












    </body>
</html>