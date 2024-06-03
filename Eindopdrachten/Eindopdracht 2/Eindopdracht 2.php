<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopracht Memory</title>
</head>
    <body>

    <div class="Board" style="margin-top: 45vh; margin-left: 45vw">efaefaeffae</div>

        <?php
            spl_autoload_register(function ($class_name) {
                // $class_name pakt de klasse
                echo "Klassen: " . $class_name . "<br>";
                include "classes/" . $class_name . '.class.php';
            });

            $example = new Example();
            $bord = new Bord();
            $stukken = new Stukken();
       


            echo $example;
            

        ?>

        
    </body>
</html>


