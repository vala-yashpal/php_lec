<?php

class student{

    private static function hello($name){
        echo "hello $name";
    }

    public static function __callstatic($method,$argument){
        // echo "this is private or non exists method: $method";
        if(method_exists(__class__,$method)){
            
         call_user_func_array([__class__,$method],$argument);
            
        }else{
            echo "method dose not exists";
        }
    }
}

student::hello("vala yashpal");
?>