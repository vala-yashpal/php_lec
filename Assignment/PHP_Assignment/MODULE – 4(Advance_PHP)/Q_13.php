<?php

  $Question = "13: Write program for Static Keyword in PHP?";
          
  echo "<h3 style=color:red;>Question =".$Question."<h3>";

  class MyClass {
    public static $str = "Hello Word!";

    public static function hello() {
      echo MyClass::$str;
    }
  }

  echo MyClass::$str;
  echo "<br>";
  echo MyClass::hello();
  
?>