<?php
echo "<br>============== Count Chars==============<br>";
echo $str = "hhhh A a a";
echo "<pre>";
// print_r( count_chars($str)); // give 1 where ascii values stored char
// print_r( count_chars($str,1)); // give only thoes keys where char stored
print_r( count_chars($str,2)); // remove thoes keys where char stored   