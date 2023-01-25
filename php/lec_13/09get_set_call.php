<?php

    class magic_polymorphism{

        public function __get($data){
            echo "__getdata -> ".$data."<br>";
        }

        public function __set($var,$val){
            echo "variable is $var and value is $val <br>";
        }

        public function __call($funcname,$data){
            echo $funcname;
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }
        $object = new magic_polymorphism;

        $object->username; 
        $object->password;

        $object->username = "yashpal";
        $object->password = "1234";
        
        $object->getdata("users");
        $object->senddata("username","password","email");
?>