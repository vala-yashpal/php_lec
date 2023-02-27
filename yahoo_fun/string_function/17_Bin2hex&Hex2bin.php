<?php

    $str = "hello world hello earth";

    /*-------Binary to hexadecimal Function------- */
    $bin2hex = bin2hex($str);
    echo $bin2hex."<br><br>";

    /*-------hexadecimal to Binary Function------- */
    $hex2bin = hex2bin($bin2hex);
    echo $hex2bin;

?>