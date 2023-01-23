<?php

    $MyString = "this is the demo for the string is can hold Alphanumeric 
    value and symbals too like A-Z,a-z,0-9 and !@#$%^&*() ";
    echo $MyString;
    $str = bin2hex($MyString);
    echo "<br>";
    echo ($str); 
    echo "<br>";
    $st= hex2bin($str);
    echo "<br>";
    echo $st;
    echo "<br>";



    $mystring1 ="valayashpal";
    echo $mystring1;
        echo "<br>";
    $str1 = bin2hex($mystring1);
    echo $str1;
    echo "<br>";
    echo ($str1); 
    echo "<br>";


    echo bin2hex("A")."<br>";
    echo bin2hex("a")."<br>";

    echo "<br>";
    echo bin2hex("B")."<br>";
    echo bin2hex("b")."<br>";


?>