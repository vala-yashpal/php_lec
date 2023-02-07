<?php
    /* -----------Array Fill Keys----------- */
    $a = array("a","b","c","d","e");

    $newArray = array_fill_keys($a, "Testing");

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    /* -----------Array Fill----------- */
    $newArray1 = array_fill(-2, 4, "Testing");

    echo "<pre>";
    print_r($newArray1);
    echo "</pre>";

?>