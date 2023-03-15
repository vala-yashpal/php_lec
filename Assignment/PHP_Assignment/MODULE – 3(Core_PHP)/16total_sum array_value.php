<?php
        $Question = "16 • Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total. ";
        echo "<h3 style=color:red;>Question =".$Question."<h3>";

    $numbers = array(30,10,30,61,90);
    $total = 0;
    for($i = 0; $i<=4; $i++)
    {
        $total +=  $numbers[$i];
    }

    echo $total;
?>