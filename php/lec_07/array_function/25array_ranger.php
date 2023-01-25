<?php

    $newarray=range(1,10,2);

    echo "<pre>";
    print_r($newarray); 
    echo "</pre>";

    $newarray1=range("a","z",2);

    echo "<pre>";
    print_r($newarray1); 
    echo "</pre>";

    $newarray3=range("Z","A",-1);

    echo "<pre>";
    print_r($newarray3); 
    echo "</pre>";

    foreach (range('h', 'a') as $letter) {
        echo $letter . "<br>";
    }

?>