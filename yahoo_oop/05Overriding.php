<?php
    // proparty overriding
    class base{
        public $name = "parent class <br>";
    }

    class derived extends base {
        public $name = "child class<br>";
    }

    $object = new derived;

    echo $object->name;

    // ===========================================method overriding ==============================================================

    class base1{
        public $name1 = "parent class<br>";
        
        public function calc($a,$b){
            return $a * $b;
        }
    }

    class derived1 extends base1{
        public $name2 = "child class<br>";
        
        public function calc($a,$b){
            return $a + $b;
        }
    }
    $object1 = new base1;

    // $object1 = new derived1;

    echo $object1->calc(10,5);


?>