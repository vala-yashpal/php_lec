<?php

    /*------ Array Splice ------*/

    $color =["red","green","blue","yellow","brown"];
    array_splice($color, 2 ); /* ----- First Method-------*/
    echo "<pre>";
    print_r($color);
    echo "</pre>";


    $color =["red","green","blue","yellow","brown"];
    array_splice($color, 2, 1); /* ---- Second Method----*/
    echo "<pre>";
    print_r($color);
    echo "</pre>";


    $color =["red","green","blue","yellow","brown"];
    array_splice($color, 1, -2); /* ---- Third Method ------- */
    echo "<pre>";
    print_r($color);
    echo "</pre>";
    
    $color =["red","green","blue","yellow","brown"];
    /* -------Remove the last element of $color-------- */
    array_splice($color, -1);
    echo "<pre>";
    print_r($color);
    echo "</pre>";

    $color =["red","green","blue","yellow","brown"];
    /* -------Remove the first element of $color------- */
    array_splice($color, 0, 1);
    echo "<pre>";
    print_r($color);
    echo "</pre>";
    
    $color =["red","green","blue","yellow","brown"];
    $fruit = ["Orange", "Apple"];
    /* -----------Remove First Two elements and add new elements in $color ------------- */
    array_splice($color, 0 , 2, $fruit);
    echo "<pre>";
    print_r($color);
    echo "</pre>";

    $color =["red","green","blue","yellow","brown"];
    $fruit = ["Orange", "Apple"];
    /* -----------use count method in $color ------------- */
    array_splice($color, 2, count($color), $fruit);
    echo "<pre>";
    print_r($color);
    echo "</pre>";

    $color =["red","green","blue","yellow","brown"];
    $fruit = ["Orange", "Apple"];
    /* -----------add new elements in the end of $color with count method ------------- */
    array_splice($color,count($color),0, $fruit);                                                           
    echo "<pre>";
    print_r($color);
    echo "</pre>";

?>