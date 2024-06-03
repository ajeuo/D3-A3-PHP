<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefenopgave4</title>
</head>
    <body>  
        <?php
            spl_autoload_register(function ($class_name) {
                // $class_name pakt de classe
                echo $class_name."<br>";
                include $class_name . '.class.php';
            });

          /* Reguliere procedurele code */
            $user = new User();
            $user->setUsername('Lars');
            $user->setLastname('Gezinus');
            $user->setBirthdate('16-08-2006');

            // echo $user->getUsername()."<br>";
            // echo $user->getLastname()."<br>"; 
            // echo $user->getBirthdate()."<br>"; 

            echo $user;

            $user2 = new User();
            $user2->setUsername('Arie');
            $user2->setLastname('Kanarie');
            $user2->setBirthdate('11-11-2001');

            echo $user2;
    ?>        
           
    </body>
</html>