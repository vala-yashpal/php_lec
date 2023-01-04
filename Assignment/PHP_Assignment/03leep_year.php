<?php  
    
  //03.Write a PHP program to check Leap years between 1901 to 2016 Using nested if. 
   
$start_year = 1901;  
$end_year = 2016;

for($i=$start_year;$i<=$end_year;$i++)
{
 	if($i % 4 == 0)
	{
		echo ".$i is leep year <br>";    
	}  
}
?>
