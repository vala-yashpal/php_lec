<?php

    $a1=["a"=>"red","b"=>"green","c"=>"red","d"=>"yellow"];

    $newarray=array_values($a1);//new index array

    echo"<pre>";    
    print_r($newarray);
    echo "</pre>";

    $newarray=array_unique($a1);//unique value /duplicate valu remove

    echo"<pre>";
    print_r($newarray);
    echo "</pre>";
?>