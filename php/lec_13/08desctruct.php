<?php

    class parameter_constructor_example{
        
        public $connection = "";

        public function __construct($database){
            echo "called __construct<br>";

            $this->connection = new mysqli ("localhost","root","",$database);

            echo "<pre>";
            print_r($this->connection);
            echo "</pre>";
        }

        public function __destruct(){
            echo "last called __destruct";
        }
    }

    $object = new parameter_constructor_example("record");


    // echo "<pre>";
    // print_r($connection);
    // echo "</pre>";



?>