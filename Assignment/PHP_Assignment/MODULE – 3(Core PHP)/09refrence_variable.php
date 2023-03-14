<?php 

    $Question = "09  What will be the values of $ a and $ b after the code below is executed? Explain your answer.";

    echo "<pre>";
    echo "<h3 style=color:red;>Question =".$Question."<h3>";
    echo "</pre>";
    
    $a = '1';
    $b = &$a;
    $b = "2$b";

    $a = '1';
    
    echo $a."<br>";

    $b = &$a;
    echo $b."<br>";

    $b = "2$b"; 
    echo $b."<br>";
    
    $c=21;

    $sum=$c+$b;
    echo $sum;

?>