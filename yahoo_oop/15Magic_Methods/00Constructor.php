<?php
        class constructor_example{      // CLASS NAME AND OBJECT NAME ARE SAME
            public function constructor_example(){
                echo "called  vala yashpal construct<br>";
            }
        }
        $object = new constructor_example;


    class person{
        public $name = "no name";
        public $age = 0;

        public function show(){

            echo "name is:".$this->name." --  age is:".$this->age."<br>";
        }
    }
    $object1 = new person();
    $object1->name = "raj";
    $object1->age = 25;
    $object1->show();




    class person1{
        public $name;
        public $age;

        public function __construct($n="no name",$a=0){
            $this->name = $n;
            $this->age = $a;
        }
        public function show1(){

            echo "<br>name is:".$this->name." --  age is:".$this->age."<br>";
        }
    }
    $object_person1 = new person1();
    $object_person2 = new person1(" vala yashpal",23);
    $object_person3 = new person1(" zala jay",20);
    $object_person1->show1();
    $object_person2->show1();
    $object_person3->show1();
    



?> 