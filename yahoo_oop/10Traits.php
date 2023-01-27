<?php

    trait hello{
        public function showhello(){
            echo "called trait showhello function<br>";
        }
        public function showhi(){
            echo "called trait showhi function<br>";
        }
    }

    trait bye{
        public function showbye(){
            echo "called trait showbye   function<br>";
        }
    }

    class base1{
        use hello,bye;
    }

    class base2{
        use hello;
    }

    $object_base1 = new base1;
    $object_base1->showhello();
    $object_base1->showhi();
    $object_base1->showbye();

    
    $object_base2 = new base2;
    $object_base2->showhello();
    $object_base2->showhi();
?>