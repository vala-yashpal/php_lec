<?php

   class calculation{
    public $a,$b,$c;

    function addition(){
        $this->c=$this->a+$this->b;
        return $this->c; 
    }

    function subtraction(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }
   } 

   $object = new calculation();

   $object-> a = 100;
   $object-> b = 50;

   echo "additio is :".$object->addition()."<br>";
   

   $object1 = new calculation;
   $object1->a=500;
   $object1->b=200;

   echo "subtraction is :".$object1->subtraction()."<br>";
   echo "subtraction is :".$object->subtraction();
  







   





?>