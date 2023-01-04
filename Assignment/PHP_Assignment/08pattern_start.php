<?php

    /* 08.Write a program for this Pattern:
    
        *****
        *
        *
        *
        *****
         
    */
    
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