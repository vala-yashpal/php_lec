<?php
    /* -------Array Map-------*/
    function square($n){
    return $n * $n;
    }

    $a = [1, 2, 3, 4, 5];

    $newArray = array_map('square', $a);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


    /* -------Array Map with two arrays -------*/

    function square1($n ,$m){
    return "$n for $m";
    }

    $b = ['lemon', 'orange', 'banana', 'apple', 'guava'];

    $newArray1 = array_map('square1', $a, $b);

    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";


    /* -------Return Mutlidimensional array-------*/

    function square2($n ,$m){
    return [$n => $m];
    }

    $newArray2 = array_map('square2', $a, $b);

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";

    /* -------Passing no function-------*/

    $newArray3 = array_map(null, $a, $b);

    echo "<pre>";
    print_r($newArray3);
    echo "</pre>";

    /* -------Using Associative Array-------*/

    function square3($n){
    return strtoupper($n);
    }

    $a1 = array("one" => "Apple", "two" => "Banana", "three" => "Orange");

    $newArray4 = array_map("square3", $a1);

    echo "<pre>";
    print_r($newArray4);
    echo "</pre>";

?>