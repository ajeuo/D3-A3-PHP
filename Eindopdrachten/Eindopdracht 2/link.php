<?php
    session_start();
    if(isset($_SESSION['counter'])){
        $_SESSION['counter']++;
    } else {

        $_SESSION['counter'] = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height: 100px;
        }
    </style>
</head>
    <body>

    <?php
        $image = "RIW.png";
        if(isset($_GET['kaartnummer'])){
            if($_GET['kaartnummer'] == 1){
            } else {
                $image = "toad harbor.png";
            }
        }
    ?>
    <a href="?kaartnummer=1&naam=mario"><img src="fotos/<?php echo $image ?>" alt=""></a>
    <a href="?kaartnummer=2&size=100"><img src="fotos/RIW.png" alt=""></a>
    <a href="?kaartnummer=3&color=fullcolor"><img src="fotos/RIW.png" alt=""></a>
    <?php
        if(isset($_GET['kaartnummer'])){
            if($_GET['kaartnummer'] == 2){
                header("refresh:4");
            }
        }
        echo $_SESSION['counter'];
    ?>
    </body>
</html>