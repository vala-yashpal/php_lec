
<?php

    $str = "yashpal vala";

    $arr = str_split($str,2);

    echo "<pre>";
    print_r($arr);


    $str1 = "yashpal vala";

    $var = chunk_split($str,2,"..");

    echo $var;

?>