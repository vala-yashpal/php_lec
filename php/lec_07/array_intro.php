<?php 

    echo "<---------------------------------first------------------------><br><br>";

        $a=array(10,20,30,40);
        print_r($a);    // echo $a; wrong -> Notice: Array to string conversion
        echo "<br>";                            
       

    echo "<br><---------------------------------secound------------------------><br><br>";

        $b = [10,20,30,40,50];
        echo"<pre>";
        print_r($b);
        echo"<pre>";  

    echo "<br><---------------------------------third------------------------><br><br>";

        $c[0]=10;
        $c[1]=20;
        $c[2]=30;
        $c[3]=10;

        echo $c[0];

    echo "<br><---------------------------------four------------------------><br><br>";

    $color = ["red","yellow","green","blue","orange"];

    for($i=0;$i<5;$i++)
    {
        echo $color[$i];
        echo"<br>";
    }

    echo "<br><---------------------------------five------------------------><br><br>";

    $colors = array("red","green","pink","blue","purpul");

    for($i=0;$i<5;$i++)
    {
        echo $colors[$i];
        echo "<br>";
    }

   
    

    


?>