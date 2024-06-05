<?php
    spl_autoload_register(function ($class_name) {
        // $class_name pakt de classe
        // echo "Klas naam is ", $class_name."<br>";
        include $class_name . '.class.php';
    });

    //ongeveer mijn huis (behalve locatie)
    $huis = new Huis('Grutolaan', '35', 'Beilen');

    $huis->setKamers(2);    
    $huis->setToiletten(1);
    $huis->setVerwarming(2);
    $huis->setSVerwarming('Elektrische warmtepomp');
    $huis->setm2(50);
    $huis->setWoz(150000);

    echo $huis->report();

    // anders huis
    $huis = new Huis('WegStraat', '69', 'Groningen');

    $huis->setKamers(4);    
    $huis->setToiletten(2);
    $huis->setVerwarming(4);
    $huis->setSVerwarming('Warmtepomp met Hydro');
    $huis->setm2(100);
    $huis->setWoz(330000);

    echo $huis->report();
?> 