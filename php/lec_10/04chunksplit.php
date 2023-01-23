<?php
echo $MyString = "vala_yashpal";

echo "<br>============== Chunk Split==============<br><br>";

echo chunk_split($MyString,2,"$");
echo '<b><br>'."String before replacement:".'</br><br></b>';  

$string = "Hii everyone!";  
$search = 'Hii everyone!';  
$replace = 'Hello vala'; 
 
echo $string.'</br>';
$newstr = str_replace($search, $replace, $string, $count);  
echo '<b>'."New replaced string is:".'</br></b>';  
echo $newstr.'</br>'; 
 
echo 'Number of replacement ='.$count; 