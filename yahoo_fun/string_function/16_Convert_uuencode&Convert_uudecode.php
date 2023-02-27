<?php

    $str = "hello yashpal";

    $encode_string = convert_uuencode($str);
    echo $encode_string."<br><br>";

    $decode_string = convert_uudecode($encode_string);
    echo $decode_string;
?>