<?php 

    class Stukken {
        private $id;

        
        //id aanmaken
        public function setId ($id){
            $this->id = $id;
        } 

        public function __toString(){

            $image = "./fotos/RIW.png";

            //maak de div, geef het een klasse en id
            $output = "<a href='?kaartnummer=".$this->id."' class='kaart' id='".$this->id."'>";
            $output .= "<img id='clicked' src=' $image '>";  
            //$output .= $this->id;  
            $output .= "</a>";
            
           
            if(isset($_GET['kaartnummer'])){
                if($_GET['kaartnummer'] == 1){
                } else {
                    $image = "TH.png";
                }
            }

            
            return $output;
        }     
        
        
    }

?>