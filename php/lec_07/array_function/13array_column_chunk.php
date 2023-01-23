<?php

    $array = array(
        array(
            'id' => 2201,
            'first_name' => 'Anil',
            'last_name' => 'Kapoor',
        ),
        array(
            'id' => 2202,
            'first_name' => 'Salman',
            'last_name' => 'Khan',
        ),
        array(
            'id' => 2203,
            'first_name' => 'John',
            'last_name' => 'Abraham',
        )
    ); 

    $newarray=array_column($array,'first_name','id');

    echo "<pre>";
    print_r($newarray);
    echo"</pre>";

        $cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel"];

    $newArray2 = array_chunk($cars,3);

    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";

    $age = array(
                "Mohan" => "35",
                "Aman" => "37",
                "Ram" => "43",
                "Salman" => "25" );

    $newArray3 = array_chunk($age,3,true);

    echo "<pre>";
    print_r($newArray3);
    echo "</pre>";
?>