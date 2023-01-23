<?php
    echo "<---------------------------------first------------------------><br><br>";
        
        $age=array(
            "bill"=>25,
            "joe"=>23,
            "peter"=>35
        );

        echo "bill age is ".$age["bill"] ."<br>";
        echo "joe age is ".$age["joe"] ."<br>";
        echo "peter age is ".$age["peter"] ."<br>";

    echo "<---------------------------------secound------------------------><br><br>";
        
        $age=[
            "bill"=>25,
            "joe"=>23,
            "peter"=>35  
        ];

        echo "<pre>";
        print_r($age);
        echo "</pre>";

    echo "<---------------------------------third------------------------><br><br>";
        
        $age=[
            "bill"=>"vala",
            "joe"=>23.5,
            "peter"=>true  
        ];

        echo "<pre>";
        var_dump($age);
        echo "</pre>";

    echo "<---------------------------------four------------------------><br><br>";
        
        
        $color=["red","gerren","blue","yellow"];

        for($i=0;$i<4;$i++)
        {
            echo $color[$i]."<br>";
        }
    
    echo "<---------------------------------five------------------------><br><br>";
        
        $age=["bill"=>25,"joe"=>23,"peter"=>35];

        foreach($age as $key => $value)
        {
            echo $key." = ".$value;
            echo "<br>";
        }

?>