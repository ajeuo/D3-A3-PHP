<?php 

    class Example{
        
        private $test;

        public function __construct(){
            $this->test = new Test();

        }

        public function __toString(){
            return $this->test . "<p> this is hans </p>";
        }



    }

?>