<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopracht Memory</title>
    <link rel="stylesheet" type="text/css" href="Eindopdracht 2.css">
</head>
    <body>
        <?php
            spl_autoload_register(function ($class_name) {
                // $class_name pakt de klasse
                // echo "Klassen: " . $class_name . "<br>";
                include "classes/" . $class_name . '.class.php';
            });

            $bord = new Bord();
            $stukken = new Stukken();
        ?>

        <?php 
            echo '<div class="container">';
                $bord->setKolommen(4);    
                $bord->setRijen(4);
                echo $bord;
            echo '</div>'; 
            ?>
        
    </body>
</html>


