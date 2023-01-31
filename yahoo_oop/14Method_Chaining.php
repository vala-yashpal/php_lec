<?php

    class abc{
        public function first(){
            echo "this is first function<br>";
            return $this;
        }
        public function secound(){
            echo "tis is secound function<br>";
            return $this;
        }
        public function third(){
            echo "this is third function<br>";
        }
    }

    $obj = new abc;
    // $obj->first();
    // $obj->secound();
    // $obj->third();

    $obj->first()->secound()->third();



?>