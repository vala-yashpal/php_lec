<?php

    $Question = "14 Get random values from array";
    echo "<h3 style=color:red;>Question =".$Question."<h3>";
        
  $Cars_Owned= array ("yashpal"=> "Ferrari","yash" => "BMW", "raj"=> "honda","sagar" =>"BMW",
  "Nisarg"=> "Audi","Naruto"=> "Volvo","rahul"=> "Rolls Royce" );

  echo"<h3>using array_rand</h3>";

  $rand_keys= array_rand($Cars_Owned, 5);

    echo $Cars_Owned[$rand_keys[0]]."<br>";

    echo $Cars_Owned[$rand_keys[1]]."<br>";

    echo"<h3>using shuffle</h3>";

    shuffle($Cars_Owned);

      echo $Cars_Owned[0]."<br>";

      echo $Cars_Owned[1]."<br>";
      
      echo $Cars_Owned[4]."<br>";
    
?>