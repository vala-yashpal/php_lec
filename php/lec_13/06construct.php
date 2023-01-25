<?php

    class constructorExample{

            // public $connection = new mysqli("localhost","root","","masterdatabase");
        public $connection = "";

        public function __construct(){
            echo "called __construct is a method  which is invoked by default when objects are created";
            
            $this->connection = new mysqli("localhost","root","","record"); 

            echo "<pre>";
            print_r($this->connection);
            echo "</pre>";
        }
    }

    $object = new constructorExample;
?>