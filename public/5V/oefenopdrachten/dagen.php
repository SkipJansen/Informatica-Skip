<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Paginatitel</title>
        <link rel="stylesheet" href="stylesheet.css" />
    </head>
    <body>
        <?php
            $dag1 = "maandag";
            $dag2 = "dinsdag";
            $dag3 = "woensdag";
            $dag4 = "donderdag";
            $dag5 = "vrijdag";
            $dag6 = "zaterdag";
            $dag7 = "zondag";
    
            $dagen = array( "maandag", "disndag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag"
            );
        
       echo "<ul>"     ; 

            foreach($dagen as $dag) {
                echo "<li>" . htmlspecialchars($dag) . "</li>";
}
        echo "</ul>"
        ?>

        
    </body>

</html>