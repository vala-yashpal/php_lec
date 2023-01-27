<?php

    class base{
        public $name;

        public function __construct($n){
            $this->name = $n;
        }

        public function show(){
            echo "your name is : ".$this->name;
            echo "<br>";
        }
    }

    $object_base = new base("yashpal vala");
    $object_base->name="vala yashpal";  //public propatri override in name allow
    $object_base->show();

    //=========================================================================================================

    class base1{
        protected $name;

        public function __construct($n){
            $this->name = $n;
        }

        protected function show1(){
            echo "your name is : ".$this->name;
            echo "<br>";
        }
    }

    class derived extends base1{
        public function get(){
            echo "your name is : ".$this->name;
            echo "<br>";
        }
    }

    $object_base1 = new base1("yash");
    //$object_base1->name="vala yashpal";  //protected propatri override in name  not allopw(error  Uncaught Error: Cannot access protected property)
    // $object_base1->show(); 

    $object_derived = new derived("yashpal vala");
    $object_derived->get();

    //=========================================================================================================================

    class base_private{
        private $name;
    
        public function __construct($n){
            $this->name = $n;
        }
    
        public function show_private(){
            echo "Your Name : " . $this->name . "<br>";
        }
            
    }
    
    class derived1 extends base_private{
        public function get(){
            echo "Your Name : " . $this->name . "<br>";
        }
    }
    
    $object_private = new base_private("dodiya yash ");
    
    // $object_private->name = "baba Yahoo";
    
    $object_private->show_private();
    

?>