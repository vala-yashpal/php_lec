<?php
$food = array('orange', 'banana', 'apple');

echo count($food,1).'<br>'; /*  ----- IInd parameter is MODE (0 or 1) */

$food1 = array(
      'fruits' => array('orange', 'banana', 'apple'),
      'veggie' => array('carrot', 'collard', 'pea')
    );

/* (Mode counts all the elements of multidimensional arrays) */

echo sizeof($food1,1).'<br>';

echo sizeof($food1['fruits'],1).'<br>';


$len = count($food);
for($i = 0; $i < $len; $i++){
    echo $food[$i] . "<br>";
}

$food2 = array('orange', 'banana', 'orange' , 'apple');

// count array values

echo "<pre>";
print_r(array_count_values($food2));
echo "</pre>";
?>