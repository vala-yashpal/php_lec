<?php
/* Multiple Array Merge */
$fruit = ["orange", "banana", "grapes"];
$veggie = ['carrot', 'pea'];

$newArray = array_merge($fruit,$veggie);

echo "1<pre>";
print_r($newArray);
echo "</pre>";


/* -------------Multiple Array Merge -------------------- */
$color = ['red', 'blue'];

$newArray = array_merge($fruit,$veggie,$color);

echo "2<pre>";
print_r($newArray);
echo "</pre>";

/* ------------ASSOCIATIVE Index Array------------------ */
$fruit = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];

$veggie = ['d' => 'carrot','e' => 'pea'];   /* ---- Also with SAME KEY */

$newArray = array_merge($fruit,$veggie);

echo "3<pre>";
print_r($newArray);
echo "</pre>";


/* -------------Numberic Value Enter----------------- */
$veggie = ['b' => 'carrot','e' => 'pea', 55, 68];

$newArray = array_merge($fruit,$veggie);

echo "4<pre>";
print_r($newArray);
echo "</pre>";


/* ---------if u want the duplicate key entry of first array---------- */

$newArray = $fruit + $veggie;


echo "5<pre>";
print_r($newArray);
echo "</pre>";


/* ----------array_merge_recursive-------------- */
$newArray = array_merge_recursive($fruit,$veggie); /* --- for common key built new array --- */

echo "6<pre>";
print_r($newArray);
echo "</pre>";

$veggie = ['b' => ['color' => ['red','blue','green']],  /* ---- more complex multidim array ----*/
            'e' => 'pea',
            55,
            68
          ];

$newArray = array_merge_recursive($fruit,$veggie);

echo "7<pre>";
print_r($newArray);
echo "</pre>";

/* --------array_combine-------- */

$name = array("Ram","Mohan","Salman");
$age = array("35","37","43");

$newArray = array_combine($name, $age);

echo "8<pre>";
print_r($newArray);
echo "</pre>";

?>