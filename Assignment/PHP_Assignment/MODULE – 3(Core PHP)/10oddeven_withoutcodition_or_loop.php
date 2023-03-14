<?php

$Question = "10 How can you tell if a number is even or odd without using any Condition or loop? ";
echo "<h3 style=color:red;>Question =".$Question."<h3>";

$arr=array("0"=>"Even","1"=>"Odd");

$check=25;

echo "Your number is: ".$arr[$check%2];

?>