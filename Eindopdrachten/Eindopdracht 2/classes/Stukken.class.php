<?php 

    class Stukken {
        private $id;

        
        //id aanmaken
        public function setId ($id){
            $this->id = $id;
        } 

        public function __toString(){
            //maak de div, geef het een klasse en id
            $output = "<div class='kaart' id='".$this->id."'>";
            // $output .= $this->id;
            $output .= "</div>";
            
            return $output;
        }     

        
    }

?>