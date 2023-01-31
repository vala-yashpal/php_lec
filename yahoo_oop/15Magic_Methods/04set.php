<?php

    class student{
        private $name;

        public function hello(){
            echo $this->name;
        }
    
        public function __get($property){
            echo "you are trying to access non existing or  private  propaerty:$property<br>";
        }
        
        public  function __set($property,$value){

            if(property_exists($this,$property)){
                $this->$property = $value;
            }else{
                echo "Property does not exist : $property";
            }
        }
    }

    $test = new student();
    $test->name = "yashpal vala";
    $test->hello();
?>