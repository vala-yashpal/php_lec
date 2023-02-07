<?php
    /*-------String:Replace Function------- */
    $str = "Hello world. The world is nice";

    $newstr = str_replace("world","earth",$str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = str_replace("world","",$str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*------- Find Array------- */
    $find = ["Hello", "world"];
    $replace = ["Hi", "earth"];

    $newstr = str_replace($find,$replace,$str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------Replace in array ------- */
    $color = ["blue","red","green","yellow"];

    echo "<pre>";
    print_r(str_replace("red","pink",$color));
    echo "</pre>";

    /*-------str_ireplace------- */
    $newstr = str_replace("WORLD","earth",$str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------substr_replace ------- */
    $str = "Hello world. The world is nice";

    $newstr = substr_replace($str, "earth", 6);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  substr_replace($str, "earth", 6 , 10);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  substr_replace($str, "earth", 6 , -5);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = substr_replace($str, "earth", 0 , 0); //--- add in starting

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------strtr ------- */
    $str = "Hello world. The world is nice";

    $newstr = strtr($str,"eo","ia");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';


    /*-------Multiple Replace Array------- */
    
    $array = array("Hello" => "Hi", "world" => "earth");

    $newstr = strtr($str,$array);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
?>