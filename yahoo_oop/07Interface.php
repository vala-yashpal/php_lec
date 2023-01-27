<?php

    interface parent1{
        function addition($a,$b);
    }

    interface parent2{
        function subtraction($c,$d);
    }

    interface parent3{
        function multiplication($e,$f);
    }

    class child implements parent1,parent2,parent3{
        public function addition($a,$b){
            echo $a+$b ."<br>";
        }
        public function subtraction($c,$d){
            echo "vala" .$c-$d."<br>";
        }
        public function multiplication($e,$f){
            echo "multiplication : " .$e*$f."<br>";
        }
    }

    $object = new child;

    $object->addition(10,20);
    $object->subtraction(50,30);
    $object->multiplication(100,10);
?>