<?php
    spl_autoload_register(function ($class_name) {
        // $class_name pakt de klasse
        // echo "Klassen: " . $class_name . "<br>";
        echo $class_name;
        include "classes/" . $class_name . '.class.php';
    });

    session_start();

    if (isset($_SESSION['bord'])){
        $bord = $_SESSION['bord'];
    } else {
        $bord = new Bord(4,4);
        $_SESSION['bord'] = $bord;
    }

        
        if(isset($_GET['kaartid'])){
           $bord->clickHandler();
        } else {
            echo "nog geen kn";
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

            echo '<div class="container">';
            echo $bord;
            echo '</div>'; 

            ?>
        
    </body>
</html>