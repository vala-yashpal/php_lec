<?php

    class student{
        private $first_name;
        private $last_name;

        private function setname($fname,$lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __call($method,$argument){
            if(method_exists($this,$method)){
               call_user_func_array([$this,$method],$argument); 
            }else{
                echo "method dose not exix : $method";
            }
        }
    }

    $obj = new student();
    $obj->setname("vala","yashpal");

    echo "<pre>";
    print_r($obj); 
    echo "</pre>";
?>