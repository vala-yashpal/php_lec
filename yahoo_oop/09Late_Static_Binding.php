<?php

    class base{
        protected static $name = "yashpal";

        public function show(){
            echo self::$name."<br>";
            echo static::$name; 
        }
    }

    class derived extends base{
        protected static $name = "jay";
    }

    $object = new derived;
    $object->show();
?>