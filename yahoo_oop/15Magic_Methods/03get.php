<?php

    // class abc{
    //     private $data = ["name"=>"vala yashpal","course"=>"php","fee"=>"5000"];

    //     public function __get($property){
    //         echo "you  are trying to access non existng or private proparties($property)";
    //     }
    // }

    // $obj = new abc;
    // $obj->data;

    // class abc{
    //     private $data = ["name"=>"vala yashpal","course"=>"php","fee"=>"5000"];

    //     public function __get($key){
    //         if(array_key_exists($key,$this->data)){
    //             return $this->data[$key];
    //         }else{
    //             return "this key(key) not defin in array";
    //         }
    //     }
    // }
    // $obj = new abc;

//    echo  $obj->name;
//    echo  $obj->course;
// echo  $obj->anykey; 



    class  xyz{
        private $array = ["name"=>"vala ashpal","course"=>"php","fee"=>"10000"]; 

        public function __get($key){
            if(array_key_exists($key,$this->array)){
                return $this->array[$key];
            }else
            {
                echo "this key($key) not defin in array";
            }
        }
    }

    $obj = new xyz;
    echo $obj->age;

?>
