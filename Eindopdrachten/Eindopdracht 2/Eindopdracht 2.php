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
        
            // haal de vorige kaartid op als het bestaat met een koele elseif vraagteken erin
            $previous_kaartid = isset($_SESSION['previous_kaartid']) ? $_SESSION['previous_kaartid'] : 'None';
            $prev_prev_kaartid = isset($_SESSION['prev_prev_kaartid']) ? $_SESSION['prev_prev_kaartid'] : 'None';
        
            // de vorige kaartid opslaan
            $_SESSION['previous_kaartid'] = $current_kaartid;
            // de vorige vorige kaartid opslaan
            $_SESSION['prev_prev_kaartid'] = $previous_kaartid;
        
            // echo "Current Kaart ID: " . $current_kaartid . "<br>";
            // echo "Vorige Kaart ID: " . $previous_kaartid . "<br>";
            // echo "Voor de vorige Kaart ID: " . $prev_prev_kaartid . "<br> <br>";
        }

            
        if(isset($_GET['cijfer'])){
        $current_kaartgetal = $_GET['cijfer']; 

        //zelfde als met kaartid maar dan nu kaartgetallen
        $previous_kaartgetal = isset($_SESSION['previous_kaartgetal']) ? $_SESSION['previous_kaartgetal'] : 'None';
        $prev_prev_kaartgetal = isset($_SESSION['prev_prev_kaartgetal']) ? $_SESSION['prev_prev_kaartgetal'] : 'None';
        
        $_SESSION['previous_kaartgetal'] = $current_kaartgetal;
        $_SESSION['prev_prev_kaartgetal'] = $previous_kaartgetal;

        // echo "Current Kaart Getal: " . $current_kaartgetal . "<br>";
        // echo "Vorige Kaart Getal: " . $previous_kaartgetal . "<br>";
        // echo "Voor de Vorige Kaart Getal: " . $prev_prev_kaartgetal . "<br>";
        // $matched = $prev_prev_kaartgetal == $previous_kaartgetal;

        if ($bord->counter % 2 == 0) {
            if ($previous_kaartgetal !== 'None' && $prev_prev_kaartgetal == $previous_kaartgetal) {
                //als ik current_kaart getal doe in plaats van prev_prev_kaartgetal dan slaat hij het verkeerde kaart id op
                //echo "match! <br>";
                $bord->kaarten[$_GET['kaartid']]->setOpen(true);
            } 
            elseif ($previous_kaartid !== 'None' || $current_kaartgetal == $previous_kaartgetal && $prev_prev_kaartid !== 'None' || $current_kaartgetal == $previous_kaartgetal) {
                    // Maak de previous & prev prev kaartid kaart false op 3e klik als het geen match is
                    $bord->kaarten[$previous_kaartid]->setOpen(false);
                    $bord->kaarten[$prev_prev_kaartid]->setOpen(false);
                }
            }
            $bord->checkWin();
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
     