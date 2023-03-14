<?php

     $Question = "01.Write a PHP program to enter marks of five subjects Physics, Chemistry,
     Biology, Mathematics and Computer, calculate percentage and grade by if
     else";

     echo "<h3 style=color:red;>Question =".$Question."<h3>";
          
     // These are the marks of five subjects
     
     $Physics = 95;
     $Chemistry = 85;
     $Biology = 74;
     $Mathematics = 64;
     $Computer = 53;

     // It will calculate total, average, percentage, and grade

     $total = $Physics + $Chemistry + $Biology + $Mathematics + $Computer;
     $average = $total / 5.0;
     $percentage = ($total / 500.0) * 100;

     if ($percentage > 80 && $percentage <=100 )
     {
          $grade = "A";
     }
     else if ($percentage >60 && $percentage <=80)
     {
     $grade = "B";
     }
     else if ($percentage >45 && $percentage <=60)
     {
     $grade = "C";
     } 
     else if ($percentage >= 33 && $percentage <=45)
     {
          $grade = "D";
     }
     else
     {
          $grade = "E";
     }

     echo "marks of physics =".$Physics."<br>";
     echo "marks of chemistry=".$Chemistry."<br>";
     echo "marks of Biology=".$Biology."<br>";
     echo "marks of Mathematics=".$Mathematics."<br>";
     echo "marks of Computer=".$Computer."<br>";

     echo "The Total marks   = " . $total . "/500<br>";
     echo "The Average marks = " . $average . "<br>";
     echo "The Percentage    = " . $percentage . "%<br>";
     echo "The Grade         = '". $grade . "'<br>";
?>
