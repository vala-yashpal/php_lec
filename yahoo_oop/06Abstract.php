<?php

    abstract class parentclass{
        public $name;

        abstract protected  function  calc($a,$b);

    }

    class childclass extends parentclass{

        public function calc($a,$b){
            echo "vala yashpal";
        }
    }

    $object = new childclass;
    $object->calc(10,20);



?>