<?php
/*------- Add on starting on the Array------ */
$fruit = ["orange", "banana", "grapes"];

array_shift($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";


/*------ Delete from Start------ */
$fruit = ["orange", "banana", "grapes"];

array_unshift($fruit,"Apple", "guava", "lemon");

echo "<pre>";
print_r($fruit);
echo "</pre>";
?>