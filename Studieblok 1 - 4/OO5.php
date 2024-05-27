<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefenopgave5</title>
</head>
    <body>  
        <?php
            /* De User class */
            class User {
            private $Username;
            private $Last;
            private $Date;

            public function __construct($naam, $achternaam, $birthdate) {
                $this->Username = $naam;
                $this->Last = $achternaam;
                $this->Date = $birthdate;
            }   

            public function getUsername() {
                return $this->Username;
            }
            public function getLastname() {
                return $this->Last;
            }
            public function getBirthdate(){
                return $this->Date;
            }
            }

            
            $user = new User("Lars ", "Gezinus Kok ", "16-08-2006");

            echo $user->getUsername();
            echo $user->getLastname(); 
            echo $user->getBirthdate(); 
        ?>
    </body> 
</html>