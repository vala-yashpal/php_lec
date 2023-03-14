<?php
    $Question = "08.Write a program for this Pattern:  *****
                                                *
                                                *
                                                *
                                                *****";
    echo "<pre>";
    echo "<h3 style=color:red;>Question =".$Question."<h3>";
    echo "</pre>";

         
    
    
    for($i=1;$i<=5;$i++)
    {
        if($i == 1 || $i==5)
        {
            echo "*****";
            echo "<br>";
        }
        else{
            echo "*";
            echo "<br>";
        }
        
    }
?>