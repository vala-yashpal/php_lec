<?php
     $Question = "15 Write a PHP script which decodes the following JSON string.";
     echo "<h3 style=color:red;>Question =".$Question."<h3>";

    $json_string   = '{"a":1,"b":2,"c":3,"d":4,"e":5,"Nitya": "BMW", "Divyesh": "Urus","Hardev":"Mercedeas"}';

    print_r (json_decode($json_string));
    
?>