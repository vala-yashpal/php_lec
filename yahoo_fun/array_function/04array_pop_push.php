<?php
/* --------- Delete from End------- */

$fruit = ["orange", "banana", "apple", "grapes"];

array_pop($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";


/* --------- Add on Ending on the Array---------- */

$fruit = ["orange", "banana", "grapes"];

array_push($fruit,"apple","guava","lemon");

echo "<pre>";
print_r($fruit);
echo "</pre>";


?>