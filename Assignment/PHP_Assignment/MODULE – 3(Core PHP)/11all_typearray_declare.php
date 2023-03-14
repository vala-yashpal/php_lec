
<?php

$Question = "11 How can you declare the array (all type) in PHP?";
echo "<h3 style=color:red;>Question =".$Question."<h3>";


echo"<h4>Anser:<br><br>
In PHP, there are three types of arrays:
<br>
Indexed arrays - Arrays with a numeric index <br>
Associative arrays - Arrays with named keys <br>
Multidimensional arrays - Arrays containing one or more arrays</h4>";

echo'<h4> Index array can be defined as:<br>
$Food = array("Manchurian","Noodles","Vadapav","Sandwich");</h4>';

echo'<h4>Associative Array can be defined as:<br>
$Cars_Owned= array ("yashpal"=> Ferrari,"raj" => BMW, "divyesh"=> Urus,"yash" =>Mercedeas );
</h4>';

echo'<h4>Multidimensional array can be defined as:<br>
$Cars = array (<br>
    array("Ferrari",20,10),<br>
    array("BMW",29,5),<br>
    array("Urus",4,2),<br>
    array("Mercedeas",11,11)<br>
              );</h4>';


?>