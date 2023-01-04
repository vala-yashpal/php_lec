<?php

// 05.Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,34 
    
    $f1=1;
	$f2=0;
	$f3=0;
    echo " Fibonacci series <br><br>";
	
	for($i=1;$i<=10;$i++)
    {
        echo $f3."<br>";
        $f3=$f1+$f2;
        $f1=$f2;
        $f2=$f3;
    }
?>