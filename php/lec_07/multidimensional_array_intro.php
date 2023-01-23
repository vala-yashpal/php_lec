<?php

echo "<---------------------------------first------------------------><br><br>";

    $emp = array(
        array(1,"rahul","principal",50000),
        array(2,"raj","teacher",4000),
        array(3,"man","teacher",8000),
        array(4,"dipak","clark",3000),
        array(5,"ajay","security",2500)
    );

    echo $emp[3][2]; 

    echo "<pre>";
    print_r($emp);
    echo "</pre>";

echo "<---------------------------------secound------------------------><br><br>";
   
    $emp = [
        [1,"rahul","principal",50000],
        [2,"raj","teacher",4000],
        [3,"man","teacher",8000],
        [4,"dipak","clark",3000],
        [5,"ajay","security",2500]
    ];

    for($row=0;$row<5;$row++)
    {
        for($col=0;$col<4;$col++)
        {
            echo $emp[$row][$col]." ";
        }
        echo "<br>";
    }

echo "<---------------------------------third------------------------><br>";
   
    $emp = [
        [1,"rahul","principal",50000],
        [2,"raj","teacher",4000],
        [3,"man","teacher",8000],
        [4,"dipak","clark",3000],
        [5,"ajay","security",2500]
    ];

    echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>
            <th>Emp id.</th>
            <th>Emp Name</th>
            <th>designetion</th>
            <th>salary</th>
            </tr>";
    foreach($emp as  $value)
    {
        echo "<tr>";
        foreach($value as $value1){
            echo "<td>".$value1."</td>";
        }
        echo "<tr>";
        echo "<br>";
    }
    echo "<table>";

?>