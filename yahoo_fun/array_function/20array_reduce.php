<?php
/* -------Array Reduce-------*/
function myFunction($n,$m){   
  return $n . "-" . $m;
}

$a = ['orange', 'banana', 'apple'];

$newArray = array_reduce($a, 'myFunction');

echo "<pre>";
print_r($newArray);
echo "</pre>";


/* -------Passing third parameter as a Initial Value -------*/

$newArray1 = array_reduce($a, 'myFunction', "lemon");

echo "<pre>";
print_r($newArray1);
echo "</pre>";

//OR

$newArray2 = array_reduce($a, 'myFunction', 20);

echo "<pre>";
print_r($newArray2);
echo "</pre>";


/* -------Use Numeric Index array-------*/

$a1 = [1, 2, 3, 4, 5];

$newArray3 = array_reduce($a1, 'myFunction', 20);

echo "<pre>";
print_r($newArray3);
echo "</pre>";

//SUM

function myFunction1($n,$m){   
  return $n + $m;
}

$newArray4 = array_reduce($a1, 'myFunction1');

echo "<pre>";
print_r($newArray4);
echo "</pre>";

//Multiplication 

function myFunction2($n,$m){   
  return $n * $m;
}

$newArray5 = array_reduce($a1, 'myFunction2');

echo "<pre>";
print_r($newArray5);
echo "</pre>";

/* -------Pass third Initial Parameter-------*/

$newArray6 = array_reduce($a1, 'myFunction2',10);

echo "<pre>";
print_r($newArray6);
echo "</pre>";

//Additon
/* -------Can also right -------*/

function myFunction3($n,$m){  
	//$n =$n + $m; 
	$n += $m;
	return $n;
}

$newArray7 = array_reduce($a1, 'myFunction3',10);

echo "<pre>";
print_r($newArray7);
echo "</pre>";

?>