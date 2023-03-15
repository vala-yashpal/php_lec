<?php

  $Question = "14: Create multiple Traits and use it in to a single class? ";
          
  echo "<h3 style=color:red;>Question =".$Question."<h3>";

    trait Hello {
        public function sayHello() {
            echo 'Hello ';
        }
    }

    trait World {
        public function sayWorld() {
            echo 'Everyone';
        }
    }

    class MyHelloWorld {
        use Hello, World;
        
        public function mark() {
            echo '!';
        }
    }

    $obj = new MyHelloWorld();
    $obj->sayHello();
    $obj->sayWorld();
    $obj->mark();
?>
