<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>streamingplatform</title>
        <link rel="stylesheet" href="streamingplatform.css" />
        <style>
       body{
            background-color: #111; 
            font-family: Arial, sans-serif;
       } 
        
        h1 {   
            font-size: 100px;
            margin-top: 0px;
            color: white;
        }



        .gridcontainer{    
            display: grid;
            grid-template-columns: repeat(5, 1fr) ;   
            gap: 30px;
            padding-bottom: 500px;  
        }
        .film {
            display: grid;
            grid-template-columns: 120px 350px;
            grid-template-rows: 200px;
            align-items: center;
            position: relative;
        }    
        .film.tien .notering {
            transform: translateX(-50px);
        }

        .poster {
            grid-column: 2;
            grid-row: 1;
            align-self: center;
            position: relative;
            width: max-content;
            z-index: 2;
        }

        .poster img:hover {
            transform: scale(1.15);
            
        }

        .notering {
            grid-column: 1 / 3 ;
            grid-row: 1 ;
            font-size: 200px;
            line-height: 1;
            z-index: 1 ;
            color: transparent;
            -webkit-text-stroke: 4px darkred;

            transform: translateX(50px);
            

        }
            
        .poster img {
            display: block;
            transition: 0.3s;
            
        }
        
        .informatie{
            visibility: hidden;
            opacity: 0;
            position: absolute;
            top: 200px;
            left: -25px;
            width: 363px;
            z-index: 3;
            width: 363px;
            padding: 15px;
            background-color: #222;
            color: white;
            border-radius: 8px;
           
           
            
            
            
        }
        
        .poster:hover .informatie{
           visibility: visible;
           opacity: 1;
           transition: 0.3s;
        }
        
        
        .film:has(img:hover) {
            z-index: 10;
        }
        
        @media (max-width: 1600px) {
            .gridcontainer {
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
    }
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
            <div class = "poster">
             <img src="afbeeldingen/<?= $nummer["image"] ?>" alt="iets">
                <div class = "informatie">
                    <h3> <?= $nummer["titel"] ?> </h3>
                    <p>Genre: <br><?= $nummer["genre"] ?> </p>
                    <p>Jaar: <br><?= $nummer["jaar"] ?> </p>
                    <p>Synopsis:<br> <?= $nummer["synopsis"] ?> </p>
                    <p>Nieuw: <br>
                        <?php
                            if ($nummer["nieuw"] == true) {
                                echo "Ja";
                                }
                            else {
                                echo "Nee";
                                }
                        ?> </p>
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
                    <p>IMDd <?= $nummer["ratings"]["imdb"] ?> </p>
                    <p>Rotten Tomatoes <?= $nummer["ratings"]["rotten_tomatoes"] ?>% </p>
                    <p>Metacritic <?= $nummer["ratings"]["metacritic"] ?> </p>
                </div>
            </div>
        </div>


<?php } ?>

</div>












    </body>
</html>