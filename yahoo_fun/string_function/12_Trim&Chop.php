<?php
    /*-------String Trim Function------- */
    $str = "vala yashpal ";

    echo '<pre>';
    print_r($str);
    echo '</pre>';

    $newstr = trim($str,"a");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = trim($str,"b"); //-- no effect

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = trim($str,"ba");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = trim($str,"Yba");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String Left & Right Trim Function------- */
    $newstr = rtrim($str,"Yba");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = ltrim($str,"Yba");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String Remove Trim Function------- */
    $str = " yashpal ";

    $newstr = trim($str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr = rtrim($str);

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    /*-------String Chop Trim Function-- work same as rtrim------- */

    $newstr =  chop($str, "Yba");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  chop($str, "Baba");

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';

    $newstr =  chop($str); //-- remove extra right space

    echo '<pre>';
    print_r($newstr);
    echo '</pre>';
?>