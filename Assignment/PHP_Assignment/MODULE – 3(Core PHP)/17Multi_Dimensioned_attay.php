<?php
     $Question = "17 Declare a Multi Dimensioned array of floats called balances having Three rows and five columns.";
     echo "<h3 style=color:red;>Question =".$Question."<h3>";


    $Marks=array(
                "yash"=>array(
                                "Gujrati"=>70,
                                "English"=>60,
                                "Maths"=>80,
                                "hindi"=>99,
                                "computer"=>85,
                ),
                "yashpal"=>array(
                                "Gujrati"=>80,
                                "English"=>50,
                                "Maths"=>60,  
                                "hindi"=>99,
                                "computer"=>85,                            
                ),
                "Ravi"=>array(
                                "Gujrati"=>60,
                                "English"=>70,
                                "Maths"=>80,
                                "hindi"=>99,
                                "computer"=>85,
                ),
                "Shakti"=>array(
                                "Gujrati"=>40,
                                "English"=>50,
                                "Maths"=>60,
                                "hindi"=>99,
                                "computer"=>85,
                ),
                "Mohak"=>array(
                                "Gujrati"=>60,
                                "English"=>50,
                                "Maths"=>70,
                                "hindi"=>99,
                                "computer"=>85,
                )
                );

    echo "<pre>";
    print_r($Marks);
    echo "</pre>";


    // foreach ($Marks as $key => $value) {
    //     echo "NAME: ".$key." || MARKS = [";
    //     foreach($value as $key1=>$value1){
    //         echo $key1."(".$value1."),";
    //     }
    //     echo "]<br><br>";
    // }

    echo "<table border=2px cellpading='7px' cellspacing='0'>
        <tr>
        <th>Name</th>
        <th>Gujrati</th>
        <th>English</th>
        <th>Maths</th>
        <th>hindi</th>
        <th>computer</th>
        </tr>";

        foreach($Marks as $key=>$v1){
            echo "<tr>
                <td>$key</td>";
            foreach($v1 as $v2){
                echo "<td>$v2</td>";
            }
            echo "</tr>";
        }

    echo "</table>";

?>
        
