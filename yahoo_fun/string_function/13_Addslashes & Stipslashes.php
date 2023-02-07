<?php
/*-------String Addslashes Function------- */
$str = "hello i' am vala yashpal";

echo '<pre>';
print_r($str);
echo '</pre>';

$newstr = addslashes($str);

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------String slashes Function------- */
$str = 'hello i am  "vala yashpal"';

echo '<pre>';
print_r($str);
echo '</pre>';

/*-------Remove slashes which is added by addslashes function------- */
$newstr = stripslashes($str);

echo '<pre>';
print_r($str);
echo '</pre>';

/*-------String Addcslashes Function------- */
$str = "Hello World!";

$newstr = addcslashes($str, "W");

echo '<pre>';
print_r($str);
echo '</pre>';

/*-------String Addcslashes Function------- */
$newstr = addcslashes($str, "Wl");

echo '<pre>';
print_r($str);
echo '</pre>';

/*-------String Multiple Characters Addcslashes Function------- */
$newstr =  addcslashes($str,'A..Z');

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr =  addcslashes($str,'a..z');

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr =  addcslashes($str,'a..f');

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------String stripcslashes Function------- */
$newstr =  stripcslashes($str);

echo '<pre>';
print_r($newstr);
echo '</pre>';

?>