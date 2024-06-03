<?php
        /* De User class */
        class User {
        private $username;
        private $Last;
        private $Date;

        public function setUsername($naam) {
            $this->username = $naam;
        }
        public function setLastname($Achternaam) {
            $this->Last = $Achternaam;
        }
        public function setBirthdate($Birthdate) {
            $this->Date = $Birthdate;
        }


        public function getUsername() {
            return $this->username;
        }
        public function getLastname() {
            return $this->Last;
        }
        public function getBirthdate(){
            return $this->Date;
        }

        public function __toString(){
            return $this->username." ".$this->Last." ".$this->Date. "<br>";
        }
    }
?>