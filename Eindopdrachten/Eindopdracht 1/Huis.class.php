<?php

        class Huis {

            private $kamers;
            private $toiletten;
            private $verwarming; //alleen boolean
            private $sVerwarming; //soort verwarming
            private $straatnaam;
            private $huisnummer;
            private $plaats;
            private $m2;
            private $Woz;
            // private $belasting;

            public function __construct($straatnaam, $huisnummer, $plaats){
                $this->straatnaam = $straatnaam;
                $this->huisnummer = $huisnummer;
                $this->plaats = $plaats;
            }

            
            // set: binnenkant en de rest
            public function setKamers($kamers){
                $this->kamers = $kamers;
            }
            
            public function setToiletten($toiletten){
                $this->toiletten = $toiletten;
            }
            
            public function setVerwarming($verwarming){
                $this->verwarming = $verwarming;
            }
            
            public function setSVerwarming($sVerwarming){
                $this->sVerwarming = $sVerwarming;
            }
            
            public function setm2($m2){
                $this->m2 = $m2;
            }
            
            public function setWoz($Woz){
                $this->Woz = $Woz;
            }
            

            // get: binnenkant en de rest
                public function getStraatnaam(){
                    return $this->straatnaam;
                }
    
                public function getHuisnummer(){
                    return $this->huisnummer;
                }
    
                public function getPlaats(){
                    return $this->plaats;
                }
                public function getKamers(){
                    return $this->kamers;
                }
                
                public function getToiletten(){
                    return $this->toiletten;
                }
                
                public function getVerwarming(){
                    return $this->verwarming;
                }

                public function getSVerwarming(){
                    return $this->sVerwarming;
                }
                
                public function getm2(){
                    return $this->m2;
                }

            public function getWoz(){
                return $this->Woz;
            }
            
            // public function getBelasting(){
                //     return $this->belasting;
                // }
                
                
                
                // De woz berekenen - eind woz 
                public function belasting(){
                    $belasting = 0;

                    // De Woz waarde
                    if($this->getWoz() < 100000) {
                        $belasting += 600;
                    }
                    if($this->getWoz() >= 100000 && $this->getWoz() < 200000) {
                        $belasting += 2000;
                    }
                    if($this->getWoz() >= 200000) {
                        $belasting += 6000;
                    }

                    //aantal kamers
                    if($this->getKamers() <= 1){
                        $belasting += 100;
                    }
                    if($this->getKamers() == 2){
                        $belasting += 300;
                    }
                    if($this->getKamers() >= 3){
                        $belasting += 800;
                    }

                    if($this->getPlaats() == 'Amsterdam' || $this->getPlaats() == 'Rotterdam' || $this->getPlaats() == 'Groningen'){
                        $belasting += 1000;
                    }

                    return $belasting;
                }

                public function __toString(){
                    return "Locatie: ".$this->straatnaam." ".$this->huisnummer." ".$this->plaats. "<br>";
                }

                public function report(){
                    return $this->__toString()."Aantal kamers: ".$this->kamers."<br>"
                    ."Aantal toiletten: ".$this->toiletten."<br>"
                    ."Aantal verwarmingen: ".$this->verwarming."<br>" 
                    ."Soort verwarmingen: ".$this->sVerwarming."<br>"
                    ."Aantal vierkanten meter: ".$this->m2."<br>"
                    ."Woz waarde: ".$this->Woz."<br>"
                    ."Belasting: ".$this->belasting()."<br> <br>";
                }
            }
            
            ?> 