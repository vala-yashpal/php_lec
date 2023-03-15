 <?php

      $Question = "12 Explain with exampl Covert a JSON string to array.";
      echo "<h3 style=color:red;>Question =".$Question."<h3>";

       $json_string   = '{"a":1,"b":2,"c":3,"d":4,"e":5,"Nitya": "BMW", "Divyesh": "Urus","Hardev":"Mercedeas"}';

      $my_array_data = json_decode($json_string, TRUE);

      print_r ($my_array_data);
       
?>