<?php
    /*-------Array Sorting Function------- */
    $food = array('orange', 'banana', 'grapes', 'apple');

    sort($food); //Sorting 

    echo "<pre>";
    print_r($food);
    echo "</pre>";


    rsort($food); //Reverse 

    echo "<pre>";
    print_r($food);
    echo "</pre>";


    /*-------Numerical Index array------- */

    $food1 = [22,15,3,64];

    rsort($food1); //Reverse

    echo "<pre>";
    print_r($food1);
    echo "</pre>";

    /*-------Use Associative Array ------- */

    $food2 = array("d" => "lemon",
                "a" => "orange",
                "b" => "banana",
                "c" => "apple"
                );
    sort($food2);  /// ------ sorting

    echo "<pre>";
    print_r($food2);
    echo "</pre>";

    /*--------   associative sort  -----------*/

    $food3 = array("d" => "lemon",
                "a" => "orange",
                "b" => "banana",
                "c" => "apple"
                );
    asort($food3); //---- maintain also index 

    echo "<pre>";
    print_r($food3);
    echo "</pre>";

    /*--------   associative reverse sort  -----------*/

    arsort($food3);

    echo "<pre>";
    print_r($food3);
    echo "</pre>";


    /*-------Key Sort------- */

    ksort($food3);

    echo "<pre>";
    print_r($food3);
    echo "</pre>";

    krsort($food3); // Key Reverse Sort

    echo "<pre>";
    print_r($food3);
    echo "</pre>";

    /*--------- natsort --- Natural Order Sort --- algorithm ------- */

    $array1 = array("img12.png", "img10.png", "img2.png", "img1.png");

    natsort($array1);

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    /*--------- natcasesort() - case incentive "natural order" algorithm ------- */
    $array2 = array("Img12.png", "Img10.png", "img2.png", "img1.png");

    natcasesort($array2);

    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    /*-------array_multisort  --- not create new array------- */

    $foods = array("orange","banana");
    $veggie = array("lemon","carrot");

    array_multisort($foods,$veggie);

    echo "<pre>";
    print_r($foods);
    echo "</pre>";

    echo "<pre>";
    print_r($veggie);
    echo "</pre>";

    /*-------array_reverse------- */

    $foods1 = array("orange","banana","apple","grapes");

    $newArray = array_reverse($foods1);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

?>