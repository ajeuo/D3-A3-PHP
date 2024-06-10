<?php 

    class Bord {
        private $kolommen;
        private $rijen;
        private $kaarten;

        public function __construct(){
            $this->rijen = 2;
            $this->kolommen = 2;

            $this->maakKaarten();
            //return; 
        }
        
        public function setKolommen($kolommen){
            $this->kolommen = $kolommen;
            //maakt kaarten word bij kolommen omdat het mee word gerekend
            $this->maakKaarten();
        }
        public function setRijen($rijen){
            $this->rijen = $rijen;
            //maakt kaarten word bij rijen meegenomen
            $this->maakKaarten();
        }

        public function getKolommen(){
            return $this->kolommen;
        }
        
        public function getRijen(){
            return $this->rijen;
        }

        public function maakKaarten(){
            //de kaarten 
            $this->kaarten = array();
            for($r=0; $r<$this->rijen; $r++) {
                for($k=0; $k<$this->kolommen; $k++){
                    $stuk = new Stukken();
                    //De berekening voor de kolommen en rijen voor een id 
                    $stuk->setId($r*4+$k);
                    array_push($this->kaarten, $stuk);
                }
            }
        }

        public function __toString(){
            $output = "";
            //de rijen en kolommen aanmaken
            for($r=0; $r<$this->rijen; $r++) {
                $output .="<div class='row'>";
                for($k=0; $k<$this->kolommen; $k++){
                    //De berekening voor de kolommen en rijen
                    $output .= $this->kaarten[$r*4+$k];
                }
                $output .="</div>";
            }
            return $output;
        }
        
    }   


?>