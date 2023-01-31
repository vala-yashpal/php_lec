<?php
require("products.php");
require("test.php");

    class product{
        public function __construct(){
            echo "this is index pages<br>";
        }
    }

    use  pro\yash\vala as pyv; //rename for namespace;

    $obj = new  product;

    // $obj = new pro\yash\vala\product;
    $obj = new pyv\product;

    // $obj = new test\product;

    function wow(){
        echo "wow from index page<br>";
    }

    wow();
   pro\yash\vala\wow();


?>