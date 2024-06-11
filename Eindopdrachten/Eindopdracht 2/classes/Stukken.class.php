<?php 

    class Stukken {
        private $id;

        
        //id aanmaken
        public function setId ($id){
            $this->id = $id;
        } 

        public function __toString(){
            //maak de div, geef het een klasse en id

            $output = "<a href='?kaartnummer=".$this->id."' class='kaart' id='".$this->id."'>";
            $output .= "<img id='clicked' src='./fotos/RIW.png'>";  
            //$output .= $this->id;  
            $output .= "</a>";

            
            return $output;
        }     
    
        
    }

?>