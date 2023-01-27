<?php

    // class base{
    //     public static $name = "vala yashpal";

    //     public function show(){
    //         echo self::$name;
    //     }
    // }
    // $object = new base;
    // $object->show();

    
    // class base{
    //     public static $name = "vala yashpal";

    //     public static function show(){
    //         echo self::$name;
    //     }
    //     public function __construct(){
    //         echo self::show();
    //     }
    // }
    // $object = new base;
    // $object->show();


    // class base{
    //     public static $name = "vala yashpal";

    //     public function __construct($n){
    //         self::$name=$n;
    //     }
    //     public static function show(){
    //         echo self::$name;
    //     }
    // }
    // $object = new base("dodiya yash");
    // $object->show();

    class base{
        public static $name = "vala yashpal";

        public function __construct($n){
            self::$name=$n;
        }
     
    }
    class derived extends base{
        public static function show(){
            echo parent::$name;
        }
    }

    $object = new derived("rahul dodiya");
    $object->show();

    
    
    

?>