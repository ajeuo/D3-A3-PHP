<?php 

class Bord {
    private $kolommen;
    private $rijen;
    private $kaarten;
    private $paren = array();
    
    public function __construct($rijen, $kolommen){
        $this->setRijen($rijen);
        $this->setKolommen($kolommen);
        
        $this->maakKaarten();
        
        $this->clickHandler();
        
        //return; 
        }

        private function clickHandler(){
            if(isset($_GET['kaartid'])){
                // ??? setopen(true)
                $this->kaarten[$_GET['kaartid']]->setOpen(true);
            }
        }
        
        private function setKolommen($kolommen){
            $this->kolommen = $kolommen;
            //maakt kaarten word bij kolommen omdat het mee word gerekend
            $style  = "
            <style>
            .container {
                grid-template-columns: " . str_repeat("auto ", $kolommen) .  ";
                }
                </style>";
                echo $style;
                
                }
            private function setRijen($rijen){
                $this->rijen = $rijen;
                //maakt kaarten word bij rijen meegenomen
                }
                
            private function getKolommen(){
                return $this->kolommen;
                }

                private function getRijen(){
                    return $this->rijen;
        }
       
        
        public function maakKaarten(){

        
            // shuffle($this->paren);  
        

        //de kaarten 
        for($p = 0; $p < $this->kolommen*$this->rijen/2; $p++){
            array_push($this->paren, $p);
            array_push($this->paren, $p);
            }

            
                // shuffle($this->paren);
            
            $this->kaarten = array();
            for($r=0; $r<$this->rijen; $r++) {
                for($k=0; $k<$this->kolommen; $k++){
                $stuk = new Kaart($r*$this->kolommen+$k);
                $stuk->setNummer($this->paren[$r*$this->kolommen+$k]);
                array_push($this->kaarten, $stuk);
                }
            }
        }
                
        public function __toString(){
            $output = "";
            //de rijen en kolommen aanmaken
            for($r=0; $r<$this->rijen; $r++) {
                for($k=0; $k<$this->kolommen; $k++){
                    //De berekening voor de kolommen en rijen
                    $output .= $this->kaarten[$r*$this->kolommen+$k];
                }
            }
            $output .=
                "<form action='./reset.php'>
                <input type='submit' value='Reset'/>
                </form>";
            return $output;
            }
            
        }   
        ?>