<?php

    $Question = "15:  Write PHP Script of Object Iteration?";        
    echo "<h3 style=color:red;>Question =".$Question."<h3>";

    class MyClass
    {
        public $var1 = 'value 1';
        public $var2 = 'value 2';
        public $var3 = 'value 3';
        protected $protected = 'protected var';
        private   $private   = 'private var';

        function iterateVisible() {

        echo "MyClass::iterateVisible:<br><br>";

        foreach ($this as $key => $value) {

            print "$key => $value"."<br>";
        }

        }
    }

    $class = new MyClass();

        foreach($class as $key => $value) {
            print "$key => $value"."<br>";
        }
        echo "<br>";


    $class->iterateVisible();

?>