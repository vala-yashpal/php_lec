<?php

    class  constructorexample{
        
        public function __construct(){
            echo "called base __construct<br><br>";
        }
    }

    class childeclass extends constructorexample{

        public function __construct(){// implicit constructor calling while object creation
            parent :: __construct(); // ( a token that allows access to static, constant, and overridden properties or methods of a class)explicit constructor calling
            echo "called childe __construct";
        }
    }

    // $object = new constructorexample;

    $object = new childeclass;
?>