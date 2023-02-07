<?php
    /*-------String Length Function------- */
    $str = "tashpal vala";

    $newStr = strlen($str) ;

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /* -------- II Example -------- */
    $str = "vala";

    $newStr = strlen($str);

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /* -------- str_word_count -------- */
    $newStr = str_word_count($str);

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /* -------- str_word_count --II Example-------- */
    $str = "hello friend  how are you";

    $newStr = str_word_count($str);

    echo '<pre>';
    print_r($newStr);
    echo '</pre>';

    /* --------Return Array-------- */
    str_word_count($str,0);

    str_word_count($str,1);

    $array =  str_word_count($str,1);

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    /* ---- Returns an array where the key is the position of the word in the string---- */
    $array =  str_word_count($str,2);

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    /*-------String Count Function------- */
    $count = substr_count("Hello world. The world is nice","world");

    echo "<pre>";
    print_r($count);
    echo "</pre>";

    $count = substr_count("Hello world. The world is nice","world",10);

    echo "<pre>";
    print_r($count);
    echo "</pre>";

    $count = substr_count("Hello world. The world is nice","world",1,20);

    echo "<pre>";
    print_r($count);
    echo "</pre>";

    $count = substr_count("Hello world. The world is nice","world",1,5); 

    echo "<pre>";
    print_r($count);
    echo "</pre>";
?>