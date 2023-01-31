<?php

    function sum(int $valu) {
        echo $valu+10;
        echo "<br>";
    }
    sum(10);
    // sum("vala"); // A non-numeric value encountered in 

    function fruit(array $name){
        foreach($name as $name){
            echo $name . "<br>";
        }
    }
    // $test = "apple";//(Invalid argument supplied for foreach())
    $test = array("apple","banana");//valid
    fruit($test);
    echo "<br>";

    class hello{
         public function sayhello(){
            echo "hello everyone";
         }
    }

    class bye{
        public function sayby(){
            echo "bye everyone";
        }
    }

    function wow(hello $c){ //(Uncaught TypeError: Argument 1 passed to wow() must be an instance of hello, instance of bye given, called in)
        $c->sayhello();
    }
    $object = new hello();

    wow($object);
    echo "<br>";

    class school{
        public function getnames(student $names){
            echo "<ul>";
            foreach($names->names() as $name){
                echo "<li>".$name. "</li>";
            }
            echo "</ul>";
        }
    }

    class student{
        public function names(){
            return ["ajay","mehul","rahul","gopal"];
        }
    }

    class library{

    }

    $lib = new  library();
    $stu = new  student();
    $sch = new  school();

    $sch->getnames($stu);
?>