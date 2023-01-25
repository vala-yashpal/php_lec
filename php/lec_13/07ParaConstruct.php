<?php

    class parameter_constructor_example{

        public $connection = "";

        public function __construct($database){
            echo "called constructor";
            $this->connection = new mysqli("localhost","root","",$database);

            echo "<pre>";
            print_r($this->connection);
            echo "</pre>";
        }
    }

    $object = new parameter_constructor_example("record");

?>