<?php
    class Calculator{
        public $a;
        public $b;


        function __construct($a,$b){

            $this->a=$a;
            $this->b=$b;
        }

        function sum(){
            echo $this->a+$this->b;
        }

        function sub(){
            echo $this->a-$this->b;

        }
        function multiply(){
            echo $this->a*$this->b;

        }
        function divide(){
            echo $this->a/$this->b;

        }
        function remainder(){
            echo $this->a%$this->b;


        }

    }
    $answer= new calculator(4,2);
    $answer->sum();
    echo "<br>";
    $answer->sub();
    echo "<br>";

    $answer->multiply();
    echo "<br>";

    $answer->divide();
    echo "<br>";

    $answer->remainder();

    


?>