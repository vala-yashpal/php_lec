<?php

    // $color=array("red","green","blue","yellow","pink");

    // $newarray= array_slice($color,-2,2);

    // echo "<pre>";
    // print_r($newarray);
    // echo "</pre>";

    $color = array('a'=>'red', 'b'=>'green', '42'=>'blue', 'd'=>'yellow');

    $newarray = array_slice($color, 0, 3 ,true);

    echo "<pre>";
    print_r($newarray);
    echo "</pre>";

    // $a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");

    // print_r(array_slice($a,1,2,true));

?>