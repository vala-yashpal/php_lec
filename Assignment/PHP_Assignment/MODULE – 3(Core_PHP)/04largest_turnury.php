<?php

    $Question = "04.Write a PHP program to find the largest of three numbers using ternar Operator";
        
    echo "<h3 style=color:red;>Question =".$Question."<h3>";

	
    $num1=50;
	$num2=55;
	$num3=75;
    
    $max = ($num1 > $num2 && $num1 > $num3) ? $num1 : (($num2 > $num3)?$num2:$num3);
	
	echo "largest num is:".$max;
?>