<?php 
// . Write a program to print the below format :
// 1 5 9
// 2 6 10
// 3 7 11
// 4 8 12

$num1=1;
$num2=4;


    for($i=1;$i<=4;$i++){

        $num1=$i;

        echo $num1;

        $num1=$num1+$num2;
        echo "  ".$num1;

        $num1=$num1+$num2;
        echo "  ".$num1;    

        echo "<br>";
    }

?>