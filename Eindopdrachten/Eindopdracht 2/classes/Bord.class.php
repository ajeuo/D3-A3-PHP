<?php   

class Bord {
    private $kolommen;
    private $rijen;
    public $kaarten;
    private $paren = array();
    public $counter;

    public function __construct($rijen, $kolommen){
        $this->setRijen($rijen);
        $this->setKolommen($kolommen);
        
        $this->maakKaarten();
        $this->clickHandler();
    }

    public function clickHandler(){
        $this->counter++;

        // echo "Counter: " . $this->counter . "<br> <br>";


        if(isset($_GET['kaartid'])){
            // ??? setopen(true)
            $this->kaarten[$_GET['kaartid']]->setOpen(true);
        } 

    }

    public function checkWin() {

        //hij kijkt alle kaarten
        foreach ($this->kaarten as $kaart) {
            //controlleerd als de kaart niet open is
            if (!$kaart->isOpen()) {
                return;
            }
        }
        //dus als alle kaarten niet open zijn dan geeft hij deze melding
        echo "<h2>You Win!</h2>";
        // - 1 omdat de counter op 1 begint zonder clicks
        echo "<p>You have clicked ". $this->counter - 1 ." times </p>";
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

        //de kaarten 
        for($p = 0; $p < $this->kolommen*$this->rijen/2; $p++){
            array_push($this->paren, $p);
            array_push($this->paren, $p);
        }
        
        $this->kaarten = array();
        shuffle($this->paren);

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