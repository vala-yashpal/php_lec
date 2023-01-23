<?php
    /*-------Array Extract Function------- */

    $a = "orange";

    $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

    extract($color);

    echo "Value of a : $a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";
    echo '<br><br>';

    /*-------Extract_rules------- */


    //EXTR_OVERWRITE

    extract($color,EXTR_OVERWRITE);

    echo "Value of a : $a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";
    echo '<br><br>';

    //EXTR_SKIP

    $a1 = "orange";
    $color = array('a1' => 'red', 'b1' => 'green', 'c1' => 'blue');

    extract($color,EXTR_SKIP);

    echo "Value of a1 : $a1 <br>";
    echo "Value of b1 : $b1 <br>";
    echo "Value of c1 : $c1 <br>";
    echo '<br><br>';

    //EXTR_PREFIX_SAME  ;

    extract($color,EXTR_PREFIX_SAME,"test");

    echo "Value of a1 : $a1 <br>";
    echo "Value of a1 : $test_a1 <br>";
    echo "Value of b1 : $b1 <br>";
    echo "Value of c1 : $c1 <br>";
    echo '<br><br>';

    //EXTR_PREFIX_ALL

    extract($color,EXTR_PREFIX_ALL,"test");

    echo "Value of a1 : $a1 <br>";
    echo "Value of a1 : $test_a1 <br>";
    echo "Value of b1 : $test_b1 <br>";
    echo "Value of c1 : $test_c1 <br>";
    echo '<br><br>';


    /*-------Compact Function------- */


    $firstname = "Yahoo";
    $lastname = "Baba";
    $age = "20";
    $gender = "Male";
    $country = "India";

    $newArray = compact("firstname", "lastname", "age");

    echo '<pre>';
    print_r($newArray);
    echo '</pre>';

    /*-------Use extra array in compact function------- */

    $extra = ["gender" , "country"];

    $newArray1 = compact("firstname", "lastname", "age",$extra );

    echo '<pre>';
    print_r($newArray1);
    echo '</pre>';

?>