<?php
    /* -------Array Walk-------*/
    $fruits = array(
                "a" => "Lemon",
                "b" => "Orange",
                "c" => "Banana",
                "d" => "Apple"
            );

    array_walk($fruits, "myFunction");

    function myFunction($value, $key){
    echo "$key : $value <br>";
    }
    echo "<br>";
    /* -------Third parameter as a value -------*/

    array_walk($fruits, "myFunction1", "is a key of");

    function myFunction1($value, $key , $param){
    echo "$key $param $value. <br>";
    }
    echo '<br><br>';
    
    /* -------array_walk_recursive-------*/

    $veggie = array( "1" => "Carrot", "2" => "Tomatoes");

    $fruits1 = array(
                $veggie,
                "a" => "Lemon",
                "b" => "Orange",
                "c" => "Banana",
                "d" => "Apple"
            );

    array_walk_recursive($fruits1, "myFunction1", "is a key of");

?>