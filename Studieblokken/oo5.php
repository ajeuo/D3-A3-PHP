<?php
    class User{
        private $last;
        private $date;
        private $first;

        public function __construct($firstname, $lastname){
            $this->setFirstname($firstname);
            $this->setLastname($lastname);
        }

        public function setFirstname($Voornaam){

            $this->first = $Voornaam;
        }

        public function setLastname($achternaam){

            $this->last = $achternaam;
        }
        public function setBirthdate($birthdate){

            $this->date = $birthdate;
        }


        public function getFirstname(){
            return $this->first;
        }

        public function getLastname(){
            return $this->last;
        }
        public function getBirthdate(){
            return $this->date;
        }
        public function __toString(){
            return $this->first . " " . $this->last . ' (' . $this->date . ')';
        }
    }

    
    $user = new User("Teun","de Roode");

    // $user->setFirstname("Teun ");
    // $user->setLastname("de Roode");
    $user->setBirthdate("16-06-2006");



    echo $user->getBirthdate();
    echo  "<br>";

    echo $user;
?>
