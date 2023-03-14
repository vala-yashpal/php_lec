<?php
         $Question = "02.write a PHP program for find „Thursday‟ in week using switch Function.";
         
         echo "<h3 style=color:red;>Question =".$Question."<h3>";
    
    
    $day=5;
	
	switch($day){
        case 1:
           echo "today is sunday";
           break;
        case 2:
            echo "today is monday";
            break;
        case 3:
            echo "today is tuesday";
            break;
        case 4:
            echo "today is wednesday";
            break;
        case 5:
            echo "today is thursday";
            break;
        case 6;
            echo "today is friday";
            break;
        case 7:
            echo "today is saturday";
            break;
        default:
            echo "enter vadil day number";
	}
?>