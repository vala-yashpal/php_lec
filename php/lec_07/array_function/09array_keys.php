<?php
    /*-------- array_keys--------*/
    $color =["red","green","blue","yellow"];

    $newArray = array_keys($color);

    echo '<pre>';
    print_r($newArray);
    echo '</pre>';

    /* --------With Associative Array --------- */
    $color1 =[
        "first" =>"red",
        "second" =>"green",
        "third" =>"blue",
        "fourth" =>"yellow"
    ];
    
    $newArray1 = array_keys($color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

    /* ---------Comes in 7.3---------- */
 
    $newArray1 = array_key_first($color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';


    /* ---------Comes in 7.3----------- */
        
    $newArray1 = array_key_last($color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

    /* ------array_key_exists--------- */
    $newArray1 = array_key_exists("third", $color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

    $newArray1 =  array_key_exists("six", $color1);
    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';


    /* -------array_key_exists short name key)exists-------- */
    $newArray1 = key_exists("second", $color1);

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';


    /* ---------check result with if condition----------- */
    if ($newArray1)
    {
    echo "Key exists!";
    }
    else
    {
    echo "Key does not exist!";
    }


?>