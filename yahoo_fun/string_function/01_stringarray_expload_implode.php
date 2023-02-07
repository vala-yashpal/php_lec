  <?php
/*-------Explode Function------- */

$str = "Hello world. It's a beautiful day";

$array = explode(" ",$str);

echo "<pre>";
print_r($array);
echo "</pre>";



$array1 = explode(".",$str);

echo "<pre>";
print_r($array1);
echo "</pre>";

/*-------Using Limit with explode ------- */

$array2 = explode(" ",$str, 2);

echo "<pre>";
print_r($array2);
echo "</pre>";


$array3 = explode(" ",$str, 0); //-- Return in one Array Value

echo "<pre>";
print_r($array3);
echo "</pre>";

$array4 = explode(" ",$str, -1);

echo "<pre>";
print_r($array4);
echo "</pre>";

/*----------- Another example -----------*/

//EXAMPLE I

$str1 = 'red,green,blue,orange';

$array5 = explode(",",$str1);

echo "<pre>";
print_r($array5);
echo "</pre>";

//EXAMPLE II

$str2 = 'red,green-blue-orange';

$array6 = explode(",",$str2);

echo "<pre>";
print_r($array6);
echo "</pre>";

//EXAMPLE III

$array7 = explode("-",$str2);

echo "<pre>";
print_r($array7);
echo "</pre>";


/*-------Implode Function------- */


$arr = array('Hello','World!','Beautiful','Day!');

$strr = implode(" ",$arr);

echo $strr;
echo '<br><br>';

//EMAXPLE II

$strr1 = implode("-",$arr);

echo $strr1;
echo '<br><br>';

//EMAXPLE III

$strr2 = implode(",",$arr);

echo $strr2;
echo '<br><br>';

//EMAXPLE III

$strr3 = implode("wow",$arr);

echo $strr3;
echo '<br><br>';

//EMAXPLE III

$strr4 = implode("<br>",$arr);

echo $strr4;
echo '<br><br>';


//You can use (Join) function work same as Implode

$strr5 = join("<br>",$arr);

echo $strr5;
echo '<br><br>';

?>