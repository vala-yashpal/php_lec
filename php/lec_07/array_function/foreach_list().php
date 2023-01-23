<?php
    $emp = [
        ["id" => 1,"name" => "Krishana","designation" => "Manager","salary" => 50000],
        ["id" => 2,"name" => "Salman","designation" => "Salesman","salary" => 20000],
        ["id" => 3,"name" => "Mohan","designation" => "Computer Operator","salary" => 12000],
        ["id" => 4,"name" => "Amir","designation" => "Driver","salary" => 5000]
    ];

    foreach ($emp as list("id" => $id, "name" => $name,"designation" => $desg,"salary" => $salary)) {
        echo "Id: $id;<br> Name: $name;<br> Designation: $desg;<br> Salary: $salary<br><br><br>";
    }
?>