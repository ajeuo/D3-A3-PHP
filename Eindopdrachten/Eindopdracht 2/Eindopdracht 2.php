<?php
    spl_autoload_register(function ($class_name) {
        // echo "Klassen: " . $class_name . "<br>";
        include "classes/" . $class_name . '.class.php';
    });

    session_start();

    if (isset($_SESSION['bord'])){
        $bord = $_SESSION['bord'];
    } else {
        $bord = new Bord(4,4);
        $_SESSION['bord'] = $bord;
    }

  
    if (isset($_GET['kaartid'])) {
        $bord->clickHandler();
    
        $current_kaartid = $_GET['kaartid'];
    
        // haal de vorige kaartid op als het bestaat
        $previous_kaartid = isset($_SESSION['previous_kaartid']) ? $_SESSION['previous_kaartid'] : 'None';
    
        // de vorige kaartid opslaan
        $_SESSION['previous_kaartid'] = $current_kaartid;
    
        echo "Current Kaart ID: " . $current_kaartid . "<br>";
        echo "Previous Kaart ID: " . $previous_kaartid . "<br>";
    }

        
    if(isset($_GET['cijfer'])){
        $_SESSION['kaartgetal'] = $_GET['cijfer']; 
        echo "kaartgetal: " . $_SESSION['kaartgetal'];
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