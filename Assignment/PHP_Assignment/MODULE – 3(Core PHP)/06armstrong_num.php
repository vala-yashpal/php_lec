 <?php
        $Question = " 06.Write a program to find whether a number is Armstrong or not ";
        echo "<h3 style=color:red;>Question =".$Question."<h3>";
    
    $digit=153;
    $sum=0;
    
	$temp=$digit;
	
	while($digit>0)
    {
        $ld=$digit%10;
        $sum=$sum+($ld*$ld*$ld);
        $digit=$digit/10;
    }
    
    if($temp=$sum)
    {
        echo " enter number is Armstrong ";
    }
    else{
       echo "enter number is not Armstrong ";
    }
?>