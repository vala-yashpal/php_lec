<?php

$md5Str = "google";

$md5Str1 = "amazon@";

// $pass = "TOPS";
// $pass = "check@data444";
// $md5Str2 = "aAAsdfgkjahdfgkhajdfgkjhasdkjg";

echo md5($md5Str1)."<br>";  // use for the encription and its one way encription we cant decript it
echo md5("B")."<br>";       // use for the encription and its one way encription we cant decript it


echo base64_encode($md5Str1)."<br>";
echo base64_decode("YW1hem9uQA==")."<br><br>";

$str = " hello every one   ";
$str1 = "hi friend good morning";
echo"<===========================string_length======================><br><br>";

    echo "(string length):".strlen($str)."<br>";

echo"<===========================strtoupper======================><br>";

    echo strtoupper($str)."<br>"; 

echo"<===========================strtolower======================><br>";

    echo strtolower($str)."<br>";

echo"<===========================upar_case_first_character======================><br>";    
echo ucfirst($str1)."<br>"; 

echo"<===========================upar_case_first_character_ucwords======================><br>"; 
echo ucwords($str1)."<br>"; 

echo"<===========================ucwords======================><br>"; 

    echo trim($str1)."<br>"; 

    echo "This is the right_trim: ".rtrim($str1,'data')."<br>"; 

    echo "This is the left_trim: ".ltrim($str1,'The')."<br>"; 

    echo"<========================html_entity_decode=========================><br><br>"; 

// echo "<a href='google.com'>Google</a><br><br>";

$strhtml = '&lt;a href=&quot;https://www.tops-int.com&quot;&gt;tops.com&lt;/a&gt;';

echo html_entity_decode($strhtml)."<br>";


echo "This is the output: ".$strhtmlent = '<a href="https://www.tops-int.com">Go to <b>Tops Technology</b></a></br>';

// echo "htmlentities :  ".htmlentities($strhtmlent)."<br>"; 

$str = "This is some <b>bold</b> text.";

echo htmlspecialchars($strhtmlent);


?>