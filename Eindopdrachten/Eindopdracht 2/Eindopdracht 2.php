<?php
    session_start();


    if(isset($_GET['kaartid'])){
        $_SESSION['kaart1'] = $_GET['kaartid']; 
        // echo $_SESSION['kaart1']; // later weg doen
        } else {
            echo "nog geen kn";
        }
        
    if(isset($_GET['cijfer'])){
        $_SESSION['kaartcijfer'] = $_GET['cijfer']; 
        echo $_SESSION['kaartcijfer'];
    } 

    

?>

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
            
            $bord = new Bord(4,4);

            echo '<div class="container">';
                echo $bord;
            echo '</div>'; 

            ?>
        
    </body>
</html>