<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>streamingplatform</title>
        <link rel="stylesheet" href="streamingplatform.css" />
        <style>
            
        .gridcontainer{    
            display: grid;
            grid-template-columns: repeat(5, 1fr) ;   
            gap: 30px;  
        }
        .film {
            display: grid;
            grid-template-columns: 80px 100px;
           
            align-items: center;
        }    

        .notering {
            grid-column: 1 / 3 ;
            grid-row: 1 ;
            font-size: 200px;
            line-height: 1;
            z-index: 1 ;

        }
            
        .film img{
            grid-column: 2 ;
            grid-row: 1 ;
            z-index: 2 ;
        }
            
            
            </style>
    </head>
    <body>
         <div class = "gridcontainer">
<?php

    include("films.php");
     for ( $i = 0 ; $i < count($films) ; $i++ ){

    $nummer = $films[$i];

    

?>


        <div class = "film">
                <div class = "notering">
                    <?= $nummer["notering"] ?> 
                </div>
             <img src="afbeeldingen/<?= $nummer["image"] ?>" alt="iets">
        </div>


<?php } ?>

</div>












    </body>
</html>