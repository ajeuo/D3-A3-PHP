<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefenopgave2</title>
</head>
    <body>
        
      <?php

        /* De User class */
        class User {
          // public $username;
          public $Last;
          public $Date;

          // public function setUsername($naam) {
          //   $this->username = $naam;
          // }
          public function setLastname($Achternaam) {
            $this->Last = $Achternaam;
          }
          public function setBirthdate($Birthdate) {
            $this->Date = $Birthdate;
          }
          

          // public function getUsername() {
          //   return $this->username;
          // }
          public function getLastname() {
            return $this->Last;
          }
          public function getBirthdate(){
            return $this->Date;
          }
        }

        /* Reguliere procedurele code */
        $user = new User();
        // $user->setUsername('Lars <br>');
        $user->setLastname('Gezinus <br>');
        $user->setBirthdate('16-08-2006');

        // echo $user->getUsername();
        echo $user->getLastname(); 
        echo $user->getBirthdate(); 


        ?>


    </body>
</html>




