<?php
    /*-------Array Traversing Function------- */
    $food = array('orange', 'banana', 'apple', 'grapes');

    echo "<b>Current : </b>" . current($food) ."<br>";

    echo "<b>Key : </b>" . key($food) ."<br>";

    echo "<b>Pos : </b>" . pos($food) ."<br><br>";


    /*-------Array Traversing Next Function------- */

    next($food);

    echo "<b>Current : </b>" . current($food) ."<br><br>";

    next($food);

    echo "<b>Current : </b>" . current($food) ."<br><br>";


    /*-------Array Traversing Prev Function------- */

    prev($food);

    echo "<b>Current : </b>" . current($food) ."<br><br>";


    /*-------Array Traversing End Function------- */

    end($food);
    echo "<b>Current : </b>" . current($food) ."<br>";
    echo "<b>Key : </b>" . key($food) ."<br><br>";


    /*-------Array Traversing Each Function------- */

    echo "<pre>";
    print_r(each($food));
    echo "</pre>";


    /*-------Array Traversing Reset Function------- */

    reset($food);
    echo "<b>Current : </b>" . current($food) ."<br>";

?>