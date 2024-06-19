<?php 

    class Kaart {
        private $id;
        private $image= './fotos/RIW.png';
        private $open = false;
        private $cijfer;

        public function __construct($id){
            $this->id = $id;
        }
        
        //id aanmaken
        private function setId ($id){
            $this->id = $id;
        } 
            
        public function setOpen($open){
            $this->open =$open;

            // staat nu hieronder
            // if ($this->open) {
            //     $this->image = './fotos/TH.png';
            // } else {
            //     $this->image ='./fotos/RIW.png';
            // }
        }

        public function setNummer($cijfer){
            $this->cijfer = $cijfer;
        }
                    
        public function __toString(){

        //als kaart open is geklikt dan:
            if($this->open){
                $output = "<a href='?kaartid=".$this->id."&cijfer=".$this->cijfer."' class='kaart' id='".$this->id."'>";
                $output .= "<img id='clicked' src='./fotos/TH.png'>";
                $output .= "<p>" . $this->cijfer . "</p>";
                //$output .= $this->id;  
                $output .= "</a>";
            }else { //gewoon default
                $output = "<a href='?kaartid=".$this->id."&cijfer=".$this->cijfer."' class='kaart' id='".$this->id."'>";
                $output .= "<img id='clicked' src='./fotos/RIW.png'>";
                //$output .= $this->id;  
                $output .= "</a>";

            }
            
            return $output;
        }
    }
        
    
?>